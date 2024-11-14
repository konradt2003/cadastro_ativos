<?php

include_once('../modelo/conexao.php');
include_once('../controle/funcoes.php');

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $senha_atual = $_POST['senha_atual'];
    $nova_senha = $_POST['nova_senha'];
    $confirmar_senha = $_POST['confirmar_senha'];
    $id_usuario = $_SESSION['id_usuario'];

    if ($nova_senha !== $confirmar_senha) {
        $erro = "A nova senha e a confirmação não coincidem.";
    } else {

        $usuario = busca_usuario_por_id($conexao, $id_usuario);

        if (password_verify($senha_atual, $usuario['senha'])) {
            
            $nova_senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);
            $sucesso = atualiza_senha_usuario($conexao, $id_usuario, $nova_senha_hash); 

            if ($sucesso) {
                $mensagem = "Senha alterada com sucesso!";
            } else {
                $erro = "Erro ao atualizar a senha. Tente novamente mais tarde.";
            }
        } else {
            $erro = "A senha atual está incorreta.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Alterar Senha</h2>

    <?php if (isset($erro)): ?>
        <div class="alert alert-danger"><?php echo $erro; ?></div>
    <?php endif; ?>

    <?php if (isset($mensagem)): ?>
        <div class="alert alert-success"><?php echo $mensagem; ?></div>
    <?php endif; ?>

    <form method="POST" action="">
        <div class="form-group">
            <label for="senha_atual">Senha Atual</label>
            <input type="password" class="form-control" id="senha_atual" name="senha_atual" required>
        </div>
        <div class="form-group">
            <label for="nova_senha">Nova Senha</label>
            <input type="password" class="form-control" id="nova_senha" name="nova_senha" required>
        </div>
        <div class="form-group">
            <label for="confirmar_senha">Confirmar Nova Senha</label>
            <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Alterar Senha</button>
    </form>
</div>
</body>
</html>
