<?php
include_once('cabecalho.php');
include_once('menu_superior.php');
?>

<body style="background-color: #f0f2f5; font-family: Arial, sans-serif;">
  <div class="container my-5 d-flex justify-content-center">
    <div class="card p-5 shadow-lg" style="width: 100%; max-width: 500px; border-radius: 15px;">
      <h3 class="text-center mb-4" style="color: #4a4a7d; font-weight: bold;">Cadastro de Usuário</h3>
      
      <form action="../controle/cadastrar_usuario.php" method="POST">
        <div class="mb-4">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" required name="nome" class="form-control" id="nome" placeholder="Coloque seu nome">
        </div>
        
        <div class="mb-4">
          <label for="turma" class="form-label">Turma</label>
          <input type="text" required name="turma" class="form-control" id="turma" placeholder="Coloque sua turma">
        </div>
        
        <div class="mb-4">
          <label for="usuario" class="form-label">Usuário</label>
          <input type="text" required name="usuario" class="form-control" id="usuario" placeholder="Informe seu usuário">
        </div>
        
        <div class="mb-4">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" required name="senha" class="form-control" id="senha" placeholder="Informe sua senha">
        </div>
        
        
        
        <button type="submit" class="btn btn-primary w-100">Salvar</button>
      </form>
    </div>
  </div>

  <style>
    body {
      background-color: #e0e4ec;
    }
    .card {
      background-color: #ffffff;
      border: none;
      border-radius: 15px;
      padding: 2rem;
      box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
    }
    .form-label {
      color: #4a4a7d;
      font-weight: 600;
    }
    .form-control {
      border-radius: 8px;
      border: 1px solid #ced4da;
      transition: border-color 0.3s;
    }
    .form-control:focus {
      border-color: #a29bfe;
      box-shadow: none;
    }
    .form-check-label {
      color: #6c757d;
    }
    .btn-primary {
      background-color: #4a4a7d;
      border: none;
      font-weight: bold;
      font-size: 1rem;
      padding: 0.75rem;
      transition: background-color 0.3s;
    }
    .btn-primary:hover {
      background-color: #a29bfe;
    }
  </style>
</body>
</html>
