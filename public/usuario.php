<?php

include "../infra/conexao.php";
$USUARIOS = mysqli_query($conexao, "SELECT * FROM USUARIOS");

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
            <h2>Adicione um novo usuario!</h2>
            <form action="public/cadastrar.php" method="POST">
                <label for="nome">Nome do usuario:</label>
                <input type="text" name="nome" required>
                <br>
                <label for="email">Email do usuario:</label>
                <input type="email" name="email" required>
                <br>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
    <footer>

    </footer>


</body>

</html>