const CACHE_NAME = "e-arsip-v1";
const urlsToCache = [
  "/",
  "/index.php",
  "/login.php",
  "/dashboard.php",
  "/arsip.php",
  "/upload.php",
  "/profile.php",
  // Admin pages
  "/admin/index.php",
  "/admin/dashboard.php",
  "/admin/arsip.php",
  "/admin/upload.php",
  "/admin/profile.php",
  // Petugas pages
  "/petugas/index.php",
  "/petugas/dashboard.php",
  "/petugas/arsip.php",
  "/petugas/upload.php",
  "/petugas/profile.php",
  // User pages
  "/user/index.php",
  "/user/dashboard.php",
  "/user/arsip.php",
  "/user/upload.php",
  "/user/profile.php",
  // Assets
  "/assets/css/bootstrap.min.css",
  "/assets/css/style.css",
  "/assets/js/vendor/jquery-1.12.4.min.js",
  "/assets/js/bootstrap.min.js",
  "/assets/js/app.js",
  "/assets/img/Logo.png",
  "/gambar/depan/1.png",
  "/img/favicon.ico",
  "/assets/img/icon-192x192.png",
  "/assets/img/icon-512x512.png",
  "/offline.html"
];

// Install Service Worker
self.addEventListener("install", function (event) {
  console.log("Service Worker: Installing...");
  event.waitUntil(
    caches
      .open(CACHE_NAME)
      .then(function (cache) {
        console.log("Service Worker: Caching essential files");
        // Gunakan catch untuk menangani jika ada file yang gagal di-cache
        return cache.addAll(urlsToCache).catch(error => {
            console.error('Service Worker: Failed to cache some essential files during install:', error);
        });
      })
      .then(function () {
        console.log("Service Worker: Installed");
      })
      .catch(function (error) {
        console.error("Service Worker: Installation failed:", error);
      })
  );
});

// Activate Service Worker
self.addEventListener("activate", function (event) {
  console.log("Service Worker: Activating...");
  event.waitUntil(
    caches.keys().then(function (cacheNames) {
      return Promise.all(
        cacheNames.map(function (cacheName) {
          if (cacheName !== CACHE_NAME) {
            console.log("Service Worker: Clearing old cache:", cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
    .then(function () {
        console.log("Service Worker: Activated and old caches cleared.");
        return self.clients.claim(); // Penting: Mengambil alih semua klien dengan segera
    })
    .catch(function(error) {
        console.error("Service Worker: Activation failed:", error);
    })
  );
});

// Fetch Event - Menggunakan Strategi Cache-First, kemudian Network, dengan Fallback ke Offline Page
self.addEventListener("fetch", function (event) {
  // Hanya proses permintaan GET
  if (event.request.method !== 'GET') {
    return; // Abaikan permintaan non-GET (POST, PUT, DELETE, dll.)
  }

  event.respondWith(
    caches.match(event.request)
      .then(function (response) {
        // Jika respons ada di cache, kembalikan itu.
        if (response) {
          console.log(`Service Worker: Serving from cache: ${event.request.url}`);
          return response;
        }

        // Jika tidak ada di cache, coba ambil dari jaringan.
        console.log(`Service Worker: Fetching from network: ${event.request.url}`);
        return fetch(event.request)
          .then(function (networkResponse) {
            // Periksa apakah respons jaringan valid sebelum di-cache.
            // Status 200, dan type 'basic' (dari origin yang sama) atau 'cors' (untuk resource lintas origin seperti CDN font).
            if (!networkResponse || networkResponse.status !== 200 || 
                (networkResponse.type !== 'basic' && networkResponse.type !== 'cors')) {
              console.warn(`Service Worker: Not caching invalid response for: ${event.request.url}, Status: ${networkResponse ? networkResponse.status : 'No response'}, Type: ${networkResponse ? networkResponse.type : 'No type'}`);
              return networkResponse;
            }

            // Penting: Kloning respons karena stream hanya bisa dibaca sekali.
            // Satu untuk dikembalikan ke browser, satu untuk disimpan ke cache.
            const responseToCache = networkResponse.clone();

            // Cache respons jaringan untuk permintaan di masa mendatang.
            caches.open(CACHE_NAME).then(function (cache) {
              console.log(`Service Worker: Caching new response for: ${event.request.url}`);
              cache.put(event.request, responseToCache);
            });

            return networkResponse;
          })
          .catch(function (error) {
            // Jika pengambilan dari jaringan gagal (misal: offline atau error lain)
            console.error(`Service Worker: Fetch failed for ${event.request.url}:`, error);

            // Strategi Fallback untuk Halaman HTML
            // Jika permintaan adalah navigasi ke halaman (HTML), coba sajikan offline.html
            if (event.request.mode === 'navigate' || 
                (event.request.method === 'GET' && event.request.headers.get('accept') && event.request.headers.get('accept').includes('text/html'))) {
                console.log("Service Worker: Fetch failed for HTML page, serving offline.html");
                return caches.match("/offline.html");
            }
            // Untuk jenis permintaan lain (gambar, css, js) yang gagal dari jaringan dan tidak ada di cache,
            // biarkan permintaan tersebut gagal secara default atau bisa mengembalikan placeholder.
            return new Response(null, { status: 503, statusText: 'Service Unavailable' });
          });
      })
      .catch(function(error) {
        console.error('Service Worker: Error in fetch event handling (caches.match failed):', error);
        // Fallback ke offline.html jika ada error umum dan ini adalah permintaan halaman
        if (event.request.mode === 'navigate' || 
            (event.request.method === 'GET' && event.request.headers.get('accept') && event.request.headers.get('accept').includes('text/html'))) {
            return caches.match("/offline.html");
        }
        return new Response(null, { status: 503, statusText: 'Service Unavailable' });
      })
  );
});