const CACHE_NAME = "e-arsip-v1";
const urlsToCache = [
  "/",
  "/index.html",
  "/login.php",
  "/assets/css/bootstrap.min.css",
  "/assets/js/vendor/jquery-1.12.4.min.js",
  "/assets/js/bootstrap.min.js",
  "/assets/img/Logo.png",
  "/gambar/depan/1.png",
  "/img/favicon.ico",
  "/assets/img/icon-192x192.png",
  "/assets/img/icon-512x512.png",
];

// Install Service Worker
self.addEventListener("install", function (event) {
  console.log("Service Worker: Installing...");
  event.waitUntil(
    caches
      .open(CACHE_NAME)
      .then(function (cache) {
        console.log("Service Worker: Caching files");
        return cache.addAll(urlsToCache);
      })
      .then(function () {
        console.log("Service Worker: Installed");
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
            console.log("Service Worker: Clearing old cache");
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

// Fetch Event
self.addEventListener("fetch", function (event) {
  event.respondWith(
    caches
      .match(event.request)
      .then(function (response) {
        // Return cached version or fetch from network
        return response || fetch(event.request);
      })
      .catch(function () {
        // Return offline page if both cache and network fail
        if (event.request.destination === "document") {
          return caches.match("/offline.html");
        }
      })
  );
});
