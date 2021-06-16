<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
</body>
</html>

<?php

/**
 * Este script deberá contener una versión dinámica del documento maqueta_pokedex.html.
 * Para obtener la información que usaremos, llamaremos al endpoint api.php
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

$api_response = file_get_contents('http://localhost/php/pokedex/api.php');



if ($api_response !== false) {
    $pokemones = json_decode($api_response, true);

    echo '<header><h1>Pokédex</h1></header>';

    echo '<main>';
    
    for ($i = 0; $i < count($pokemones); $i++) {
       
        echo '<article>';

        echo '<h2>' . $pokemones[$i]['name'] . '</h2>';

        echo '<figure><img src=\' ' . $pokemones[$i]['image'] . '\'></img></figure>';

        echo '<ul>';

        echo '<li><strong>Tipo:</strong> ' . $pokemones[$i]['type'].'</li>';
        echo '<li><strong>Debilidad:</strong> ' . $pokemones[$i]['weakness'].'</li>';
        echo '<li><strong>Altura:</strong> ' . $pokemones[$i]['height'].'</li>';
        echo '<li><strong>Peso:</strong> ' . $pokemones[$i]['weight'].'</li>';
        echo '<li><strong>Descripción:</strong> ' . $pokemones[$i]['description'].'</li>';

        echo '</ul>';

        echo '</article>';

    }

    echo '</main>';

    echo '<footer>Desarrollo Full Stack 2021 ALT Cooperativa</footer>';
    
}
