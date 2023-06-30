<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<div class="container fundo-form-novo mb-5">
  <div class="text-center pt-3 mb-2">
    <h1>Registro</h1>
    <p>Insira algumas informações pessoais!</p>
  </div>
  <form action="inserir.php" method="post">
    <div class="row m-auto">
      <div class="col-5 m-5">
        <label for="nome" class="form-label fonte-form-novo">Nome:</label>
        <input class="form-control" type="text" name="nome" id="nome" maxlength="100" required>
      </div>
      <div class="col-5 m-5">
        <label class="form-label fonte-form-novo" for="especialidade">Especialidade:</label>
        <input class="form-control" type="text" name="especialidade" id="especialidade" maxlength="50" required>
      </div>
      <div class="col-5 m-5">
        <label class="form-label fonte-form-novo" for="cidade">Cidade:</label>
        <input class="form-control" type="text" name="cidade" id="cidade" maxlength="100" required>
      </div>
      <div class="col-5 m-5">
        <label class="form-label fonte-form-novo" for="estado">Estado:</label>
        <input class="form-control " type="text" id="estado" name="estado" maxlength="2" required>
      </div>
      <button class="botao-form-novo  w-25 m-auto mb-5 p-2" type="submit">Salvar</button>
    </div>
  </form>
</div>
<?php
include "../includes/rodape.php";
?>