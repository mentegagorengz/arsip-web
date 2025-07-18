let installEvent = null;
let installButton = document.getElementById("install");
let enableButton = document.getElementById("enable");

// Check if enableButton exists before adding event listener
if (enableButton) {
  enableButton.addEventListener("click", function (e) {
    e.target.disabled = true;
    startPwa(true);
  });
}

if (localStorage["pwa-enabled"]) {
  startPwa();
}

// PWA: Daftarkan service worker langsung saat halaman dimuat
window.addEventListener("load", () => {
  if ("serviceWorker" in navigator) {
    navigator.serviceWorker
      .register("sw.js")
      .then(function (reg) {
        console.log("Service Worker registered", reg);
      })
      .catch(function (err) {
        console.log("Service Worker registration failed", err);
      });
  }
});

// Optional: beforeinstallprompt event
window.addEventListener("beforeinstallprompt", (e) => {
  e.preventDefault();
  console.log("Ready to install...");
  installEvent = e;
  if (installButton) {
    installButton.style.display = "initial";
  }
});
