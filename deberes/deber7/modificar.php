<?php
$conn = new mysqli($host, $usuario, $cont, $bdd);
if ($conn->connect_error)
    die($conn->connect_error);
else
    echo 'Conexion exitosa' . '<br>' . '<br>';

//Recibir el id de clasicos
if ($_POST) {

    $id = $_POST['id'];

    $query = "SELECT autor,titulo,tipo,anio FROM clasicos WHERE id='$id'";
    $res = $conn->query($query);
    $row = $res->fetch_assoc();
}
$res->close();
$conn->close();
?>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Modificar</title>
    </head>
    <body>
        <form method="POST" action="./modificar.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div>
                <label for="autor"> Autor: </label>
                <input type="text"  name="autor" value="<?php echo $row['autor']; ?>" id="autor"/>
            </div>
            <div>
                <label for="titulo"> T&iacute;tulo: </label>
                <input type="text"  name="titulo" value="<?php echo$row ['titulo']; ?>" id="titulo"/>
            </div>
            <div>
                <label for="tipo"> Tipo: </label>
                <input type="text"  name="tipo" value="<?php echo$row ['tipo']; ?>" id="tipo"/>
            </div>
            <div>
                <label for="anio"> A&ntilde;o </label>
                <input type="text"  name="anio" value="<?php echo$row ['anio']; ?>" id="anio"/>
            </div>
            <div>
                <input type="submit" value="Guardar" name="Guardar" >
            </div>
        </form>
    </body>
</html>

<?php
//Consulta de modificar
if ($_POST) {
    $ide = $_POST['id'];
    $conni = new mysqli($host, $usuario, $cont, $bdd);
    $aut = $_POST['autor'];
    $tit = $_POST['titulo'];
    $tip = $_POST['tipo'];
    $anio = $_POST['anio'];
    $q_modificar = "UPDATE clasicos SET autor ='$aut',titulo='$tit',tipo = '$tip',anio ='$anio' WHERE id=$ide";
    $resulta = $conni->query($q_modificar);
    if (!$resulta) {
        echo '<div>Exist&oacute; in error al modificar' . '<div>';
    } else {
        echo '<div>Libro modificado exitosamente' . '<div>';
    }
}
echo '<form action="./index.php" >'
 . '<input type="submit" value="Regresar" name="Regresar">';
$conni->close();
?>
