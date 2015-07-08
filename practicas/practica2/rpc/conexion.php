<?php
$conn = new mysqli($host, $usuario, $contrasena, $bdd);
if($conn->connect_error)
	die($conn->connect_error);

if($_POST){
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];
        $noticia = 'no';
        if(isset($_POST['noticia'])){
           $_POST['noticia'];
        }

	$q_insert = "INSERT INTO  mensajes (nombre,email,mensaje,noticia)
	VALUES ($nombre,$email,$mensaje,$noticia)";

	$res = $conn->query($q_insert);
        
          if (!$res) {
            echo '<div>Exist&oacute; in error al insertar' . '<div>';
        } else {
        echo '<div>Libro insertado correctamente' . '<div>';}

}
?>