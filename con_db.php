<?php
    $host = 'localhost'; // Cambia esto si tu host es diferente
    $db = 'u981249563_plataform_excl';
    $user = 'u981249563_Agustin';
    $password = 'Pca70071';
    
    $conex = new mysqli($host, $user, $password, $db);
    
    if ($conex->connect_error) {
        die("La conexión a la base de datos falló: " . $conex->connect_error);
    }
    
    
?>