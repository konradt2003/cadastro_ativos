<?php
include_once('cabecalho.php');
?>
<body>
  <div class="container">


  <form action="../controle/cadastrar_usuario.php" method="POST">
    <div class="mb-3">
      <label for="nome" class= "form-label" > Nome </label>
      <input type="text" required name = "nome" class="form-control" id="nome"  placeholder="Coloque seu nome">
    </div>
    <div class="mb-3">
      <label for="turma" class = "form-label"> Turma</label>
      <input type="text" required name= "turma" class="form-control" id="turma" placeholder="Coloque sua Turma">
    </div>
    <div class="mb-3">
      <label for="usuario" class = "form-label"> Usuario</label>
      <input type="text" required name = "usuario" class="form-control" id="usuario" placeholder="Informe seu Usuario">
    </div>
    <div class="mb-3">
      <label for="senha" class = "form-label"> Senha</label>
      <input type="text" required name = "senha" class="form-control" id="senha" placeholder="Informe sua Senha">
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Confirma</label>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
  </div>
</body>
</html>
