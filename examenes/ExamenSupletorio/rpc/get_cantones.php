<?php

$id_provincia = $_POST['cod_provincia'];
$id_canton = $_POST['cod_canton'];
 get_provincias();
if (isset($_POST) && !empty($id_canton) && !empty($id_provincia)) {
    if ($id_provincia == 'get_canton') {
       
        $cantones=get_cantones($id_provincia);
    }
    echo $cantones;
}





