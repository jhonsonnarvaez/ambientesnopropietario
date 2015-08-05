$(document).ready(function () {
    $("#form").on("hidden.bs.modal", function (ev) {
        $("#form")[0].reset();
    })

    $("#form").validate({
        rules: {
            nombre: {
                required: true,
                 minlength: 3
            },
            apellido: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
            },
            provincia: {
                required: true
            }
            ,
            canton: {
                required: true
            }
            ,
            parroquia: {
                required: true
            }
        },
        messages: {
            nombre: {
                required: "Debe ingresar un nombre",
                 minlength: "El nombre de ingresar minimo de 3 caracteres"
            },
           apellido: {
                required: "Debe ingrear un apellido",
                minlength: "El apellido debe tener minimo 3 caracteres"
            },email: {
                required: "El email es incorrecto",
            },
            provincia: {
                required: "Elija una provincia"
            }
            ,
            canton: {
                required: "Elija un canton"
            }
            ,
            parroquia: {
                required: "Elija un canton"
            }
        }
    });
    $("#guardar").on("click", function (ev) {
        ev.preventDefault();
        if ($("#form").valid()) {

            $.ajax({
                url: 'rpc/get_cantones.php',
//                type: 'POST',
//                data: {
//                    nombre: $("#nombre").val(),
//                    usuario: $("#usuario").val(),
//                    contrasena: $("#contrasena").val()
//                    
//                }
            })
                    .done(function (msg) {
                        $("#mensaje").html(msg);
                    })
                    .fail(function (jHttp, textStatus, errorThrown) {
                        $("#mensaje").html("Error: " + textStatus + ". " + errorThrown);
                    })
                    .always(function () {
                        $("#form")[0].reset();
                        console.log("complete");
                    });
        }
    });
});

