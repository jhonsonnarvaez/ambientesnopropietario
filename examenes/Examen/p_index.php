<?php

if (isset($_SESSION(['username']))) {
    http_redirect('inicio.php');
}

$usuarios = array(
    array('usuario' => 'juan', 'contrasena' => '123456'),
    array('usuario' => 'maria', 'contrasena' => '654321'),
    array('usuario' => 'andres', 'contrasena' => '0987654')
);

if ($_POST) {
    $nombre = $_POST(['username']);
    $clave = $_POST(['password']);
    $validar = true;
    foreach ($usuarios as $u) {
        if ($nombre == $u['usuario'] and $clave == $u['contrasena']) {
            $validar = true;
//            $_SESSION (['username']) = $_POST (['username']);
//            http_redirect ('inicio.php');
        } elseif ($nombre == "" and $clave == "") {
            $validar = false;
        } else {
            $validar = false;
        }
    }
    
    if(validar){
        $_SESSION(["username"])=$_POST(["username"]);
        http_redirect('inicio.php');
    }else{
        echo 'Usuario y contraseña inconrrectas';
        http_redirect('index.php');
    }
}