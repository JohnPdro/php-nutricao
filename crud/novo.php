<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>

<h1>Registro</h1>
<p>Insira algumas informações pessoais!</p>
<form action="inserir.php" method="post">
  Nome: <input type="text" name="nome" maxlength="100" required>
  <br>
  Especialidade: <input type="text" name="especialidade" maxlength="50" required>
  <br>
  Cidade: <input type="text" name="cidade" maxlength="100" required>
  <br>
  Estado: <input type="text" name="estado" maxlength="2" required>
  <br>
  <button type="submit">Salvar</button>
</form>
<?php
include"../includes/rodape.php";
?>