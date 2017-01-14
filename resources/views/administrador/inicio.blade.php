@extends('tema.administrador')

@section('content')
    <div class="container">
        <center><img src="{{asset('tema/images/logo.png')}}"><br>
            <p>Bienvenidos al panel administrativo donde podran editar sus imagenes y la información necesaria</p>
            Para editar textos o imagenes dirigirse a los paneles que estan en la parte inferior y hacer click sobre ellos
        </center><br>


    <div class="row">

        <div class="col-md-12">
            <a href="usuario/consultar">
                <div class="col-sm-4"> <div class="panel panel-primary">
                        <div class="panel-heading">Usuarios</div>
                        <div class="panel-body">Para agregar usuarios hacer click sobre este panel</div>
                    </div></div>
            </a>

            <a href="informacion/consultar">
                <div class="col-sm-4"> <div class="panel panel-primary">
                        <div class="panel-heading">Información de pagina</div>
                        <div class="panel-body">Para cambiar toda la información de la pagina hacer click sobre este panel</div>
                    </div>
                </div>
            </a>

            <a href="bienes/consultar">
                <div class="col-sm-4"> <div class="panel panel-primary">
                        <div class="panel-heading">Bienes & Inmuebles</div>
                        <div class="panel-body">Para cambiar imagenes, estados y valores hacer click sobre este panel</div>
                    </div>
                </div>

            </a>

        </div>
    </div>
@endsection