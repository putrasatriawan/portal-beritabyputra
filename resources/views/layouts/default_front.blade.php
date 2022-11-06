<!doctype html>
<html class="no-js"
      lang="zxx">

<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible"
            content="ie=edge">
      <title>Walah News By Putra</title>
      <meta name="description"
            content="">
      <meta name="viewport"
            content="width=device-width, initial-scale=1">
      <link rel="manifest"
            href="site.webmanifest">
      <link rel="shortcut icon"
            type="image/x-icon"
            href="assets/img/favicon.ico">

      <!-- CSS here -->
      <link rel="stylesheet"
            href="{{ asset('front/assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet"
            href="{{ asset('front/assets/css/owl.carousel.min.css') }}">
      <link rel="stylesheet"
            href="{{ asset('front/assets/css/ticker-style.css') }}">
      <link rel="stylesheet"
            href="{{ asset('front/assets/css/flaticon.css') }}">
      <link rel="stylesheet"
            href="{{ asset('front/assets/css/slicknav.css') }}">
      <link rel="stylesheet"
            href="{{ asset('front/assets/css/animate.min.css') }}">
      <link rel="stylesheet"
            href="{{ asset('front/assets/css/magnific-popup.css') }}">
      <link rel="stylesheet"
            href="{{ asset('front/assets/css/fontawesome-all.min.css') }}">
      <link rel="stylesheet"
            href="{{ asset('front/assets/css/themify-icons.css') }}">
      <link rel="stylesheet"
            href="{{ asset('front/assets/css/slick.css') }}">
      <link rel="stylesheet"
            href="{{ asset('front/assets/css/nice-select.css') }}">
      <link rel="stylesheet"
            href="{{ asset('front/assets/css/style.css') }}">


</head>

<body>


      <div class="wrapper">
            @include('includes.header_front');
            @yield('content')
            @include('includes.js_front')
            @include('includes.footer_front')

      </div>

      @stack('scripts')
</body>

</html>