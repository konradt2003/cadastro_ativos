<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Para Cadastro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="bg-white p-4 rounded shadow-sm">
                    <h2 class="text-center text-primary mb-4">Usuário</h2>
                    
                    <form action = "../controle/login_usuario.php" method="post">
                        <div clasqs="form-group">
                            <label for="name">Usuário</label>
                            <input type="text" name = "usuario" class="form-control" id="usuario" placeholder="Digite seu Usuario" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" name="senha" class="form-control" id="password" placeholder="Digite sua senha" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>     
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
