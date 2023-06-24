<?php
include "../includes/conexao.php";
$id = $_GET["id"];

$nome = $_POST["nome"];
$especialidade = $_POST["especialidade"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$sql = "update t_nutricionista set nome = '$nome', especialidade = '$especialidade', cidade = '$cidade', estado = '$estado' where codigo = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: ../home/nutricionista.php");
?>