<<?php

include "infra/conexao.php";
$USUARIOS = mysqli_query($conexao, "SELECT * FROM USUARIOS");
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
    <div class="caixa">
    <main>
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
        <div>
            <h2>Livros Cadastrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome do Prato</th>
                    <th>Usuario</th>
                </tr>
                <?php while ($PRATO = mysqli_fetch_assoc($PRATOS)) { ?>
                    <tr>
                        <td><?php echo $PRATO["id_prato"]?></td>
                        <td><?php echo $PRATO["nome_prato"] ?></td>
                        <td><?php echo $PRATO["usuario_id"] ?></td>
                        <td>
                            <a href="public/editar.php?id=<?php echo $PRATO["id_prato"] ?>">Editar</a>
                            <a href="public/excluir.php?id=<?php echo $PRATO["id_prato"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>

    </main>
    <footer>

    </footer>


</body>

</html>