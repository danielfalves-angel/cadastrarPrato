<?php

include "../infra/conexao.php";

$nome_prato = $_POST["nome_prato"];
$usuario_id = $_POST["usuario_id"];

$sql = "INSERT INTO PRATOS (nome_prato,usuario_id) VALUES ('$nome_prato','$usuario_id')";

mysqli_query($conexao, $sql);

header("Location: ../index.php");
?>