@extends('tema.usuario')

@section('content')
	<!-- banner -->
	<div class="inside-banner">
		<div class="container">
			<span class="pull-right"><a href="#">Home</a> / Contácto</span>
			<h2>Contácto</h2>
		</div>
	</div>
	<!-- banner -->


	<div class="container">
		<div class="spacer">
			<div class="row contact">
				<div class="col-lg-6 col-sm-6 ">


					<input type="text" class="form-control" placeholder="Ingrese su nombre">
					<input type="text" class="form-control" placeholder="Ingrese su Email">
					<input type="text" class="form-control" placeholder="Ingrese su numero telefonico">
					<textarea rows="6" class="form-control" placeholder="Ingrese su mensage"></textarea>
					<button type="submit" class="btn btn-success" name="Submit">Enviar Mensage</button>




				</div>
				<div class="col-lg-6 col-sm-6 ">
					<div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7833.57310795146!2d-74.81450552370934!3d10.979477425350662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d3d84ee0681%3A0x3ac81e449cec6d9f!2sCra.+27+%2372-80%2C+Barranquilla%2C+Atl%C3%A1ntico%2C+Colombia!5e0!3m2!1ses!2ses!4v1484255039873"></iframe></div>
				</div>
			</div>
		</div>
	</div>
@endsection