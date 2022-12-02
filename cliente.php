<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cliente.css">
    <title>Cadastro</title>
</head>
<body>

    <div class="containers">
        <form action="action_cadastrar.php" method="post">
            <h1>Cadastro de Clientes</h1>
            <p>Nome:</p>  <input type="text" name="nome">
            <p>Data de nascimento:</p> <input type="date" name="data" id="data">
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <div class="containers">
        <form action="action_cadastrar.php" method="post">
            <h1>Cadastro Carro</h1>
            <p>Placa:</p> <input type="text">
            <p>Cor:</p> <input type="text">
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <div class="containers">
        <form action="action_cadastrar.php" method="post">
            <h1>Modelo</h1>
            <p>Modelo:</p> <input type="text" name="modelo">
            <input type="submit" value="Cadastrar">
        </form>
    </div>


    <div class="containers">
        <form action="action_cadastrar.php" method="post">
            <h1>Patio</h1>
            <p>Capacidade:</p> <input type="number">
            <p>Rua:</p> <input type="text">
            <p>Bairro:</p> <input type="text">
            <p>Numero:</p> <input type="number">
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>