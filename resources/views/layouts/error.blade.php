<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- SITE TITTLE -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>STRIDE ERP</title>

        <!-- PLUGINS CSS STYLE -->
        <!-- Bootstrap -->
        <link href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <!-- themify icon -->
        <link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
        <!-- Owl Carousel -->
        <link href="{{ asset('plugins/owl-carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" media="screen">
        <!-- Owl Carousel Theme -->
        <link href="{{ asset('plugins/owl-carousel/assets/owl.theme.green.min.css') }}" rel="stylesheet" media="screen">
        <!-- Fancy Box -->
        <link href="{{ asset('plugins/fancybox/jquery.fancybox.min.css') }}" rel="stylesheet">
        <!-- AOS -->
        <link rel="stylesheet" href="{{ asset('plugins/aos/aos.css') }}">

        <!-- CUSTOM CSS -->
        <link href="{{ asset('css/style.css' ) }}" rel="stylesheet">

        <!-- FAVICON -->
        <link href="images/favicon.png" rel="shortcut icon">

    </head>

    <body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
    @yield('content')


    <!-- JAVASCRIPTS -->
    <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
    <script src="{{ asset('plugins/popper/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('plugins/syotimer/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('plugins/aos/aos.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>