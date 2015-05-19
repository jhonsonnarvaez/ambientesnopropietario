<?php
$paises_y_capitales = array(
    'Argentina' => 'Buenos Aires',
    'Ecuador' => 'Quito',
    'Paraguay' => 'Asuncion',
    'Venezuela' => 'Caracas',
    'El Salvador' => 'San Salvador');

function generar_html(){
echo '<html>';
    echo '<head>';
    echo '</head>';
    echo '<title>Bienvenios a mi pagina</title>'
    echo '<body>';    
    generar_tabla();
    echo '</body>';
    echo'</html>';
}

function generar_tabla(){
echo '<table>';
    echo '<tr>';
    echo '<td>';
    foreach($paises_y_capitales as $pais => $capital){
        for($i = 1; $i<=5; $i++){
            echo isset($pais[i]) ? $capital[i];
        }
    }
    echo '</tr>';
    echo '</td>';
    echo'</table>';
}
?>
