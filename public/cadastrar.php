<?php

include "../infra/conexao.php";

$nome_prato = $_POST["nome_prato"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
$usuario_id = $_POST["usuario_id"];

$sql = "INSERT INTO PRATOS (nome_prato, descricao, preco, categoria, usuario_id) VALUES ('$nome_prato', '$descricao', '$preco', '$categoria', '$usuario_id')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>