<?php
/**
 * Verificar si existe una sesión iniciada, si la sesión ya ha sido iniciada
 * ingresar directamente al inicio
 *
 * isset( var ) Determina si una variable está definida y no es NULL.
 *              Devuelve TRUE si var existe y tiene un valor distinto de NULL, 
 *              FALSE de lo contrario.
 *              http://php.net/manual/es/function.isset.php
 *
 * $_SESSION  variable súper global que contiene las variables de sesión.
 *
 * header ( string ) Enviar encabezado sin formato HTTP.
 *                   Debe ser llamado antes de mostrar algo por pantalla.
 *                   http://php.net/manual/es/function.header.php
 */

if( isset( $_SESSION['username'] ) && isset($_SESSION['password']) ){
  http_redirect( 'inicio.php' );
}
/**
 * Si no existe una sesión ya iniciada entonces verificar si se ha enviado
 * datos para un inicio de sesión mediante POST, si este es el caso entonces
 * crear la variable de sesión para el usuario e ingresar al inicio
 */

$usuarios = array(
    array('nombre'=>'pedro','clave'=>'123'),
    array('nombre'=>'juan','clave'=>'hola'),
    array('nombre'=>'maria','clave'=>'234'));

$validar=true;
    $nombre= $_POST['username'];
    $clave = $_POST['password'];
    foreach($usuarios as $s){
     if($nombre == $s['nombre'] and $clave==$s['clave']){
     $validar=true;
     break;

}elseif($_POST['username']=="" && $_POST['password']==""){
    $validar=false;
}
else{
     $validar=false;
}   
    }
    
    if($validar){
        $_SESSION['username']=$_POST['username'];
        http_redirect('inicio.php');
    }else{
        echo 'Usuario y contraseña invalido';
    }


