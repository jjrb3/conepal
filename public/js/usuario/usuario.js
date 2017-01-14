// Script por Stids S.A.S

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){

    $('#fomrUsuario').submit(function(){

        $("#mensaje").html('<center><img src="'+$("#ruta").val()+'tema/images/cargando.gif" width="50px"></center>');

        var usuario     = $("#usuario").val();
        var clave 	    = $("#clave").val();
        var nombres 	= $("#nombres").val();
        var apellidos 	= $("#apellidos").val();
        var email 	    = $("#email").val();

        usuario = usuario.trim();

        if (!usuario) {

            mensajeAdvertencia("mensaje","Debe ingresar el campo usuario para continuar");
            return false;
        }

        if (!clave) {

            mensajeAdvertencia("mensaje","Debe ingresar el campo contraseña para continuar");
            return false;
        }

        if (!nombres) {

            mensajeAdvertencia("mensaje","Debe ingresar el campo nombres para continuar");
            return false;
        }

        if (!apellidos) {

            mensajeAdvertencia("mensaje","Debe ingresar el campo apellidos para continuar");
            return false;
        }

        if (!email) {

            mensajeAdvertencia("mensaje","Debe ingresar el campo email para continuar");
            return false;
        }

        $.post('consultar/registrar',{  usuario:usuario,
                                        clave:clave,
                                        nombres:nombres,
                                        apellidos:apellidos,
                                        email:email},function(data){

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
