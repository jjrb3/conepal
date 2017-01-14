@extends('temas.stids1')

@section('content')
	<!-- Contactenos -->
	<div class="clearfix">
		<!-- Mapa -->
  		<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62667.64742985303!2d-74.85303713128741!3d10.983894208185644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d44d12ae605%3A0x2633844581b917b2!2sBarranquilla%2C+Atl%C3%A1ntico%2C+Colombia!5e0!3m2!1ses!2sit!4v1464102222056" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  		<!-- Fin mapa -->

		
		<section class="main-section team" id="team" style="margin-top:-100px;">
  			<div class="container">
				<h2 class="tituloskimber">Nuestra Ubicación</h2>
				<h6 >Ubicados en Barranquilla/Colombia.</h6> 
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft">
						<div class=" address clearfix">
							<h3 class="tituloskimber">Como encontrarnos?</h3>
							<p align="justify">
								Actualmente estamos situados en colombia con nuestra sede en Barranquilla/Atlantico.
								<br>
								<br>
								Pueden seguirnos en nuestras redes sociales para estar al tanto de cada una de nuestras publicaciones.
							</p>
						</div>
						<ul class="social-link">
							<li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa-twitter"></i></a></li>
							<li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa-facebook"></i></a></li>
							<li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="col-lg-6 wow fadeInUp delay-06s">
						<div class="form">
							<input class="input-text animated wow flipInY delay-02s" type="text" name="" placeholder="Ingrese Nombre *">
							<input class="input-text animated wow flipInY delay-04s" type="text" name="" placeholder="Ingrese E-mail *" >
							<input class="input-text animated wow flipInY delay-02s" type="text" name="" placeholder="Ingrese Telefono *">
							<textarea class="input-text animated wow flipInY delay-04s" style="height:100px;" placeholder="Ingrese su mensaje"></textarea>
							<br>
							<input class="input-btn animated wow flipInY delay-08s" type="submit" value="Enviar Mensaje">
						</div>
					</div>
				</div>  
   
  			</div>
		</section>
	</div>
	<!-- Fin de contactenos -->

	<!-- Telefonos -->
	<section class="twitter-feed">
  		<div class="container  animated fadeInDown delay-07s wow">
			<div class="twitter_bird">
				<span>
					<i class="fa-twitter"></i>
				</span>
			</div>
			<p> 
				Somos la empresa que se encarga de hacer tus sueños tecnologicos realidad, brindandoles seguridad y confianza para usted o su empresa 
				<br>
	  			¿Deseas contáctarnos?
	  		</p>
			<span>Escribenos a nuestras redes sociales</span>
			<br>  
			<div class="col-lg-12">
				<div class="contact_block">
			  		<div class="contact_block_icon icon2 rollIn animated wow">
			  			<span>
			  				<i class="fa-phone"></i>
			  			</span>
			  		</div>
			  		<span> (+57) 301 495 4136</span> 
			  		<span> (+57) 301 759 7689</span> 
			  	</div>
		  	</div>
		</div>
	</section>
	<!-- Fin de telefonos -->
@endsection