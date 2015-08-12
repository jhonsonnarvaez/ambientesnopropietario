<?php
$valor = $_POST['cantidad'];

if($_POST){
	$obtener = get_producto();
	foreach ($obtener as $nombre => $precio) {
		 $valor * $precio;
	}
}