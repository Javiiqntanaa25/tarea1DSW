<?php include 'includes/header.php';

$dado=rand(1,6);

if($dado==1){
    echo "<h1><img src=./img/dado1.jpg></img></h1>";
}elseif($dado==2){
    echo "<h1><img src=./img/dado2.jpg></img></h1>";
}elseif($dado==3){
    echo "<h1><img src=./img/dado3.jpg></img></h1>";
}elseif($dado==4){
    echo "<h1><img src=./img/dado4.jpg></img></h1>";
}elseif($dado==5){
    echo "<h1><img src=./img/dado5.jpg></img></h1>";
}elseif($dado==6){
    echo "<h1><img src=./img/dado6.jpg></img></h1>";
}