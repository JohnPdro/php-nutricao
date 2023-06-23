<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$id = $_GET["id"];

$nome = "";
$especialidade = "";
$cidade = "";
$estado = "";
$sql = "select * from t_nutricionista where codigo = $id";
$todos_registros = mysqli_query($conexao, $sql);
while($um_registro = mysqli_fetch_assoc($todos_registros)):
  $nome = $um_registro["nome"];
  $especialidade = $um_registro["especialidade"];
  $cidade = $um_registro["cidade"];
  $estado = $um_registro["estado"];
endwhile;
?>

<h1>Ficha Pessoal</h1>

Nome: <?php echo $nome; ?> <br>
Especialidade: <?php echo $especialidade; ?> <br>
Cidade: <?php echo $cidade; ?> <br>
Estado: <?php echo $estado; ?> <br>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>