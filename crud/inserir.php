<?php
include "../includes/conexao.php";

$nome = $_POST["nome"];
$especialidade = $_POST["especialidade"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$sql = "insert into t_nutricionista(nome, especialidade, cidade, estado) values('$nome', '$especialidade', $cidade', '$estado')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: nutricionista.php");
?>