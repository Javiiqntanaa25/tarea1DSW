<?php 
include 'includes/header.php';

// 10. Recibes una string de valores separados por coma. Debes eliminar del string los valores
// duplicados, mostrando el valor inicial y el valor tras eliminar los duplicados. Por
// ejemplo, para la siguiente cadena “1,2,3,2,4,1,5" se mostrará:
// 1,2,3,2,4,1,5
// 1,2,3,4,5


$cadena = "1,2,3,2,4,1,5";

$array_valores = explode(",", $cadena);


$array_valores_unicos = array_unique($array_valores);

// Unir los valores únicos en una cadena separados por comas
$cadena_valores_unicos = implode(",", $array_valores_unicos);

// Mostrar la cadena original y la cadena con valores únicos
echo "Cadena original: " . $cadena . "\n";
echo "Cadena con valores únicos: " . $cadena_valores_unicos;



    