<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
	Ajax
	<form id="registro" action="#">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" id="nombre">
		<br>
		<input type="text" id="apellido">
		<br>
		<input type="submit" value="registrar">
	</form>

	<div id="postRequestData"></div>
	<script type="text/javascript" src="{{asset('stids1/js/jquery_3.1.0.js')}}"></script>
	<script type="text/javascript">
		$.ajaxSetup({  
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  
			}  
		});

		$(document).ready(function(){

			$('#registro').submit(function(){
				var nombre=$("#nombre").val();
				var apellido=$("#apellido").val();
				$.post('registro',{nombre:nombre,apellido:apellido},function(data){
					console.log(data);
					$("#postRequestData").html(data);
				});
			});
		});
	</script>
</body>
</html>