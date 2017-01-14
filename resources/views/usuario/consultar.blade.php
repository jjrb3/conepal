@extends('tema.administrador')

@section('content')
    <form id="fomrUsuario" action="#">
        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" id="ruta" value="{{asset('')}}">
        Usuario: <input type="text" id="usuario">&nbsp;
        Contraseña: <input type="text" id="clave">&nbsp;
        Nombres: <input type="text" id="nombres">&nbsp;
        Apellidos: <input type="text" id="apellidos">&nbsp;
        Email: <input type="text" id="email">&nbsp;

        <button type="submit">Crear Usuario</button>
        <br>
        <div id="mensaje"></div>
        <br>
        <table border="1">
            <thead>
                <td>Usuario</td>
                <td>Nombres</td>
                <td>Apellido</td>
                <td>Email</td>
                <td>Opciones</td>
            </thead>
            <tbody>
                <td>Usuario</td>
                <td>Nombres</td>
                <td>Apellido</td>
                <td>Email</td>
                <td>Opciones</td>
            </tbody>
        </table>
    </form>

<script type="text/javascript" src="{{asset('js/usuario/usuario.js')}}"></script>
@endsection

