<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Conipal</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{asset('tema/images/logo.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('tema/assets/administrador.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('tema/assets/jquery.1.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a style="color: white;" class="navbar-brand" href="{{asset('administrador/inicio')}}">INMOBILIARIA CONIPAL</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hola, {{$nombres}}</a></li>
            <li><a href="{{asset('administrador/cerrarSession')}}"><span class="glyphicon glyphicon-log-in"></span> Cerrar sessión</a></li>
        </ul>
    </div>
</nav>

@yield('content')

<input type="hidden" id="ruta" value="{{asset('')}}">
</div>
</body>
</html>

