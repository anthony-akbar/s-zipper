<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S. Zipper Accessories</title>
    <link rel="stylesheet" href="{{ asset('assets/front-face/vendor/bootstrap/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/front-face/vendor/owlcarousel/dist/assets/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/front-face/vendor/fancybox/dist/jquery.fancybox.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/toastr/toastr.min.css') }} "/>
    <link rel="stylesheet" href="{{ asset('assets/front-face/css/style.min.css') }} "/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front-face/fonts/flaticon/font/flaticon.css') }} ">
    <link href="{{ asset('assets/front-face/vendor/jqvmap/dist/jqvmap.css') }}" media="screen" rel="stylesheet" type="text/css">

</head>
<body>


@include('partials.navbar')
@yield('content')

<script type="text/javascript" src="{{ asset('assets/front-face/vendor/jqvmap/dist/jquery.vmap.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/front-face/vendor/jqvmap/dist/maps/jquery.vmap.world.js') }}" charset="utf-8"></script>

<script src="{{ asset('assets/front-face/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/front-face/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front-face/vendor/owlcarousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front-face/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/front-face/js/main-script.min.js') }}"></script>
<script src="{{ asset('assets/front-face/vendor/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('assets/front-face/js/magic-ajax.js') }}"></script>
</body>
</html>
