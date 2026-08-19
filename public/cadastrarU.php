<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO USUARIOS (nome, email) VALUES ('$nome', '$email')";s

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>