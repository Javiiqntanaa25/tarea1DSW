<?php include 'includes/header.php';

//7. Crea y muestra un array con los números pares entre 1 y 100

for ($i=0; $i <=100 ; $i++) {
    if($i%2==0){
    $arr[$i]=$i;
    echo $arr[$i],"</br>";
    }
}
