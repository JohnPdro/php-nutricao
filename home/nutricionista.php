<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>

<h1>Tabela de Cadastros</h1>

<table border="1">
  <tr>
    <td>Código</td>
    <td>Nome</td>
    <td>Especialidade</td>
    <td>Cidade</td>
    <td>Estado</td>
    <td>Ações</td>
  </tr>
  <?php
  $sql = "select * from t_nutricionista";
  $todos_registros = mysqli_query($conexao, $sql);
  while ($um_registro = mysqli_fetch_assoc($todos_registros)) :
  ?>
    <tr>
      <td><?php echo $um_registro['codigo']; ?></td>
      <td> <?php echo $um_registro['nome']; ?></td>
      <td> <?php echo $um_registro['especialidade']; ?></td>
      <td> <?php echo $um_registro['cidade']; ?></td>
      <td> <?php echo $um_registro['estado']; ?></td>
      <td>
        <a href="../crud/visualizar.php?id=<?php echo $um_registro['codigo']; ?>"><img src="../img/icon-visualizar.png" width="30" alt="Icone de visualizar" title="Visualizar"></a>
        <a href="../crud/editar.php?id=<?php echo $um_registro['codigo']; ?>"><img src="../img/icon-editar.png" width="30" alt="Icone de editar" title="Editar"></a>
        <a href="../crud/deletar.php?id=<?php echo $um_registro['codigo']; ?>"><img src="../img/icon-excluir.png" width="30" alt="Icone de excluir" title="Excluir"></a>
      </td>
    </tr>
  <?php
  endwhile;
  ?>

</table>
<p>
  <a href="novo.php">Adicionar aluno</a>
</p>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>