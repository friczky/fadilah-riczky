<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Right Resume</title>
    @include('fe.components.css')
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    @include('fe.components.navbar')
    <div class="page-content">
      <div class="container">
<div class="cover shadow-lg bg-white">
  @yield('content')
</div>
    </div>
    @include('fe.components.footer')
    @include('fe.components.script')
  </body>
</html>
