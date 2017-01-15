@extends('tema.administrador')

@section('content')
    <div class="container">
        <center><img src="{{asset('tema/images/logo.png')}}"><br>
            <p>Bienvenidos al panel administrativo de usuario donde podran consultar, crear, editar y dar de baja la información necesaria</p></center><br>


        <div class="row">

            <div class="col-md-12">

                <form class="form-horizontal">

                    <div class="form-group">
                        <div class="col-sm-3">
                            <input type="email" class="form-control" id="email" placeholder="Digitar nombre">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger">Buscar</button>
                    <a href="../bienes/crear.blade.php"><button type="submit" class="btn btn-danger">Crear</button></a>
                </form>
                <br>
                <br> <div class="panel panel-primary">
                    <div class="panel-heading">Listado de Bienes & Inmuebles</div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Valor</th>
                                <th>Descripcion</th>
                                <th>Direccion</th>
                                <th>Contacto</th>
                                <th>Imagenes</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Altos de riomar</td>
                                <td>330.000</td>
                                <td>Una gran vista al mar</td>
                                <td>Calle 108 No 87 - 90</td>
                                <td>Freddy Reyes</td>
                                <td>Ver imagenes</td>
                                <td>En venta</td>
                                <td><a href="#"><span class="glyphicon glyphicon glyphicon-pencil"></span></a>  /   <a href="#"><span class="glyphicon glyphicon glyphicon-remove"></span></a></td>

                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td>Altos de riomar</td>
                                <td>330.000</td>
                                <td>Una gran vista al mar</td>
                                <td>Calle 108 No 87 - 90</td>
                                <td>Freddy Reyes</td>
                                <td>Ver imagenes</td>
                                <td>En venta</td>
                                <td><a href="#"><span class="glyphicon glyphicon glyphicon-pencil"></span></a>  /   <a href="#"><span class="glyphicon glyphicon glyphicon-remove"></span></a></td>

                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <center>
                    <div>
                        <ul class="pagination">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                    <a href="../administracion/index.php"><button type="submit" class="btn btn-danger">Regresar</button></a>
                </center>
            </div>
        </div>



    </div>
@endsection