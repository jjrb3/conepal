@extends('tema.administrador')

@section('content')
    <div class="container">
        <center><img src="{{asset('tema/images/logo.png')}}"><br>
            <p>Bienvenidos al panel administrativo de cargar imagenes donde podran subir y dar de baja a las imagenes</p></center><br>


        <div class="row">

            <div class="col-md-12">

                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Nombre:</label>
                        <div class="col-sm-3">
                            <input type="email" class="form-control" id="usuario" placeholder="Ingresar Nombre">
                        </div>
                        <div class="col-sm-2">
                            <input type="file" class="form-control" value="Examinar" name="">
                        </div>
                    </div>
                    <center>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-sm-4"> <div class="panel panel-primary">
                                        <div class="panel-heading">Imagen</div>
                                        <div class="panel-body"><img src="../images/logo.png"><br><input type="button" value="Examinar" name=""></div>
                                    </div>
                                </div>
                                <div class="col-sm-4"> <div class="panel panel-primary">
                                        <div class="panel-heading">Imagen</div>
                                        <div class="panel-body"><img src="../images/logo.png"><br><input type="button" value="Examinar" name=""></div>
                                    </div>
                                </div>
                                <div class="col-sm-4"> <div class="panel panel-primary">
                                        <div class="panel-heading">Imagen</div>
                                        <div class="panel-body"><img src="../images/logo.png"><br><input type="button" value="Examinar" name=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-sm-4"> <div class="panel panel-primary">
                                        <div class="panel-heading">Imagen</div>
                                        <div class="panel-body"><img src="../images/logo.png"><br><input type="button" value="Examinar" name=""></div>
                                    </div>
                                </div>
                                <div class="col-sm-4"> <div class="panel panel-primary">
                                        <div class="panel-heading">Imagen</div>
                                        <div class="panel-body"><img src="../images/logo.png"><br><input type="button" value="Examinar" name=""></div>
                                    </div>
                                </div>
                                <div class="col-sm-4"> <div class="panel panel-primary">
                                        <div class="panel-heading">Imagen</div>
                                        <div class="panel-body"><img src="../images/logo.png"><br><input type="button" value="Examinar" name=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </center>

                </form>


            </div>
        </div>

        <center> <a href="../bienes/consultar.blade.php"><button type="submit" class="btn btn-danger">Regresar</button></a>

    </div>
@endsection