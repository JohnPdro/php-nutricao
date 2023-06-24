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
while ($um_registros = mysqli_fetch_assoc($todos_registros)) :
  $nome = $um_registros["nome"];
  $especialidade = $um_registros["especialidade"];
  $cidade = $um_registros["cidade"];
  $estado = $um_registros["estado"];
endwhile
?>

<h1>Editar aluno <?php echo $id; ?></h1>
<form method="post" action="atualizar.php?id=<?php echo $id; ?>">
  Nome: <input name="nome" type="text" value="<?php  echo $nome ?>"> <br>
  Especialidade: <input name="especialidade" type="text" value="<?php echo $especialidade ?>"> <br>
  Cidade: <input name="cidade" type="text" value="<?php echo $cidade ?>"> <br>
  Estado: <input name="estado" type="text" value="<?php echo $estado ?>"> <br>
  <button type="submit">Atualizar</button> 
</form>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>