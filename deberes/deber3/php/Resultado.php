<?php
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">';
$nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];
$generos=$_POST['genero'];
$correo=$_POST['correo'];
$cuidad=$_POST['cuidad'];
$interese=$_POST['intereses'];
$biogr=$_POST['biografiaPerso'];
echo "Su nombre es" .$nombre;
echo'<br>';
echo "Su apellido es" .$apellido;
echo'<br>';
echo "su correo es: " .$correo;
echo'<br>';
echo "De genero :". $generos;
echo'<br>';
echo "De la cuidad de ". $cuidad;
echo'<br>';
echo " Sus interese son: ".$interese;
echo'<br>';
echo "Pequeña biografia:  ".$biogr;


?>
