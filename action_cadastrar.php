<?php

    require 'config.php';
    // Cadastro de Clientes
    $nome = filter_input(INPUT_POST, 'nome');
    $datanas = filter_input(INPUT_POST, 'data');

    if($nome && $datanas){

        $sql = $pdo->prepare("INSERT INTO cliente (nome, datanas) VALUES (:nome, :datanas)");
        $sql ->bindValue(':nome',$nome);
        $sql ->bindValue(':datanas',$datanas);
    
        $sql ->execute();
        header("Location: cliente.php");
        exit;
    }
 


    //Cadastro Modelo
    $modelo = filter_input(INPUT_POST,'modelo');

    if($modelo){
        $sql = $pdo->prepare("SELECT * FROM modelo WHERE  descricao = :modelo");
        $sql->bindValue(':modelo',$modelo);
        $sql->execute();

        if($sql->rowCount() === 0){
            $sql = $pdo-> prepare("INSERT INTO modelo(descricao) VALUE (:modelo)");
            $sql->bindValue(':modelo',$modelo);
            $sql->execute();
            header("Location: cliente.php");
        }
        else{
            header("Location: cliente.php");
        }
    }
?>