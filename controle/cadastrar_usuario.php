<?php
include('../modelo/conexao.php');
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$usuario = $_POST['usuario'];
$turma = $_POST['turma'];


$senhaCrip = base64_encode($senha);

$query = "
        INSERT INTO USUARIO (
                              nomeUsuario, 
                              usuario, 
                              senhaUsuario, 
                              turmaUsuario, 
                              dataCadastro
                             )values(
                             '".$nome."',
                             '".$usuario."',
                             '".$senha."',
                             '".$turma."',
                             NOW()
                             )

            ";
            $result = mysqli_query($conexao, $query) or die(false);
            if($result){
                echo "<script> alert('usuario cadastrado')
                                window.location.href='../visao/listar_usuarios.php';
                                </script>";
            
            }else{
                echo"<script> alert('Falha no cadastro')";
        
                 "window.location.href='../controle/cadastrar_usuario.php';
                  </script>";           
                  }  
?>