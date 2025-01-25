<?php
ini_set('display_errors', 1);
error_reporting(E_ERROR);
    
include('../modelo/conexao.php');
include('controle_session.php');

$tipo = $_POST['tipo'];
$user = $_SESSION['id_user'];
$acao = $_POST['acao'];
$idTipo = $_POST['idTipo'];
$statusTipo = $_POST['status'];

if($acao =='inserir'){
$query = "
        insert into tipo (
                              descricaoTipo, 
                              statusTipo, 
                              dataCadastro,
                              usuarioCadastro
                             )values(
                             '".$tipo."',
                             'S',
                             NOW(),
                             '".$user."'
                             )

            ";
            $result = mysqli_query($conexao, $query) or die(false);
            if($result){
                echo "cadastro realizado";
            }
        }
        if($acao=='alterar_status'){
         $sql = "
            Update tipo set statusTipo = '$statusTipo' where idTipo = $idTipo
            ";
            $result = mysqli_query($conexao, $sql) or die(false);
            if($result){
                echo "tipo alterada";
            }
        }
        if($acao=='get_info'){
            $sql = "
            Select 
            descricaoTipo
                        
                            
                            
                              
                             
                              from 
                              tipo
                              where
                              idTipo  = $idTipo 
            ";
            $result = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
$tipo = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($tipo);
exit();
        }
        if($acao == "update"){
            $sql = "
            Update tipo set 
            descricaoTipo='$tipo'
            where idTipo = $idTipo
            ";
            $result = mysqli_query($conexao, $sql) or die(false);
            if($result){
                echo "informações alteradas";
        }
    }

        
?>