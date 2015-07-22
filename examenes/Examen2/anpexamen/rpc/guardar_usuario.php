<?php

$conn = new mysqli($host, $usuario, $contrasena, $bdd);
$respuesta = "";

if ($_POST) {

    $nombre = $_POST['nombre'];
    $usua = $_POST['usuario'];
    $contra = $_POST['contrasena'];
    $cont2 = md5($contra);

    $q_insert = "INSERT INTO  usuarios (nombre, usuario, contrasena)
        VALUES ('$nombre','$usua','$cont2')";
    $res = $conn->query($q_insert);

    if (!$res) {
        $respuesta = "Existe un error al insertar";
    } else {
        $respuesta = "Se ingreso exitosamente";
    }
}
$conn->close();

echo $respuesta;
?>
