function validar(form) {

    msg_error = "";
    msg_error += validarNombre(form.nombre.value);
    msg_error += validarApellido(form.apellido.value);
    msg_error += validarDireccion(form.direccion.value);
    msg_error += validarTelef(form.telefono.value);
    msg_error += validarEstado(form.estado_civil.value);
    msg_error += validarDepar(form.departamento.value);


    if (msg_error == "") {
        return true;

    } else {
        alert(msg_error);

        return false;

    }
}

function  validarNombre(valor) {
    if (valor == "") {
        return "Ingrese el nombre.\n"
    }
    return"";


}

function  validarApellido(valor) {
    if (valor == "") {
        return "Ingrese el apellido.\n"
    }
    return"";


}
function  validarDireccion(valor) {
    if (valor == "") {
        return "Ingrese la direccion.\n"
    }
    return"";


}


function  validarTelef(valor) {
    if (valor == "")
        return "El n&uacute;mero es incorrecto.\n";

    else if (valor.length > 1 && valor.length < 10) {
        return "El n&uacute;mero esta incompleto.\n";
    }
    return"";


}

function  validarEstado(valor) {
    if (valor == "") {
        return "Ingrese el Estado.\n"
    }
    return"";


}

function  validarDepar(valor) {
    if (valor == "") {
        return "Ingrese el departamento.\n"
    }
    return"";


}