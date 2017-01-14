// Script por Stids S.A.S

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){

    $('#fomrUsuario').submit(function(){

        $("#mensaje").html('<center><img src="'+$("#ruta").val()+'tema/images/cargando.gif" width="50px"></center>');


        $.getJSON('consultar/registrar',{   usuario:$("#usuario").val(),
                                            clave:$("#clave").val(),
                                            nombres:$("#nombres").val(),
                                            apellidos:$("#apellidos").val(),
                                            email:$("#email").val()},function(data){

            switch(data.resultado) {
                case 1:
                    mensajeRealizado("mensaje",data.mensaje);
                    break;
                case 0:
                    mensajeAdvertencia("mensaje",data.mensaje);
                    break;
                case -1:
                    mensajeAdvertencia("mensaje",data.mensaje);
                    break;
                case -2:
                    mensajeError("mensaje",data.mensaje);
                    break;
            }
        });
    });

    function buscarUsuario() {

        $("#tabla").html('<center><img src="'+$("#ruta").val()+'tema/images/cargando.gif" width="50px"></center>');

        $.getJSON('consultar/buscar',{},function(data){

            switch(data.resultado) {
                case 1:
                    mensajeRealizado("mensaje",data.mensaje);
                    break;
                case 0:
                    mensajeAdvertencia("mensaje",data.mensaje);
                    break;
                case -1:
                    mensajeAdvertencia("mensaje",data.mensaje);
                    break;
                case -2:
                    mensajeError("mensaje",data.mensaje);
                    break;
            }
        });
    }
});
