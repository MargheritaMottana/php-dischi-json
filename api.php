<?php
    // recupero il mio "database" dal file json in cui l'ho spostato
    $database = file_get_contents('./database/discs.json');

    header('Content-Type: application/json');
    echo $database;