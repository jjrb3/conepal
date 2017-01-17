@extends('tema.administrador')

@section('content')
    <div class="container">
        <center><img src="{{asset('tema/images/logo.png')}}"><br>
            <p>Bienvenidos al panel administrativo de usuario donde podran consultar, crear, editar y dar de baja la información necesaria</p></center><br>


        <div class="row">

            <div class="col-md-12">

                <div class="form-horizontal">

                    <div class="form-group">
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="buscar" placeholder="Digitar nombre">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger" onclick="buscar()">Buscar</button>
                    <a href="crear"><button class="btn btn-danger">Crear</button></a>
                </div>
                <br>
                <div id="mensaje"></div>
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">Listado de Bienes & Inmuebles asdadas</div>
                    <div id="tabla">
                    </div>
                </div>
                <center>
                    <div>
                        <ul class="pagination" id="paginacion">
                        </ul>
                    </div>
                    <a href="{{asset('administrador/inicio')}}"><button type="submit" class="btn btn-danger">Regresar</button></a>
                </center>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('js/bienesInmuebles/bienesInmuebles.js')}}"></script>
    <script>buscar()</script>
@endsection