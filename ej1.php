<?php declare(strict_types=1);
include 'includes/header.php';
// 1. Realizar un programa en el que se declare una variable de cada tipo de dato; Que se
// utilicen las comillas simples y dobles; que se concatenen varias cadenas; que se
// concatenen varias cadenas con sus valores correspondientes; que se realice la salida de
// una de las cadenas mediante echo y mediante print; que se declare una constante
// (mediante define y const); que se utilice var_dump(); donde se realice una conversión
// explícita de tipos; donde haga uso de referencias.
$boleano=true;
$decimal=3.3;
$entero=33;
$cadena="Hola que tal";
$cadena2='Bien y tu?';

$concatenacion= $cadena . "," . $cadena2;

echo $concatenacion ."</br>";
print($concatenacion);

define("PI","3.14");
echo "</br>".PI;
const pi = 3.14;
echo "</br>".pi."</br>";
var_dump($boleano);
$decimalaentero=(int)$decimal;
echo "</br>".$decimalaentero;

include 'includes/footer.php';
