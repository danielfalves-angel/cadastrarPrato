<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM PRATOS WHERE id_prato = $id";
$resultado = mysqli_query($conexao, $sql );

$PRATO =mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Prato</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>
    <header>
        <h1>Editar</h1>
    </header>
    <main>
        <h2>Editando o prato <?php echo $PRATO["id_prato"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $PRATO["id_prato"]?>">

            <label for="nome_prato">Nome do Prato:</label>
            <input type="text" name="nome_prato" value="<?php echo $PRATO["nome_prato"]?>">
            <br>

            <label for="usuario">Usuário:</label>
            <input type="number" name="usuario" value="<?php echo $PRATO["usuario"]?>">
            <br>

            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>