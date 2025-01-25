<?php
include_once('../controle/controle_session.php');
include_once('../controle/funcoes.php');
include_once('../modelo/conexao.php');
$tipos = busca_info_bd($conexao, "tipo");
$title="Tipo";
include_once('menu_superior.php');
include_once('cabecalho.php');
?>
<style>
    .btn-modal {
        background: #6a0dad; color: white; border: none; padding: 10px 20px; 
        border-radius: 5px; cursor: pointer; 
    }
    .btn-modal:hover { background: #5a0cad; transform: scale(1.05); }
    .btn-modal:active { transform: scale(0.95); }
    
</style>
<script src="../js/tipo.js"></script>
<body>
    <div class="container">
        <div class="d-flex">
        <h1 class = "ml-5">Tipos</h1>
        <button 
        type="button" 
        id="btn_modal"
        onclick="limpar_modal()"
        class="btn-modal" 
        data-bs-toggle="modal" 
        data-bs-target="#exampleModal"
    >
        Cadastrar Tipo
    </button>

<div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th> Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipos as $tipo){  ?>
                    <tr>
                        <td><?= $tipo['descricaoTipo']; ?></td>       
                        <td> <div class="acoes" >
                 <div class="edit" onclick="editar('<?php echo $tipo['idTipo']; ?>')">
                        <i class="bi bi-pencil-square"></i>
                        </div>
                        <div class ="muda_status">
                        <?php
                        if($tipo['statusTipo']=="S"){
                            ?>
                            <div class="inativo" onclick="muda_status('N','<?php echo $tipo['idTipo']; ?>')">
                            <i class="bi bi-toggle-on"></i>
                            </div>
                            <?php
                        }else{
                            ?>
                            <div class = "ativo" onclick="muda_status('S','<?php echo $tipo['idTipo']; ?>')">
                            <i class="bi bi-toggle-off"></i>
                        </div>
                        <?php
                        }
                        ?>
                     </div>
                     </div>
                     </td>
                    </tr>
                    
                    
                <?php } ?>
            </tbody>
        </table>
        <input type = "hidden" id="idTipo" value="">
        
    </div>
  
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</div>

    
        </div>
        <?php
        include_once('modal_tipo.php');
        ?>
    
</div>




</body>
