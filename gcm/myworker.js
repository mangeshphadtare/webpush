self.addEventListener('push', function(event) {
  console.log('Push message received');

  var data = e.data.json();
   var title = data.title || 'Why you no title?';
  var notificationTitle = title;
  const notificationOptions = {
    body: 'push body',
    icon: '',
    tag: 'simple-push-demo-notification',
    data: {
      url: 'http://affirmfinancial.ca'
    }
  };

  event.waitUntil(
    Promise.all([
      self.registration.showNotification(
        notificationTitle, notificationOptions)
    ])
  );
});

self.addEventListener('notificationclick', function(event) {
  event.notification.close();

  var clickResponsePromise = Promise.resolve();
  if (event.notification.data && event.notification.data.url) {
    clickResponsePromise = clients.openWindow(event.notification.data.url);
  }

  event.waitUntil(
    Promise.all([
      clickResponsePromise
    ])
  );
});

