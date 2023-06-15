<!DOCTYPE html>
<html lang="" class="control-sidebar-animate">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <link rel="icon" href="/favicon.ico" />
  <title>AdminLTE 3</title>
  {{-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/all.js"></script> --}}

  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId: '960594548442487',
        autoLogAppEvents: true,
        xfbml: true,
        version: 'v16.0'
      });
    };
  </script>
</head>

<body>
  <noscript>
    <strong>We're sorry but this website doesn't work properly without
      JavaScript enabled. Please enable it to continue.</strong>
  </noscript>
  <div id="app"></div>
  {{-- <script type="module" src="/src/main.ts"></script> --}}
  @vite('resources/js/src/main.ts');

  <!-- built files will be auto injected -->
</body>

</html>
