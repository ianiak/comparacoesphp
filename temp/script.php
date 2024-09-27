<?php

$temp = $_POST['temp'];
$type = $_POST['tipo'];


if($type ==='c'){

    $k = $temp+273.15;
    $f = $temp*1.8+32;


    echo("temperatura em Celsius é".$temp);
    echo("<br>temperatura em Kelvin é".$k);
    echo("<br>temperatura em Fharenheit é".$f);


}





?>