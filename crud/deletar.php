<?php
include "../includes/conexao.php";
$id = $_GET["id"];

$sql = "delete from t_nutricionista where codigo = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header("location: ../home/nutricionista.php");
?>