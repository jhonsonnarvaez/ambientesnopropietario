<?php

$host = 'localhost';
$bdd = 'examen';
$usuario = 'anp';
$contrasena = '12345';

function get_Usuario($usua) {
    $conn = new mysqli($host, $usuario, $contrasena, $bdd);
    $q_buscar = "SELECT * FROM examen WHERE usuarios = '" . $usua . "'";
    $result = $conn->query($q_buscar);
    $this->db->select('usuario');
    $this->db->where('LOWER(usuario)=', strtolower($usua));
    if ($result->num_rows() == 0) {
        return true;
    } else {
        return false;
    }
}

function guardar_Usuario($nombre,$usua,$contra){
    $conn = new mysqli($host, $usuario, $contrasena, $bdd);
    $respuesta = "";

    if ($_POST) {

        $nombre= $_POST['nombre'];
        $usua = $_POST['usuario'];
        $contrasena = $_POST['password'];
        $q_insert = "INSERT INTO  usuarios (nombre, usuario, password)
        VALUES ('$nombre','$usua', '$contra' )";
        $res = $conn->query($q_insert);

        if (!$res) {
            $respuesta = "Existe un error al insertar";
        } else {
            $respuesta = "Se ingreso exitosamente";
        }
    }
    $conn->close();

    echo $respuesta;

}

function verificarInicio(){
       $conn = new mysqli($host, $usuario, $contrasena, $bdd);
       
       $usua=$_POST['usuario'];
       $contra = $_POST['contrasena'];
       
       $consulta = "SELECT * FROM examen WHERE usuario = '$usua' AND contrasena = '$contra'";
       if(mysqli_num_rows($consulta)>0){
           $row = mysqli_fetch_array($consulta);
           $_SESSION['usuario'] = $row['usuario'];
           echo $_SESSION['usuario'];
           echo '<script> window.location="inicio.php"; </script>';
       }
       else{
            echo 'Usuario o Contraseña Incorrecto';
           echo '<script> window.location="index.php"; </script>';
       }
}