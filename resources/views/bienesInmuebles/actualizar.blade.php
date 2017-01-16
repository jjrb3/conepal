@extends('tema.administrador')

@section('content')
    <div class="container">
        <center><img src="{{asset('tema/images/logo.png')}}"><br>
            <p>Bienvenidos al panel administrativo de usuario donde podran consultar, crear, editar y dar de baja la información necesaria</p></center><br>


        <div class="row">

            <div class="col-md-12">

                <div class="form-horizontal">
                    <form id="fomulario">
                        <div class="form-group">
                            <input type="hidden" value="<?=$_REQUEST['id'];?>" id="id" name="id">
                            <label class="control-label col-sm-2" for="email">Nombre:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar Nombre">
                            </div>
                            <label class="control-label col-sm-2" for="pwd">Contacto:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Ingresar contacto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Valor:</label>
                            <div class="col-sm-3">
                                <input type="number" class="form-control" id="valor" name="valor">
                            </div>
                            <label class="control-label col-sm-2" for="email">Direccion:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresar direccion">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="estado">Estado:</label>
                            <div class="col-sm-3">
                                <select id="estado" name="estado" class="form-control">
                                    <option value="">Estado de inmueble</option>
                                    @foreach ($estadoInmueble as $estado)
                                        <option value="{{$estado['id']}}">{{$estado['nombre']}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                        <center><textarea name="descripcion" rows="5" cols="81" id="descripcion" placeholder="Escribir la descripcion"></textarea>
                        </center>
                    </form>
                    <center>
                        <br>
                        <a href="{{asset('administrador/bienesInmuebles/inicio')}}">
                            <button class="btn btn-default">Regresar</button>
                        </a>
                        <button class="btn btn-danger" onclick="crearActualizar('actualizar')">Actualizar</button>
                        <br>
                    </center>

                </div>
                <div class="col-md-12">
                    <br>
                    <div id="mensaje"></div>
                </div>

            </div>
        </div>


    </div>
    <script type="text/javascript" src="{{asset('js/bienesInmuebles/bienesInmuebles.js')}}"></script>
    <script>llenarDatos();</script>
@endsection