<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset("/") }}front/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="{{ asset("/") }}admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    @yield('css')
    @livewireStyles
    <link href="{{ asset("/") }}front/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    @include('front.include.header')
    @include('front.include.mobile-menu')
    @yield('body')
    @include('front.include.footer')

    <script src="{{ asset("/") }}front/js/jquery.min.js"></script>
    <script src="{{ asset("/") }}front/js/bootstrap.js"></script>
    @livewireScripts
    @yield('js')
    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>
</html>