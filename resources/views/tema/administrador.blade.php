<!doctype html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script type="text/javascript" src="{{asset('tema/js/jquery.1.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</head>

@yield('content')