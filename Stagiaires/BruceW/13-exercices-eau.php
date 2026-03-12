<?php

$eau = rand(-100, 200);

if ($eau <= 0) {
    echo " l eau est solide";
    } elseif ( 1 >= $eau && $eau < 100) {
    echo " l eau est liquide";
    } else {
    echo " l eau est gazeuse";
    }
    endif; 
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>temperature de l eau</title>
    </head>
    <body>
        <h1>temperature de l eau</h1>
        <p>La temperature de l eau est : <?= $eau; ?>°C</p>
    </body>
    </html>
