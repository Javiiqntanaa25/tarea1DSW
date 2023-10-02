<?php include 'includes/header.php';
//6. Realizar un programa que cada vez que se ejecute muestre tu nombre a un tamaño
//elegido al azar entre 200% y 700%.

$porcentage=rand(200,700);
echo "<style>
    .nombre{
        font-size:$porcentage%;
    }
    </style>";

echo "<p class='nombre'>Javier Quintana Rodriguez</p>";