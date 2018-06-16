<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    @yield('style')
</head>
<body>
@include('statics.includes.nav')
<div class="container">
    @yield('content')
</div>



<!-- jQuery library -->
<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>


<!-- Latest compiled JavaScript -->
<script src="{{ asset('js/bootstrap.js') }}"></script>

<!-- Raw My Script JavaScript -->
@yield('script')


</body>
</html>