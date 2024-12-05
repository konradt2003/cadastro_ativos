<?php
session_start();
if(isset($_GET['erro']) && $_GET['erro'] == 'sem acesso'){
  echo "<script>alert('Usuário não autenticado');</script>";
}
if(isset($_GET['error_auten']) && $_GET['error_auten'] == 's'){
  echo "<script>alert('Senha ou usuário inválido!');</script>";
}

include_once('../modelo/conexao.php');
include_once('cabecalho.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Para Cadastro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh; font-family: Arial, sans-serif;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg rounded">
                    <div class="card-body p-4">
                        <h2 class="text-center text-primary mb-4">Login de Usuário</h2>
                        
                        <form action="../controle/login_usuario_controle.php" method="post">
                            <div class="form-group mb-3">
                                <label for="usuario" class="form-label">Usuário</label>
                                <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Digite seu usuário" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" name="senha" class="form-control" id="password" placeholder="Digite sua senha" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block w-100">Entrar</button>     
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            border-radius: 10px;
        }
        .form-control {
            border-radius: 8px;
        }
        .btn-primary {
            background-color: #1e1e2f;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #a29bfe;
        }
        .card-body {
            padding: 2rem;
        }
        .text-primary {
            color: #1e1e2f !important;
        }
    </style>
</body>
</html>
