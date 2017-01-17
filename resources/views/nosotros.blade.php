@extends('tema.usuario')

@section('content')
	<!-- banner -->
	<div class="inside-banner">
		<div class="container">
			<span class="pull-right"><a href="inicio">Inicio</a> / Nosotros</span>
			<h2>Sobre Nosotros</h2>
		</div>
	</div>
	<!-- banner -->


	<div class="container">
		<div class="spacer">
			<div class="row">
				<div class="col-lg-8  col-lg-offset-2">
					<img src="{{asset('tema/images/about.jpg')}}" class="img-responsive thumbnail"  alt="realestate">
					@if($informacionPagina[0]['nosotros'])
						<h3>Nosotros</h3>
						<p>{{$informacionPagina[0]['nosotros']}}</p>
					@endif
					@if($informacionPagina[0]['mision'])
						<h3>Misión</h3>
						<p>{{$informacionPagina[0]['mision']}}</p>
					@endif
					@if($informacionPagina[0]['vision'])
						<h3>Visión</h3>
						<p>{{$informacionPagina[0]['vision']}}</p>
					@endif

				</div>

			</div>
		</div>
	</div>
@endsection