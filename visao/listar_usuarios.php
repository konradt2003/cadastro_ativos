<?php
include_once('../controle/controle_session.php');
include_once('../modelo/conexao.php');
include_once('../controle/funcoes.php');

$info_bd = busca_info_bd($conexao, 'usuario');

include('cabecalho.php');
include_once('menu_superior.php');
$eh_admin = $_SESSION['admin'];
//var_dump ($eh_admin);


?>


<header 
style="background-color:rgb(45, 4, 121); color: #fff; padding: 10px; display: flex; justify-content: space-between; align-items: center;">
    <h2 class="m-0" style="text-align: center; flex-grow: 1;">Lista de Usuários</h2>
</header>

<body style="background-color:rgb(94, 41, 110); font-family: Arial, sans-serif;">
    <div class="container my-5">
        <div class="card shadow-lg border-0">
            <div class="card-body p-4">
            <table class="table table-striped-columns">

                    <thead>
                        <tr style="background-color: #3e3f5e; color: #fff;">
                            <th scope="col" class="py-3">Nome</th>
                            <th scope="col" class="py-3">Usuário</th>
                            <th scope="col" class="py-3">Turma</th>
                            <?php if ($eh_admin) { ?>
                                <th scope="col" class="py-3">Ações</th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($info_bd as $user) { ?>
                            <tr class="table-row">
                                <td><?php echo $user['nomeUsuario']; ?></td>
                                <td><?php echo $user['usuario']; ?></td>
                                <td><?php echo $user['turmaUsuario']; ?></td>
                                <?php if ($eh_admin=="S") { ?>
                                    <td>
                                        <a href="alterar_usuario.php?id_usuario=<?php echo $user['idUsuario']; ?>" class="btn btn-warning btn-sm">Editar</a>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
