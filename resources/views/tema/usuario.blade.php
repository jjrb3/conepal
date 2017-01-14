<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title>{{$InfPag['NOMBRE_CABECERA']}}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="icon" href="{{asset('stids1/img/favicon.png')}}" type="image/png">
	<link href="{{asset('stids1/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('stids1/css/style.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href="{{asset('stids1/css/linecons.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('stids1/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('stids1/css/nuestro_equipo.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('stids1/css/animate.css')}}" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="{{asset('stids1/js/jquery.1.8.3.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('stids1/js/bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{asset('stids1/js/jquery-scrolltofixed.js')}}"></script>
	<script type="text/javascript" src="{{asset('stids1/js/jquery.easing.1.3.js')}}"></script>
	<script type="text/javascript" src="{{asset('stids1/js/jquery.isotope.js')}}"></script>
	<script type="text/javascript" src="{{asset('stids1/js/wow.js')}}"></script>
	<script type="text/javascript" src="{{asset('stids1/js/classie.js')}}"></script>

	<script type="text/javascript">
		$(document).ready(function(e) {
	        $('.res-nav_click').click(function(){
				$('ul.toggle').slideToggle(600)	
			});	
				
			$(document).ready(function() {
				$(window).bind('scroll', function() {

					if ($(window).scrollTop() > 0) {
						$('#header_outer').addClass('fixed');
					}
					else {
						$('#header_outer').removeClass('fixed');
					}
	    		});
		  	});	  
		});	
		
		function resizeText() {
			var preferredWidth = 767;
			var displayWidth = window.innerWidth;
			var percentage = displayWidth / preferredWidth;
			var fontsizetitle = 25;
			var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
			$(".divclass").css("font-size", newFontSizeTitle)
		}
	</script>
</head>
<body>
	<!-- Cabecera -->
	<header>
		<div id="header">
		    <!-- Logo -->
		    <h1><a href="inicio" id="logo"><img src="stids1/img/icono.png"></a></h1>

		    <!-- Nav -->
		    <nav id="nav">
		        <ul>
		            <?=$menu;?>
		        </ul>
		    </nav>
		</div>
    </header>
    <!-- Fin cabecera -->

	@yield('content')
	
	<!-- Pie de pagina -->
	<footer>
 		<div class="footer">
			<?=$pie;?>
		</div>
	</footer>
 	<!-- Pie de pagina -->
</body>
</html>