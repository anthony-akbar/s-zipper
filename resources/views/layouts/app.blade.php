<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/main/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/main/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/main/css/mdb.css') }}">
    <link rel="stylesheet" href="{{ asset('/main/css/mdb.lite.css') }}">
    <link rel="stylesheet" href="{{ asset('/main/css/style.css') }}">
</head>
<body style="background-color: black">
@include('partials.navbar')
@yield('content')
<script type="text/javascript" src="{{ asset('/main/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{ asset('/main/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ asset('/main/js/mdb.js')}}"></script>
<script type="text/javascript" src="{{ asset('/main/js/mdb.lite.js')}}"></script>
<script type="text/javascript" src="{{ asset('/main/js/propper.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script>
    function onScroll(){
        if($('body').scrollTop()<=50) {
            $('.navbar').removeClass('navbar-scrolled');
            $('.navbar').removeClass('navbar-light');
            $('.navbar').addClass('navbar-dark');
        } else {
            $('.navbar').addClass('navbar-scrolled');
            $('.navbar').removeClass('navbar-dark');
            $('.navbar').addClass('navbar-light');
        }
    }
    function reveal() {

        var reveals = document.querySelectorAll(".from-left, .from-right, .down-to-up, .up-to-down");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }

    window.addEventListener("scroll", reveal);

</script>
</body>
</html>
