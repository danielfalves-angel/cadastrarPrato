<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];

$sql = "INSERT INTO USUARIOS (nome) VALUES ('$nome')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>