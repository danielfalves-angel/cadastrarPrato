<?php
include "../infra/conexao.php";
$id_prato = $_GET["id_prato"];
$sql = "DELETE FROM livros WHERE id_prato=$id_prato";
mysqli_query($conexao,$sql);
header("Location: ../index.php");
?>