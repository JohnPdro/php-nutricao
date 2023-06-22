<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>

<h1>Tabela de Cadastros</h1>

<table>
  <tr>
    <td>Código</td>
    <td>Nome</td>
    <td>Especialidade</td>
    <td>Cidade</td>
    <td>Estado</td>
  </tr>
  <?php
  $sql = "select * from t_nutricionista";
  $todos_registros = mysqli_query($conexao, $sql);
  while ($um_registro = mysqli_fetch_assoc($todos_registros))
</table>