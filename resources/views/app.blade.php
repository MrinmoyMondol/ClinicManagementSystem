<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Clinic') }}</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontEnd/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/plugins/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/plugins/slick-carousel/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/style.css') }}">

    @vite('resources/js/app.js')
</head>
<body>

<div id="app"></div>

<!-- JS Files -->
<script src="{{ asset('frontEnd/plugins/jquery/jquery.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/counterup/jquery.easing.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/counterup/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/slick-carousel/slick/slick.min.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/shuffle/shuffle.min.js') }}"></script>
<script src="{{ asset('frontEnd/plugins/google-map/map.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>
{{--<script src="{{ asset('frontEnd/js/script.js') }}"></script>--}}
{{--<script src="{{ asset('frontEnd/js/contact.js') }}"></script>--}}


</body>
</html>
