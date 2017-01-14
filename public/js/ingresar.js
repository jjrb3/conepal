
var usuario = '';
var clave 	= '';

$.ajaxSetup({  
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  
	}  
});


$(document).ready(function(){

	$('#verificarIngreso').submit(function(){
		
		$("#mensaje").html('<center><img src="stids1/img/cargando.gif" width="50px"></center>');
			
		usuario = $("#usuario").val();
		clave 	= $("#clave").val();

		usuario = usuario.trim();

		if (!usuario) {

			mensajeAdvertencia("mensaje","Debe ingresar el campo usuario para continuar");   			
			return false;
		}

		if (!clave) {

			mensajeAdvertencia("mensaje","Debe ingresar el campo contraseña para continuar");   			
			return false;
		}  


		
		$.post('verificar/login',{ usuario:usuario,
						     		clave:clave},function(data){

			alert(data)
			/*if (data == 0) {

				mensajeError("mensaje","No se encontró el usuario.");
				return false;
			}
			else if (data == -1) {

				mensajeError("mensaje","La contraseña no es correcta.");
				return false;
			}
			else if(data == 1){

				mensajeRealizado("mensaje","Ingresando a Sitds S.A.S. Espere un momento por favor.");

				setTimeout(function(){ location.assign("inicio/index.php"); }, 1000);
				
			}	
			else {
				mensajeError("mensaje","Se encontraron errores al ingresar a la plataforma.");
				return false;
			}*/		
		});
	});
});
