<?php
include_once('../modelo/conexao.php');
include_once('../controle/funcoes.php');
$usuario = $_POST ['usuario'];
$senha = $_POST['senha'];

$senhaCrip = base64_encode($senha);

$sql = "select 
count(*) as quantidade 
from  
usuario 
where 
usuario= '$usuario' 
and senhaUsuario = '$senhaCrip'";
$result = mysqli_query($conexao, $sql)  or die(false);
$dados = $result ->fetch_all(MYSQLI_ASSOC);
if($dados['quantidade']>0){
    echo 'login permitido';
}else{
    echo 'senha ou usuario invalido ';
}
    echo "<br>";
var_dump($dados);


?>
