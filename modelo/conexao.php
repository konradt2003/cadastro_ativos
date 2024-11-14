<?php
//conexao com o banco de dados
$conexao = mysqli_connect('localhost', 'root', '', 'patrimonio');//hostname, username, senha, banco de dados

if(!$conexao){
    echo "falha na conexão";
    exit();
}
?>