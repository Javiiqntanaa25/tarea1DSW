<?php 
include 'includes/header.php';
//8. Crea un array de 5 números aleatorios entre 20 y 30, y muestralo.

for ($i=0; $i <5 ; $i++) { 
    $numerorandom=rand(20,30);
    $arr[$i]=$numerorandom;
    echo $arr[$i], "</br>";
}
    