@extends('tema.administrador')

@section('content')
    <div class="container">
        <center><img src="{{asset('tema/images/logo.png')}}"><br>
            <p>Bienvenidos al panel administrativo de usuario donde podran consultar, crear, editar y dar de baja la información necesaria</p></center><br>


        <div class="row">

            <div class="col-md-12">

                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Nombre:</label>
                        <div class="col-sm-3">
                            <input type="email" class="form-control" id="usuario" placeholder="Ingresar Nombre">
                        </div>
                        <label class="control-label col-sm-2" for="pwd">Contacto:</label>
                        <div class="col-sm-3">
                            <input type="password" class="form-control" id="pwd" placeholder="Ingresar contacto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Valor:</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="email">
                        </div>
                        <label class="control-label col-sm-2" for="email">Direccion:</label>
                        <div class="col-sm-3">
                            <input type="email" class="form-control" id="email" placeholder="Ingresar direccion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Estado:</label>
                        <div class="col-sm-3">
                            <select id="selectbasic" name="selectbasic" class="form-control">
                                <option value="1">Estado de inmueble</option>
                                <option value="2">Activo</option>
                                <option value="">Inactivo</option>
                            </select>
                        </div>

                    </div>

                    <center>
                        <div class="col-md-12">
                            <textarea  name="comentarios" rows="5" cols="81">Escribir la descripcion</textarea><br>
                            <button type="submit" class="btn btn-default">Regresar</button> <button type="submit" class="btn btn-danger">Crear Usuario</button>
                        </div>
                    </center>

                </form>


            </div>

        </div>
        <br>
    </div>
@endsection