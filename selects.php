<?php
    require 'config.php';

    $lista =[];
    $sql = $pdo ->query("SELECT * FROM cliente");

    if ($sql -> rowCount() > 0){
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listagens</title>
</head>
<body>
    <div class="listas_container">
        <h1>Listas</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Ações</th>
            </tr>
            <?php foreach($lista as $usuario): ?>
                <tr>
                    <td> <?= $usuario['id_cliente'];?> </td>
                    <td> <?= $usuario['nome'];?> </td>
                    <td> <?= $usuario['datanas'];?> </td>
                    <td>
                        <a href="editar.php?id= <?= $usuario['id_cliente'];?>">[ EDITAR ]</a>
                        <a href="excluir.php?id= <?= $usuario['id_cliente'];?>">[ EXCLUIR ]</a>
                    </td>
                </tr>
                
                
            <?php endforeach; ?>
        </table>
    </div>


</body>
</html>
