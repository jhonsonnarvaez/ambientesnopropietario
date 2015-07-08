$(document).ready(function() {

    $("#btn").on("click", function(ev)
    {
        $("#form").validate({
            rules: {
                nombre: {
                    required: true,
                    minlength: 4,
                    maxlength: 15
                },
                email:{
                    required: true
                },
                mensajes:{
                    required: true
                }
            },
            messages: {
                nombre: {
                    required: "Campo obligatorio",
                    minlength: "El nombre debe contener 2 caracteres",
                    maxlength: "El nombre debe tener menos de 5 caracteres"
                },
                email:{
                    required: "Campo obligatorio"
                },
                mensajes:{
                    required: "Campo obligatorio"
                }
            }


        });

        //realizar la peticion de la llamada ajax
        //done envia los mensajes que se encuentran en el rpc.php
        //#mensaje div colocado en el index
        //prevent evita el comportamiento por defecto del boton
        ev.preventDefault();
        if ($("#form").valid()) {

            $.ajax({
                url: 'rpc/conexion.php',
                type: 'POST',
                data: {
                    nombre: $("#nombre").val(),
                    email: $("#cemail").val(),
                    mensaje: $("#mensajes").val(),
                    noticia: $("#noticia").val()
                }
            })
                    .done(function(msg) {
                $("#mensaje").html(msg);
            })
                    .fail(function(jHttp, textStatus, errorThrown) {
                $("#mensaje").html("Error: " + textStatus + ". " + errorThrown);
            })
                    .always(function() {
                console.log("complete");
            });
        }
    });


});
