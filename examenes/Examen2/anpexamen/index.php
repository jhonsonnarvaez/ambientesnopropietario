<?php
session_start();
$conn = new mysqli($host, $usuario, $contrasena, $bdd);
if(isset($_SESSION['usuario'])){
       echo '<script> window.location="inicio.php"; </script>';
}
?>
<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="http://getbootstrap.com/favicon.ico">

        <title>Signin Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="./Signin Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">

            <form method="post" action="validar.php"class="form-signin">
                <h2 class="form-signin-heading">Inicio de Sesión</h2>
                <label for=usua" class="sr-only">Usuario</label>
                <input type="text" id="usua" class="form-control" placeholder="Usuario" required="" autofocus="">
                <label for="pass" class="sr-only">Contraseña</label>
                <input type="password" id="pass" class="form-control" placeholder="Password" required="">
                <button class="btn btn-lg btn-primary btn-block" type="submit" id="iniciar">Iniciar Sesión</button>
            </form>

            <label>
                <a href="" data-toggle="modal" data-target="#myModal">Registrar Usuario</a>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Registro de Usuario</h4>
                            </div>
                            <div class="modal-body">
                                <form id="form">
                                    <div class="form-group">
                                        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="usuario" class="col-sm-2 control-label">Usuario</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="usuario" placeholder="Usuario" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="col-sm-2 control-label">Contraseña</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="pass" placeholder="Contraseña" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass_2" class="col-sm-2 control-label">Verificar Contraseña</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="pass_2" placeholder="Contraseña" required>
                                        </div>
                                    </div>
                                    <div id='mensaje'></div>
                                        
                                </form>


                            </div>
                            <div class="modal-footer">

                                <button type="button" id="ingresar" class="btn btn-primary">Crear Usuario</button>
                            </div>
                        </div>
                    </div>
                </div>

            </label>



        </div> <!-- /container -->


        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>      
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>

