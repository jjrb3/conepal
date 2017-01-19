@extends('tema.usuario')

@section('content')
    @php ($cantidadInteres = 5)
    @php ($url = '')
    @php ($id = $_REQUEST['id'])
    @php ($nombre = '')
    @php ($valor = '')
    @php ($descripcion = '')
    @php ($contacto = '')
    @php ($direccion = '')
    @if ($inmuebles["resultado"] == 1)
        @php($nombre = $inmuebles['datos']['data'][0]['nombre']);
        @php($valor = $inmuebles['datos']['data'][0]['valor']);
        @php($descripcion = $inmuebles['datos']['data'][0]['descripcion']);
        @php($contacto = $inmuebles['datos']['data'][0]['contacto']);
        @php($direccion = $inmuebles['datos']['data'][0]['direccion']);
    @endif

    <!-- banner -->
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="inicio">Home</a> / Detalle de la propiedad</span>
            <h2>Detalle de la propiedad</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="properties-listing spacer">

                <div class="col-lg-12 col-sm-8 ">

                    <h2>{{$nombre}}</h2>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="property-images">
                                <!-- Slider Starts -->
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators hidden-xs">
                                        @if ($inmuebles["resultado"] == 1)
                                            @php ($cnt = 0)
                                            @foreach($inmuebles["imagenes"][$id] as $imagenes)
                                                @if($cnt == 0)
                                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                @else
                                                    <li data-target="#myCarousel" data-slide-to="{{$cnt}}" class=""></li>
                                                @endif
                                                @php ($cnt++)
                                            @endforeach
                                        @endif
                                    </ol>
                                    <div class="carousel-inner">
                                        @if ($inmuebles["resultado"] == 1)
                                            @php ($cnt = 0)
                                            @foreach($inmuebles["imagenes"][$id] as $imagenes)
                                                @php ($cnt++)
                                                @if($cnt == 1)
                                                    <div class="item active">
                                                @else
                                                    <div class="item">
                                                @endif
                                                    <img src="{{$url}}recursos/imagen_inmueble/{{$imagenes}}" class="properties" alt="properties" style="width:730px;height:337.25px"/>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                                <!-- #Slider Ends -->

                            </div>




                            <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Detalles de la propiedad</h4>
                                <p>{{$descripcion}}</p>

                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="col-lg-12  col-sm-6">
                                <div class="property-info">
                                    <p class="price">$ {{number_format($valor)}}</p>
                                    <p class="area"><span class="glyphicon glyphicon-map-marker"></span> {{$direccion}}</p>

                                    <div class="profile">
                                        <span class="glyphicon glyphicon-user"></span> Contacto
                                        <p>{{$contacto}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection