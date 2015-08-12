<?php
$hoy = date('Y-m-d');
if($_POST){

    $subtotal = $_POST['subtotal'];
    $iva = $_POST['iva'];
    $total = $_POST['total'];
    $insertar = guardar_ventas($hoy,$subtotal,$iva,$total); 
    if(!$insertar){
        echo "No se puede insertar";
    }else{
        echo "Se ingreso exitosamente";
    }


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
$producto = get_producto();
foreach ($producto as $id_prod=>$detalle) {
    $id_p = $id_prod;
    $precio = $detalle[1];
    $cantidad = $_POST['cantidad_'.$id_prod];
    $guardar = guardar_ventaxpro($id,$id_p,$cantidad, $precio );
}
if(!$guardar){
    echo "No se puede insertar";
}else{
    echo "Se ingreso";
}


}