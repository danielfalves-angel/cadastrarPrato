<?php

include "infra/conexao.php";
$PRATOS = mysqli_query($conexao, "SELECT * FROM PRATOS");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIZZARIA PORRONTO</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>PIZZARIA PORRONTO</h1>
    </header>
    
    <main>
        <div class="caixa">
            <h2>Adicione um novo prato!</h2>
            <form action="public/cadastrar.php" method="POST">
                <label for="nome_prato">Nome do prato:</label>
                <input type="text" name="nome_prato">
                <br>
                <label for="usuario_id">Usuario que cadastrou:</label>
                <input type="number" name="usuario_id">
                <br>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
    <footer>

    </footer>

</body>

</html>