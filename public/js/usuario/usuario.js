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
                    buscarUsuario();
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
});


function buscarUsuario() {

    $(document).ready(function(){

        $("#tabla").html('<center><img src="'+$("#ruta").val()+'tema/images/cargando.gif" width="50px"></center>');

        $.getJSON('consultar/buscar',{},function(data){

            switch(data.resultado) {
                case 1:
                    $('#tabla').html('');   // Quitamos el cargando

                    // Titulo de la tabla
                    $('#tabla').append('<table>');
                    $('#tabla').append('<tr>');
                    $('#tabla').append('<td>Usuario</td>');
                    $('#tabla').append('<td>Nombres</td>');
                    $('#tabla').append('<td>Apellidos</td>');
                    $('#tabla').append('<td>Correo</td>');
                    $('#tabla').append('<td>Estado</td>');
                    $('#tabla').append('/<tr>');

                    // Datos de la tabla
                    jQuery.each(data.json, function(i, val) {
                        $('#tabla').append('<tr>');
                        $('#tabla').append('<td>'+val.usuario+'</td>');
                        $('#tabla').append('<td>'+val.nombres+'</td>');
                        $('#tabla').append('<td>'+val.apellidos+'</td>');
                        $('#tabla').append('<td>'+val.correo+'</td>');
                        if(val.estado == 1) {
                            $('#tabla').append('<td>Activo</td>');
                        }
                        else {
                            $('#tabla').append('<td>Inactivo</td>');
                        }
                        $('#tabla').append('/<tr>');
                    });
                    $('#tabla').append('</table>');
                    break;
                case 0:
                    mensajeAdvertencia("tabla",data.mensaje);
                    break;
                case -1:
                    mensajeAdvertencia("tabla",data.mensaje);
                    break;
                case -2:
                    mensajeError("tabla",data.mensaje);
                    break;
            }
        });
    });
}
