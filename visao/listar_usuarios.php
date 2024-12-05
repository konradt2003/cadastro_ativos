<?php
// Inclui os arquivos necessários para a sessão e conexão com o banco de dados.
include_once('../controle/controle_session.php');
include_once('../modelo/conexao.php');
include_once('../controle/funcoes.php');

// Busca as informações de usuários no banco de dados.
$info_bd = busca_info_bd($conexao, 'usuario');

// Inclui o cabeçalho e o menu superior da página.
include('cabecalho.php');
include_once('menu_superior.php');
?>

<!-- Cabeçalho com título e botão de logout -->
<header style="background-color: #3e3f5e; color: #fff; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
    <h2 class="m-0" style="text-align: center; flex-grow: 1;">Lista de Usuários</h2>
</header>

<body style="background-color: #f4f6f9; font-family: Arial, sans-serif;">
    <div class="container my-5">
        <div class="card shadow-lg border-0">

            <!-- Corpo do card contendo a tabela de usuários -->
            <div class="card-body p-4">
                <table class="table table-borderless text-center align-middle">
                    <thead>
                        <!-- Cabeçalho da tabela com colunas para Nome, Usuário e Turma -->
                        <tr style="background-color: #3e3f5e; color: #fff;">
                            <th scope="col" class="py-3">Nome</th>
                            <th scope="col" class="py-3">Usuário</th>
                            <th scope="col" class="py-3">Turma</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($info_bd as $user) { ?>
                            <!-- Laço que cria uma linha para cada usuário do banco de dados -->
                            <tr class="table-row">
                                <td>
                                    <!-- Link para alterar o usuário ao clicar no nome -->
                                    <a href="alterar_usuario.php?id_usuario=<?php echo $user['idUsuario']; ?>" class="text-decoration-none text-dark fw-semibold">
                                        <?php echo $user['nomeUsuario']; ?> 
                                    </a>
                                </td>
                                <td>
                                    <!-- Link para alterar o usuário ao clicar no nome de usuário -->
                                    <a href="alterar_usuario.php?id_usuario=<?php echo $user['idUsuario']; ?>" class="text-decoration-none text-dark">
                                        <?php echo $user['usuario']; ?> 
                                    </a>
                                </td>
                                <td>
                                    <!-- Link para alterar o usuário ao clicar na turma -->
                                    <a href="alterar_usuario.php?id_usuario=<?php echo $user['idUsuario']; ?>" class="text-decoration-none text-dark">
                                        <?php echo $user['turmaUsuario']; ?> 
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        /* Define a cor de fundo padrão */
        body {
            background-color: #f0f2f5;
        }
        /* Estilos do card, com bordas arredondadas e sombra */
        .card {
            border-radius: 12px;
            overflow: hidden;
        }
        /* Estilo do cabeçalho do card */
        .card-header {
            font-weight: 600;
            background-color: #3e3f5e;
            color: #ffffff;
        }
        /* Define que a tabela não possui bordas e aplica um fundo branco */
        .table {
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        }
        /* Efeito hover na linha da tabela */
        .table-row {
            transition: background-color 0.3s ease;
        }
        /* Alteração de cor ao passar o mouse sobre uma linha */
        .table-row:hover {
            background-color: #f8f9fc;
        }
        /* Estilo dos links da tabela */
        .text-dark {
            color: #3e3f5e !important;
        }
        /* Cor de destaque para links ao passar o mouse */
        .text-dark:hover {
            color: #6f73d2 !important;
        }
    </style>
</body>
</html>
