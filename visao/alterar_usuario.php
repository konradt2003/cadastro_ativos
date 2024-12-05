
<?php
include_once('../controle/controle_session.php');
include_once('../modelo/conexao.php');
include_once('../controle/funcoes.php');
$usuario_altera = $_GET['id_usuario'];
$info_bd = busca_info_bd($conexao, 'usuario', 'idUsuario', $usuario_altera);
foreach($info_bd as $user){
    $nome = $user['nomeUsuario'];
    $turma = $user['turmaUsuario'];
    $id_user = $user['idUsuario'];

}
include_once('cabecalho.php')
?> 

<body> <!-- corpo da pagina -->
  <div class="container">
  <form action="../controle/alterar_usuario_controle.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $id_user?>"> 
    <div class="mb-3">
      <label for="nome" class= "form-label" > Nome </label>
      <input type="text" class="form-control" id="nome" name="nome" required placeholder = "Coloque seu nome" value="<?php echo $nome ?>">
    </div>
    <div class= "mb-3">
      <label for= "turma" class = "form-label"> Turma </label>
      <input type= "text" class = "form-control" id="turma" name="turma"  required placeholder = "Informe sua Turma" value="<?php echo $turma?>">
    </div>
<button type="submit" class="btn btn-primary"> Salvar </button>
  </form> 
  </div>
</body> 
</html>
