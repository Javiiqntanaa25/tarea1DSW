<?php 
include 'includes/header.php';

// 9. Declara un array con los valores: 1, 2, ‘antonio’, 200, ‘pepe’. Recorre el array empezando
// por el último elemento, ‘pepe’, mostrando cada elemento en una línea separada.

$arr=[1,2,'antonio',200,'pepe'];

for ($i=count($arr)-1; $i >0 ; $i--) {
    echo $arr[$i], " ";
}
    