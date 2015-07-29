<?php
$conn = new mysqli($host, $usuario, $cont, $bdd);

if ($conn->connect_error)
    die($conn->connect_error);

if ($_POST['ingresar']) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $date = $_POST['fecha_nacimiento'];
    $dir = $_POST['direccion'];
    $telf = $_POST['telefono'];
    $estado = $_POST['estado_civil'];
    $depart = $_POST['departamento'];

    if ($nombre != '' && $apellido != '' && $date != '' && $dir != '' && $telf != '' && $estado != '' && $depart != '') {
        $q_insert = "INSERT INTO empleado(nombre,apellido,fecha_nacimiento,
            direccion,telefono,estado_civil,departamento)
            VALUES('$nombre','$apellido',STR_TO_DATE('$date', '%m/%d/%Y'),'$dir',
                '$telf','$estado','$depart')";

        $res = $conn->query($q_insert);

        if (!$res) {
            echo '<div>Existi&oacute; un error al insertar.' . $conn->error .
            '</div>';
        } else {
            echo '<div>Ingrese todos los campos.</div>';
        }
    }
} else {
    if ($_POST['eliminar']) {
        $id = $_POST['id'];
        $q_eliminar = "DELETE FROM empleado WHERE id=$id";
        $resu = $conn->query($q_eliminar);
        if (!$resu) {
            echo '<div>Exist&oacute; Un error al eliminar' . '<div>';
        } else {
            echo '<div>Libro borrado exitosamente' . '<div>';
        }
    }
}

$query = ('SELECT * FROM empleado');
$result = $conn->query($query);

if (!$result)
    die($conn->error);

$num_rows = $result->num_rows;
?>

<html>
    <head>
        <title>Empleados</title> 
        <style>
            .miestilo{
                background-color:#FFEDED;
                border-color: #ED7476;
                padding:10px;
                font-size:20px;
                text-align:center;
                width:95%;
                margin:auto;}

        </style>
    </head>

    <body>

        <form action="./index.php" method="post" onsubmit="return validar(this)">

            <div><strong>Ingresar un Empleado nuevo</strong></div>
            <div>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" value="" id="nombre">
            </div>

            <div>
                <label for="apellido">Apellido: </label>
                <input type="text" name="apellido" value="" id="apellido">
            </div>

            <div>
                <label for="fecha_nacimiento">Fecha de Nacimiento: </label>
                <input type="text" name="fecha_nacimiento" value="" 
                       id="fecha_nacimiento">
            </div>

            <div>
                <label for="direccion">Direccion: </label>
                <input type="text" name="direccion" value="" id="direccion">
            </div>

            <div>
                <label for="telefono">Telefono: </label>
                <input type="text" name="telefono" value="" id="telefono">
            </div>

            <div>
                <label for="estado_civil">Estado Civil: </label>
                <input type="text" name="estado_civil" value="" id="estado_civil">
            </div>

            <div>
                <label for="departamento">Departamento: </label>
                <input type="text" name="departamento" value="" id="departamento">
            </div>

            <div>
                <input name="ingresar" type="submit"  value="Ingresar" >
            </div>

        </form>
        <?php
        echo '<table>';
        echo '<tr>';
        echo '<th>Nombre</th>';
        echo '<th>Apellido</th>';
        echo '<th>Fecha de Nacimiento</th>';
        echo '<th>Direccion</th>';
        echo '<th>Telefono</th>';
        echo '<th>Estado civil</th>';
        echo '<th>Departamento</th>';
        echo '</tr>';

        for ($j = 0; $j < $num_rows; $j++) {
            $result->data_seek($j);
            $row = $result->fetch_Array(MYSQLI_ASSOC);

            echo '<tr>';
            echo '<td>' . $row['nombre'] . '</td>';
            echo '<td>' . $row['apellido'] . '</td>';
            echo '<td>' . $row['fecha_nacimiento'] . '</td>';
            echo '<td>' . $row['direccion'] . '</td>';
            echo '<td>' . $row['telefono'] . '</td>';
            echo '<td>' . $row['estado_civil'] . '</td>';
            echo '<td>' . $row['departamento'] . '</td>';
            echo '<td>'
            . '<form action="./index.php" method="post">'
            . '<input type="hidden" value="' . $row['id'] . '"  name="id">'
            . '<input name="modificar" type="submit" value="Modificar" >'
            . '</form> </td>';
            echo '<td>'
            . '<form action="./index.php" method="post">'
            . '<input type="hidden" value="' . $row['id'] . '"  name="id">'
            . '<input name="eliminar" type="submit" value="Eliminar" >'
            . '</form> </td>';
            echo '</tr>';
        }
        echo '</table>';

        $result->close();
        $conn->close();
        ?>
        <div id="insertar" ></div>
        <script type="text/javascript" src="validacion.js">
                document.getElementById("insertar").className = "miestilo";
        
        </script>
    </body>
</html>

