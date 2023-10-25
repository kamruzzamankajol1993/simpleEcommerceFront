<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="template" content="greeny">
    <meta name="title" content="greeny - Ecommerce Food Store HTML Template"><meta name="keywords" content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ $systemDataAll->url_name }}{{ $systemDataAll->websiteIcon }}">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/fonts/icofont/icofont.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/fonts/fontawesome/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/vendor/venobox/venobox.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/vendor/slickslider/slick.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/vendor/niceselect/nice-select.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/css/main.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/css/home-category.css">
   @yield('css')
</head>
<body>
    <!-- <div class="backdrop"></div> -->
    <a class="backtop fas fa-arrow-up" href="#"></a>

   @include('include.header')

   @include('include.mobile')






 @yield('body')













                       @include('include.footer')


                            <script src="{{ asset('/') }}public/front/vendor/bootstrap/jquery-1.12.4.min.js"></script>
                            <script src="{{ asset('/') }}public/front/vendor/bootstrap/popper.min.js"></script>
                            <script src="{{ asset('/') }}public/front/vendor/bootstrap/bootstrap.min.js"></script>
                            <script src="{{ asset('/') }}public/front/vendor/countdown/countdown.min.js"></script>
                            <script src="{{ asset('/') }}public/front/vendor/niceselect/nice-select.min.js"></script>
                            <script src="{{ asset('/') }}public/front/vendor/slickslider/slick.min.js"></script>
                            <script src="{{ asset('/') }}public/front/vendor/venobox/venobox.min.js"></script>
                            <script src="{{ asset('/') }}public/front/js/nice-select.js"></script>
                            <script src="{{ asset('/') }}public/front/js/countdown.js"></script>
                            <script src="{{ asset('/') }}public/front/js/accordion.js"></script>
                            <script src="{{ asset('/') }}public/front/js/venobox.js"></script>
                            <script src="{{ asset('/') }}public/front/js/slick.js"></script>
                            <script src="{{ asset('/') }}public/front/js/main.js"></script>
                        </body>

</html>
