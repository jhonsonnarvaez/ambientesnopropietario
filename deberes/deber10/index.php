<?php
$conn = new mysqli($host, $usuario, $cont, $bdd);

if ($conn->connect_error)
    die($conn->connect_error);

if ($_POST) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $date = $_POST['fecha_nacimiento'];
    $dir = $_POST['direccion'];
    $telf = $_POST['telefono'];
    $estado = $_POST['estado_civil'];
    $depart = $_POST['departamento'];

    if ($nombre != '' && $apellido != '' && $date != '' && $dir != '' && $telf 
            != '' && $estado != '' && $depart != '') {
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
} 

$query = ('SELECT * FROM empleado');
$result = $conn->query($query);

if (!$result)
    die($conn->error);

$num_rows = $result->num_rows;
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Deber 10</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        <div class="container show-grid">
            <div class="row">
                <div class="col-md-12">
                    Menú
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 cabecera">
                    <p>Cabecera</p>

                    <div id="carousel-example-generic" class="carousel slide"
                         data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" 
                                data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" 
                                data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" 
                                data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <center> <img src="img/1.jpg" 
                                              alt="buho"></center>
                            </div>
                            <div class="item">
                                <center><img src="img/2.jpg" 
                                             alt="Naturaleza"></center>
                            </div>

                            <div class="item">
                                <center><img src="img/3.jpg" 
                                             alt="Naturaleza2"></center>
                            </div>

                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" 
                           href="#carousel-example-generic" role="button" 
                           data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" 
                                  aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" 
                           href="#carousel-example-generic" role="button" 
                           data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" 
                                  aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12 contenido">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <span>Contenido Principal</span>  
                                <br>
                                <br>
                                <div class="col-xs-5">
                                    <form method="post">
                                        <label>Nombre: </label>
                                        <input class="form-control input-sm" 
                                               type="text" name="nombre" 
                                               id="nombre" placeholder="Nombre">
                                        <label>Apellido: </label>
                                        <input class="form-control input-sm" 
                                               type="text" name="apellido" 
                                               id="apellido" 
                                               placeholder="Apellido">
                                        <label>Fecha de nacimiento: </label>
                                        <input class="form-control input-sm" 
                                               type="text" 
                                               name="fecha_nacimiento" 
                                               id="fecha_nacimiento" 
                                               placeholder="Fecha de Nacimiento">
                                        <label>Direccion: </label>
                                        <input class="form-control input-sm" 
                                               type="text" name="direccion" 
                                               id="direccion" 
                                               placeholder="Direccion">
                                        <label>Telefono: </label>
                                        <input class="form-control input-sm" 
                                               type="text" name="telefono" 
                                               id="telefono" 
                                               placeholder="Telefono">
                                        <label>Estado civil: </label>
                                        <input class="form-control input-sm" 
                                               type="text" name="estado_civil"
                                               id="estado_civil" 
                                               placeholder="Estado civil">
                                        <label>Departamento: </label>
                                        <center><input class="form-control 
                                                       input-sm" type="text" 
                                                       name="departamento" 
                                                       id="departamento" 
                                                       placeholder="Departamento">
                                        </center>
                                        <br>

                                        <button type="submit" 
                                                class="btn btn-primary"
                                                name="ingresar" 
                                                value="ingresar">Ingresar
                                        </button>
                                    </form>


                                </div>


                                <?php
                                echo '<div class="table-responsive">';
                                echo '<table class="table table-bordered">';
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
                                    . '<input 
                                        type="hidden" value="' . $row['id'] . '" 
                                            name="id">'
                                    . '<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" 
data-target="#myModal">
 Modificar
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"
        aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar Datos</h4>
      </div>
      <div class="modal-body">
        <br>
         <form method="post">
                                        <label>Nombre: </label>
                                        <input class="form-control input-sm" 
                                        type="text" name="nombre" id="nombre" 
                                        placeholder="Nombre">
                                        <label>Apellido: </label>
                                        <input class="form-control input-sm" 
                                        type="text" name="apellido" 
                                        id="apellido" placeholder="Apellido">
                                        <label>Fecha de nacimiento: </label>
                                        <input class="form-control 
                                        input-sm" type="text" 
                                        name="fecha_nacimiento" 
                                        id="fecha_nacimiento" 
                                        placeholder="Fecha de Nacimiento">
                                        <label>Direccion: </label>
                                        <input class="form-control 
                                        input-sm" type="text" name="direccion" 
                                        id="direccion" placeholder="Direccion">
                                        <label>Telefono: </label>
                                        <input class="form-control input-sm" 
                                        type="text" name="telefono" 
                                        id="telefono" placeholder="Telefono">
                                        <label>Estado civil: </label>
                                        <input class="form-control input-sm"
                                        type="text" name="estado_civil" 
                                        id="estado_civil" 
                                        placeholder="Estado civil">
                                        <label>Departamento: </label>
                                        <center><input class="form-control
                                        input-sm" type="text" 
                                        name="departamento" 
                                        id="departamento" 
                                        placeholder="Departamento"></center>
                                        <br>
                                    </form>


        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" 
        data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div'
                                    . '</form> </td>';
                                    echo '<td>'
                                    . '<form action="./index.php" method="post">'
                                    . '<input type="hidden" 
                                        value="' . $row['id'] . '"  name="id">'
                                    . '<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-xs"
data-toggle="modal" data-target="#myModal2">
  Eliminar
</button>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" 
        aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel2">Eliminar</h4>
      </div>
      <div class="modal-body">
        ¿Desea eliminar el empleado?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" 
        data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Si</button>
      </div>
    </div>
  </div>
</div>'
                                    . '</form> </td>';
                                    echo '</tr>';
                                }
                                echo '</table>';
                                echo '</div>';

                                $result->close();
                                $conn->close();
                                ?>
                            </div>
                        </div>
                        <div class="col-md-3">   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/holder.min.js"></script>
    </body>
</html>