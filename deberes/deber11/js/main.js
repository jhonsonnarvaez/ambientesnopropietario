$(document).ready(function() {
    $("#form").on("hidden.bs.modal", function(ev) {
        $("#form")[0].reset();
    });
    $("#form").validate({
        rules: {
            nombre: "required",
            cemail: {
                required: true,
                hotmail: true
            },
            telefono: {
                required: true,
                maxlength: 10,
                minlength: 6
            },
            direccion: "required",
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
            password1: {
                required: true,
                minlength: 5
            },
            password1_verificar: {
                required: true,
                minlength: 5,
                equalTo: "#password1"
            }
        },
        messages: {
            nombre: "Debe ingresar su nombre",
            cemail: {
                required: "Debe ingresar su correo",
                email: "Ingrese un correo valido"
            },
            telefono: {
                required: "Debe ingresar su numero de telefono",
                maxlength: "El numero ingresado debe tener 10 numeros",
                minlength: "Debe ingresar un numero correcto"
            },
            direccion: "Debe ingresar una direccion",
            usuario: "Debe ingresar un usuario",
            password1: {
                required: "Ingrese una contraseña",
                minlength: "Debe ingresar un minimo de 5 caracteres"
            },
            password1_verificar: {
                required: "Vuelva ingresar la contraseña",
                minlength: "Debe ingresar un minimo de 5 caracteres",
                equalTo: "La contraseña no coincide. Vuelva a escribir"
            }
        }
    });
    jQuery.validator.addMethod("hotmail", function(value, element) {
        return this.optional(element) || /^.+@hotmail.com$/.test(value);
    }, "Solo correos de hotmail.com");
    $("#btn").on("click", function(ev) {
        ev.preventDefault();
        /* Act on the event */
        if ($("#form").valid()) {
            $.ajax({
                url: 'php/index.php',
                type: 'post',
                data: {
                    'nombre': $('#nombre').val(),
                    'email': $('#cemail').val(),
                    'telefono': $('#telefono').val(),
                    'direccion': $('#direccion').val(),
                    'usuario': $('#usuario').val(),
                    'password': $('#password1').val(),
                    'c_password': $('#password1_verificar').val()
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
