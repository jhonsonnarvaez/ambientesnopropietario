$(document).ready(function() {
    $("#form").on("hidden.bs.modal", function(ev) {
        $("#form")[0].reset();
    });
    $("#form").validate({
        rules: {
            nombre: "required",
            usuario: {
                required: true,
                remote: {
                    url: 'php/consultaUsuario.php',
                    type: 'post',
                    data: {
                        usuario: function() {
                            return $('#usuario').val();
                        }
                    }
                }
            },
            pass21: {
                required: true,
                minlength: 5
            },
            pass2: {
                required: true,
                minlength: 5,
                equalTo: "#pass"
            }
        },
        messages: {
            nombre: "Debe ingresar su nombre",
            usuario: "Debe ingresar un usuario",
            pass: {
                required: "Ingrese una contraseña",
                minlength: "Debe ingresar un minimo de 5 caracteres"
            },
            pass2: {
                required: "Vuelva ingresar la contraseña",
                minlength: "Debe ingresar un minimo de 5 caracteres",
                equalTo: "La contraseña no coincide. Vuelva a escribir"
            }
        }
    });

    $("#ingresar").on("click", function(ev) {
        ev.preventDefault();
        /* Act on the event */
        if ($("#form").valid()) {
            $.ajax({
                url: 'rpc/guardar_usuario.php',
                type: 'post',
                data: {
                    'nombre': $('#nombre').val(),
                    'usuario': $('#usuario').val(),
                    'contrasena': $('#pass').val() 
                }
            })
                    .done(function(msg) {
                $("#mensaje").html(msg);
            })
                    .fail(function(jHttp, textStatus, errorThrown) {
                $("#mensaje").html("Error: " + textStatus + ". " + errorThrown);
            })
                    .always(function() {
                $("#form")[0].reset();
                console.log("complete");
            });
        }
    });
});
