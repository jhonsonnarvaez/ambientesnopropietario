<?php


$idCanton = $_POST['cod_canton'];
$idparroquia = $_POST['cod_parroquia'];
if(isset($_POST) && !empty($idparroquia) && !empty($idCanton)){
   if($idCanton == 'get_parroquias'){
        $listaparroquias = get_parroquias($idCanton);
   }
   echo $listaparroquias;
} 

?>