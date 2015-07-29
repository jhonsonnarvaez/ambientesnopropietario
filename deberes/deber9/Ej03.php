<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio 03</title>
    </head>
    <body>

        <h1 id="encabezado" class="intro"><center>CASCADA STYLE SHEET (CSS)</center></h1>

        <p id="p1" class="intro"><i>CSS es un lenguaje de hojas de estilos creado para controlar 
                el aspecto o presentación de los documentos electrónicos definidos 
                con HTML y XHTML. CSS es la mejor forma de separar los contenidos y 
                su presentación y es imprescindible para crear páginas web
                complejas.</i></p>

        <p id="p2">Una vez creados los contenidos, se utiliza el lenguaje CSS 
            para definir el aspecto de cada elemento: color, tamaño y tipo de 
            letra del texto, separación horizontal y vertical entre elementos,
            posición de cada elemento dentro de la página, etc.</p>

        <button id="ocultar">Ocultar</button>
        <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
        <script type="text/javascript">

            $(document).ready(function(event) {

                $("#ocultar").on('click', function() {
                    
                    $('#p1').hide(750);
                   
                   
                })
            })
        </script>

    </body>
</html>
