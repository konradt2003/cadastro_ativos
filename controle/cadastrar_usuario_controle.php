<?php
include('../modelo/conexao.php');
$nome = $_POST['nome'];
$turma = $_POST['turma'];
$id = $_POST['id'];

$senhaCrip = base64_encode($senha)

$query = "
Update
  usuario
set 
nomeUsuario = '".$nome."',
turmaUsuario = '".$turma."'
novaSenha = '".$nova_senha_hash."'
where
  idUsuario = '".$id."'
  ";

            $result = mysqli_query($conexao, $query) or die(false);
            if($result){
                echo "<script> alert('usuario alterado')
                                window.location.href='../visao/listar_usuarios.php';
                                </script>";
            
            }else{
                echo"<script> alert('Falha na alteração')";
        
                 "window.location.href='../visao/alterar_usuario.php?id_usuario=$id';
                  </script>";        
                  } 
?>
