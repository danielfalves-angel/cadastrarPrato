<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome_prato = $_POST["nome_prato"];
$usuario_id = $_POST["usuario_id"];

$sql = "UPDATE PRATOS SET nome_prato='$nome_prato',usuario_id='$usuario_id' WHERE id_prato = '$id'";

mysqli_query($conexao, $sql);
header("Location: ../index.php");
?>