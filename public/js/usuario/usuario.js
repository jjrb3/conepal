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
                    document.getElementById("fomrUsuario").reset();
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
                    var tabla = '';

                    $('#tabla').html(tabla);   // Quitamos el cargando

                    // Titulo de la tabla
                    tabla = tabla + '<div class="table-responsive"><table class="table"><thead><tr><th>Usuario</th><th>Nombres</th><th>Apellidos</th><th>Email</th><th>Estado</th><th>Opciones</th></tr></thead></div>';

                    // Datos de la tabla
                    jQuery.each(data.json, function(i, val) {
                        tabla = tabla + '<tbody><tr>';
                        tabla = tabla + '<td>'+val.usuario+'</td>';
                        tabla = tabla + '<td>'+val.nombres+'</td>';
                        tabla = tabla + '<td>'+val.apellidos+'</td>';
                        tabla = tabla + '<td>'+val.correo+'</td>';
                        if(val.estado == 1) {
                            tabla = tabla + '<td>Activo</td>';
                        }
                        else {
                            tabla = tabla + '<td>Inactivo</td>';
                        }
                        tabla = tabla + '<td><a href="#"><span class="glyphicon glyphicon glyphicon-pencil"></span></a>  /   <a href="#"><span class="glyphicon glyphicon glyphicon-remove"></span></a></td>';
                        tabla = tabla + '</tr></tbody>';
                    });

                    tabla = tabla + '</table></div>';


                    $('#tabla').append(tabla);

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
