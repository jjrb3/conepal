@extends('tema.usuario')

@section('content')
	@php ($url = '')
	@php ($bDescripcion = $_REQUEST['descripcion'])
	@php ($bEstado = $_REQUEST['estado'])
	@php ($bValor = $_REQUEST['valor'])
	@php ($pagina = $_REQUEST['pagina'])
	@php ($tamanhioPagina = 9)
	@if ($inmuebles["resultado"] == 1)
		@php ($paginaActual = $inmuebles["datos"]["current_page"])
		@php ($cantidadPagina = $inmuebles["datos"]["last_page"])
	@endif

	<!-- banner -->
	<div class="inside-banner">
		<div class="container">
			<span class="pull-right"><a href="inicio">Home</a> / Buscador</span>
			<h2>Buscador de propiedades</h2>
		</div>
	</div>
	<!-- banner -->


	<div class="container">
		<div class="properties-listing spacer">

			<div class="row">
				<div class="col-lg-3 col-sm-4 ">
					<form action="buscador" method="get">
						<div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Buscar por</h4>
							<input type="hidden" name="tamanhioPagina" value="{{$tamanhioPagina}}">
							<input type="hidden" name="pagina" value="1">
							<input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Buscar propiedades">
							<div class="row">
								<div class="col-lg-12">
									<select name="estado" id="estado" class="form-control">
										<option value="">Estado</option>
										@foreach ($estadoInmueble as $estado)
											<option value="{{$estado['id']}}">{{$estado['nombre']}}</option>
										@endforeach
									</select>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<select class="form-control" id="valor" name="valor">
										<option value="">Precio</option>
										@for($i=0;$i<10;$i++)
											<option value="{{(($i) * 50000000)}};{{(($i+1) * 50000000)}}">${{number_format(($i) * 50000000)}} - ${{number_format(($i+1) * 50000000)}}</option>
										@endfor
										<option value="500000000;adelante">$500,000,000 - En adelante</option>
									</select>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">buscar</button>
						</div>
					</form>


				</div>

				<div class="col-lg-9 col-sm-8">
					<div class="sortby clearfix">
						<!--<div class="pull-left result">Showing: 12 of 100 </div>-->
						<div class="pull-right">

					</div>
					<div class="row">

						@if ($inmuebles["resultado"] == 1)
							@php ($cnt = 0)
							@foreach($inmuebles["datos"]["data"] as $inmueble)
								@if(isset($inmuebles["imagenes"][$inmueble['id']]))
									@php ($cnt++)
									<div class="col-lg-4 col-sm-6">
										<div class="properties">
											<div class="image-holder"><img src="{{$url}}recursos/imagen_inmueble/{{$inmuebles["imagenes"][$inmueble["id"]][0]}}	" class="img-responsive" alt="properties" style="width:242.48px;height:156.16px"/>
												<div class="status sold">{{$inmueble['estado_inmueble']}}</div>
											</div>
											<h4><a style="color: #df0023;" href="property-detail.php">Ahora en:</a></h4>
											<p class="price">Precio: $ {{number_format($inmueble['valor'])}}</p>
											<p class="price">Precio: {{$inmueble['nombre']}}</p>
											<a class="btn btn-primary" href="detalle?id={{$inmueble['id']}}">Ver Detalles</a>
										</div>
									</div>
								@endif
							@endforeach
						@else
							<div class="center">
								<br><br><br>
								<h2>No se encontraron datos para esta busqueda</h2>
							</div>
						@endif

						<div class="col-lg-12 col-sm-6">
							<!-- properties -->
							<div class="center">
								@if ($inmuebles["resultado"] == 1)
								<ul class="pagination">
									<!-- Paginación -->
									@if ($paginaActual - 1 > 0)
										<li><a href="?descripcion={{$bDescripcion}}&estado={{$bEstado}}&valor={{$bValor}}&descripcion={{$bDescripcion}}&pagina={{$paginaActual - 1}}&tamanhioPagina={{$tamanhioPagina}}">«</a></li>
									@endif
									@for($i=1;$i<=$cantidadPagina;$i++)
										@if($i == $paginaActual)
											<li class="active"><a href="?descripcion={{$bDescripcion}}&estado={{$bEstado}}&valor={{$bValor}}&descripcion={{$bDescripcion}}&pagina={{$i}}&tamanhioPagina={{$tamanhioPagina}}">{{$i}}</a></li>
										@else
											<li><a href="?descripcion={{$bDescripcion}}&estado={{$bEstado}}&valor={{$bValor}}&descripcion={{$bDescripcion}}&pagina={{$i}}&tamanhioPagina={{$tamanhioPagina}}">{{$i}}</a></li>
										@endif
									@endfor
									@if ($paginaActual + 1 <= $cantidadPagina)
										<li><a href="?descripcion={{$bDescripcion}}&estado={{$bEstado}}&valor={{$bValor}}&descripcion={{$bDescripcion}}&pagina={{$paginaActual + 1}}&tamanhioPagina={{$tamanhioPagina}}">»</a></li>
									@endif
									<!-- Fin paginación -->
								</ul>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<script type="text/javascript" src="{{asset('js/buscador.js')}}"></script>
	<script>llenarDatos('{{$bDescripcion}}','{{$bEstado}}','{{$bValor}}')</script>
@endsection