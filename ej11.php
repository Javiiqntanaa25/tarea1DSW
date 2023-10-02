<?php 
include 'includes/header.php';

// Dado un array de números, un número es “líder” si su valor es mayor que la suma de
// todos los números que se encuentran a su derecha. Escribir un programa que dado un
// array de números, devuelva otro array conteniendo los números líderes.
// Ejemplos:
// • leaders ([1, 2, 3, 4, 0]) ==> return [4]
// • leaders ([16, 17, 4, 3, 5, 2]) ==> return {17, 5, 2]
// • leaders ([5, 2, -1]) ==> return [5, 2]
// • leaders ([0, -1, -29, 3, 2]) ==> return [0, -1, 3, 2]

function leaders($array) {
    $n = count($array);
    $max = PHP_INT_MIN;
    $result = array();

    for ($i = $n - 1; $i >= 0; $i--) {
        if ($array[$i] > $max) {
            $max = $array[$i];
            $result[] = $max;
        }
    }

    
    $result = array_reverse($result);

    return $result;
}


print_r(leaders([1, 2, 3, 4, 0]));
print_r(leaders([16, 17, 4, 3, 5, 2]));
print_r(leaders([5, 2, -1]));
print_r(leaders([0, -1, -29, 3, 2])); 