<?php

function desplegar_mes(){
    
$semana = 1;
    for($i = 1; $i <= date('t'); $i++){
    $dias_semana = date('N', strtotime(date('Y-m').'-'.$i));
        
        $mes[$semana][$dias_semana] = $i;
        
        if($dias_semana == 7){
        $semana++;
        }
    
    }
     foreach ($mes as $days){
    for ($i=1;$i<=7;$i++){
        echo isset($days[$i]) ? $days[$i] : '';
    }
    }

    }

   
?>