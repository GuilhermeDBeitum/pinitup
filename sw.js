const version = "0.6.18";
const cacheName = `port-${version}`;
self.addEventListener("install", (e) => {
  e.waitUntil(
    caches.open(cacheName).then((cache) => {
      return cache.addAll([`/`, `/index.php`, `/product.php`, `/about.php`, `/login.php`, `/form.php`, `/loading.php`]).then(() => self.skipWaiting());
    })
  );
});

self.addEventListener("activate", (event) => {
  event.waitUntil(self.clients.claim());
});

self.addEventListener("fetch", (event) => {
  event.respondWith(
    caches
    .open(cacheName)
    .then((cache) => cache.match(event.request, {
      ignoreSearch: true
    }))
    .then((response) => {
      return response || fetch(event.request);
    })
  );
});