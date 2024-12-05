<?php
include_once('../controle/funcoes.php');
include_once("../modelo/conexao.php");
include_once('../controle/controle_session.php');
include_once('cabecalho.php');
include_once('menu_superior.php');

$marcas = busca_info_bd($conexao, "marca");
$tipos = busca_info_bd($conexao, "tipo");
$sql = "SELECT 
    idAtivo,
    descricaoAtivo,
    quantidadeAtivo,
    statusAtivo,
    observacaoAtivo,
    (SELECT descricaoMarca FROM marca m WHERE m.idMarca = a.idMarca) as marca,
    (SELECT descricaoTipo FROM tipo t WHERE t.idTipo = a.idTipo) as tipo,
    (SELECT usuario FROM usuario u WHERE u.idUsuario = a.usuarioCadastro) as usuario,
    dataCadastro
FROM ativo a";

$result = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
$ativos_bd = $result->fetch_all(MYSQLI_ASSOC);
?>
<script src ="../js/ativos.js"></script>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ativos</title>
    <style>
        body {
            background-color: ##6a0dad;;
            font-family: Arial, sans-serif;
        }

        .btn-modal {
            margin: 20px 0 0 10px;
            padding: 10px 15px;
            background-color: #6a0dad;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-modal:hover {
            background-color: #4b0082;
        }
       .acoes {display: flex;justify-content: space-between;
       }
        .container {
            margin: 20px auto;
            max-width: 1400px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        .table th {
            background-color: ##6a0dad;;
            color: ;
            padding: 10px;
        }

        .table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .table tr:hover {
            background-color: ##6a0dad;;
        }
    </style>
   
</head>
<body>
 
    <button 
        type="button" 
        id="btn_modal"
        onclick="limpar_modal()"
        class="btn-modal" 
        data-bs-toggle="modal" 
        data-bs-target="#exampleModal"
    >
        ABRIR MODAL
    </button>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Observação</th>
                    <th> Data Cadastro</th>
                    <th> Usuario Cadastro </th>
                    <th> Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ativos_bd as $ativo): ?>
                    <tr>
                        <td><?= $ativo['descricaoAtivo']; ?></td>
                        <td><?= $ativo['quantidadeAtivo']; ?></td>
                        <td><?= $ativo['tipo']; ?></td>
                        <td><?= $ativo['marca']; ?></td>
                        <td><?= $ativo['observacaoAtivo']; ?></td>
                        <td><?= $ativo['dataCadastro']; ?></td>
                        <td><?= $ativo['usuario']; ?></td>
                        <?php 
    $dataCadastro = $ativo['dataCadastro']; 
    echo date('d/m/Y H:i:s', strtotime($dataCadastro)); 
    ?>
                        <td> <div class="acoes" >

                        <div class="edit" onclick="editar('<?php echo $ativo['idAtivo']; ?>')">
                        <i class="bi bi-pencil-square"></i>
                        </div>
                        <div class ="muda_status">
                        <?php
                        if($ativo['statusAtivo']=="S"){
                            ?>
                            <div class="inativo" onclick="muda_status('N','<?php echo $ativo['idAtivo']; ?>')">
                            <i class="bi bi-toggle-on"></i>

                            </div>
          
                            <?php
                        }else{
                            ?>
                            <div class = "ativo" onclick="muda_status('S','<?php echo $ativo['idAtivo']; ?>')">
                            <i class="bi bi-toggle-off"></i>
                        </div>
                      
                        <?php
                        }
                        
                        ?>
                     </div>
                     </div>
                     </td>
                    </tr>
                    
                <?php endforeach; ?>
            </tbody>
        </table>
        <input type = "hidden" id="idAtivo" value="">
    </div>
<?php include_once('modal_ativos.php');?>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>