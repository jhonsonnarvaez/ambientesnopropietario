<?php

   $conn = new mysqli($host, $usuario, $contrasena, $bdd);
   $respuesta = "";

if($_POST){

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $usua = $_POST['usuario'];
    $pass = $_POST['password'];
    $passw = $_POST['c_password'];

  
        $q_insert = "INSERT INTO  registro (nombre, email, telefono, direccion, usuario, password, c_password)
        VALUES ('$nombre', '$email', '$telefono', '$direccion', '$usua', '$pass', '$passw')";
        $res = $conn->query($q_insert);  

        if(!$res){
            $respuesta = "Existe un error al insertar";
        }
        else{
            $respuesta = "Se ingreso exitosamente";
        }
}
$conn->close();

echo $respuesta;



?>
