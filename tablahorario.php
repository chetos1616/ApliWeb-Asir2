<?php

$horario = array(
    array("Base de datos","Aplicaciones Web","Seguridad","Redes","Seguridad"),
    array("EIE","Seguridad","Seguridad","Redes","Seguridad"), 
    array("Sistemas","Redes","Sistemas","Sistemas","Redes"), 
    array("Sistemas","Redes","Sistemas","Sistemas","Redes"),  
    array("Aplicaciones Web","Base de datos","EIE","Aplicaciones Web","Ingles"), 
    array("Aplicaciones Web","Base de datos","EIE","Aplicaciones Web","Ingles")
);


$dia = date("N");
$hora = date("G");

echo $horario[$hora-8][$dia-1];

echo "<center><table border = 'solid black 1px'>";
foreach($horario as $dia){
    echo "<tr>";
    foreach($dia as $asig){
        echo "<td>";
        echo $asig;
        echo "</td>";
    }
    echo "</tr>";
    echo "<br>";
}
echo "</table></center>";
