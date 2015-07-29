<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 04</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body>
        <h1 id="encabezado"><center>Listas</center></h1>
        <div>
            Lista 1:
            <ul id="lista1">
                <li id="elem1">Tortilla </li >
                <li >Jamon</li >
                <li >Queso</li >
            </ul >
        </div>
        <div>
            Lista 2:
            <ul id="lista2">
                <li id="ele1">Coca Cola </li >
                <li >Leche</li >
                <li >Te</li >
            </ul >
        </div>

        <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
        <script type="text/javascript">

            $(document).ready(function() {
                $("#lista1").click(function(event) {
                    $('#elem1').hide(550);
                });
                $("#lista2").click(function(event) {
                    $('#ele1').hide(550);
                });
            });
        </script>
    </body>
</html>
