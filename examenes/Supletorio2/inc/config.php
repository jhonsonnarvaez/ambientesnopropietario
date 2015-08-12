<?php

define('HOST','localhost');
define('BDD','ventas');
define('USUARIO','anp');
define('CONTRASENA','12345');

function conectar_bd(){
  $conn = new mysqli(HOST, USUARIO, CONTRASENA, BDD);
  $conn->query('SET NAMES utf8');
  if($conn->connect_error) {
    echo "No se puede conectar a la BDD.";
    return false;
  }
  
  return $conn;
}

function get_producto(){
  $conn = conectar_bd();

  $query = 'SELECT * FROM productos';
  
  $result = $conn->query($query);

  if(!$result)
    return false;//echo ($conn->error);
    
  $num_rows = $result->num_rows;

  for($j = 0; $j < $num_rows; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    $producto[$row['id']] = array(
      $row['nombre'], 
      $row['precio']
      );
  }

  $result->close();
  $conn->close();

  return $producto;
}

function guardar_ventas($fecha, $subtotal, $iva, $total){
  $conn = conectar_bd();
  $query2 = "INSERT INTO venta (fecha,subtotal,iva,total) VALUES('$fecha', '$subtotal', '$iva', '$total')";
  $result2 = $conn->query($query2);
  $conn->close();

  if(!$result2){
    return false;
  }else{
   return true;
 }

}
function guardar_ventaxpro($id_pro,$id_venta,$cantidad,$precio){
  $conn = conectar_bd();
  $query = "SELECT @@identity AS id_venta";
  $result = $conn->query($query);

  if(!$result)
    return false;//echo ($conn->error);
    
  $num_rows = $result->num_rows;

  for($j = 0; $j < $num_rows; ++$j){
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $id = trim($row['id_venta']);
  }
  $id = $id_venta;
  $query2 = "INSERT INTO venta (id,id_venta,cantidad,precio) VALUES('$id_pro', '$id', '$cantidad', '$precio')";
  $result2 = $conn->query($query2);
  $conn->close();

  if(!$result2){
    return false;
  }else{
   return true;
 }
}
// echo "<pre>";
// print_r(get_cantones(1));
// echo "</pre>";
