<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <style>
        body {
            background-color: #1e1e2f; 
            color: white;
            text-align: center;
        }
        .navbar {
            background-color: #000000;
            padding: 1rem 2rem;
        }
        .navbar .container-fluid {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .nav-link {
            color: #a29bfe!important; 
            padding: 0.5rem 1.5rem;
            border-radius: 20px;
            transition: color 0.3s, background-color 0.3s;
        }
        .nav-link:hover {
            color: #ffffff;
            background-color: #a29bfe;
        }
        .logout-btn {
            background-color: #d9534f; 
            border: none; 
            color: white; 
            padding: 8px 16px;
            font-size: 16px; 
            cursor: pointer;
            border-radius: 20px;
            transition: background-color 0.3s ease;
        }
        .logout-btn:hover {
            background-color: #c9302c;
        }
        .welcome-message {
            margin-top: 50px;
            font-size: 36px;
            font-weight: bold;
            color: #a29bfe;
            text-shadow: 2px 2px 10px rgba(162, 155, 254, 0.8);
            
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="menu_superior.php"><i class="fas fa-home"></i> Início</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user"></i> Usuário
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cadastro.php">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="listar_usuarios.php">Listar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ativos.php"><i class="fas fa-box"></i> Ativo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movimentacoes.php"><i class="fas fa-exchange-alt"></i> Movimentação</a>
                    </li>
                </ul>
            </div>
            <form action="login.php" method="post" class="ms-auto">
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </nav>

    <div class="welcome-message">
        BEM VINDOS
     
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
