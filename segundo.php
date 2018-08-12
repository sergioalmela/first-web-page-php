<?php
    $edad = 25;
    $primer_string = "Mi edad es de: ";
    $segundo_string = " y nací en el año ";
    $fecha_actual = 2018;
    $fecha_nacimiento = $fecha_actual-$edad;
    
    echo $primer_string.$edad." años".$segundo_string.$fecha_nacimiento;
?>