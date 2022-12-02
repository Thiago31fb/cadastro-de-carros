<?php

    $db_nome = 'veiculos';
    $db_host = 'localhost:3306';
    $db_usuario ='root';
    $db_senha  = '';

    $pdo = new PDO("mysql:dbname=".$db_nome.";host=".$db_host,$db_usuario,$db_senha);

?>