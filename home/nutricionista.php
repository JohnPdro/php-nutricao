<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>

<h1 class="p-5">Tabela de Cadastros</h1>

<div class="container">
  <table class="table">
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
        <td> <?php echo $um_registro['codigo']; ?></td>
        <td> <?php echo $um_registro['nome']; ?></td>
        <td> <?php echo $um_registro['especialidade']; ?></td>
        <td> <?php echo $um_registro['cidade']; ?></td>
        <td> <?php echo $um_registro['estado']; ?></td>
        <td>
          <a class="p-2" href="../crud/visualizar.php?id=<?php echo $um_registro['codigo']; ?>"><img src="../img/icon-visualizar.png" width="30" alt="Icone de visualizar" title="Visualizar"></a>
          <a class="p-2" href="../crud/editar.php?id=<?php echo $um_registro['codigo']; ?>"><img src="../img/icon-editar.png" width="30" alt="Icone de editar" title="Editar"></a>
          <a class="p-2" href="../crud/deletar.php?id=<?php echo $um_registro['codigo']; ?>"><img src="../img/icon-excluir.png" width="30" alt="Icone de excluir" title="Excluir"></a>
        </td>
      </tr>
    <?php
    endwhile;
    ?>
  
  </table>
</div>
<p class="text-center">
  <a href="../crud/novo.php"><button class="botao-cadastro">Novo Cadastro</button></a>
</p>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>