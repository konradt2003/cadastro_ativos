<?php
include_once('cabecalho.php');
?>
<body>
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Ativo</h1>
                    <button type="button" onclick= "limpar_modal()"class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-1">
                            <label for="ativo" class="col-form-label">Descrição Ativo</label>
                            <input type="text" class="form-control" id="ativo">
                        </div>
                        <div class="mb-1">
                            <label for="marca" class="col-form-label">Marca</label>
                            <select class="form-select" id="marca">
                                <option selected>Selecione a Marca</option>
                        <?php
                        foreach($marcas as $marca){
                            echo '<option value="'.$marca['idMarca'].'">'.$marca['descricaoMarca'].'</option>';
                        }
                        ?>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="tipo" class="col-form-label">Tipo</label>
                            <select class="form-select" id="tipo">
                                <option selected>Selecione o Tipo</option>
                               <?php
                                foreach ($tipos as $tipo){
                                echo '<option value="'.$tipo['idTipo'].'">'.$tipo['descricaoTipo'].'</option>';
                                }
                                ?>
            
                            </select>
                        </div></div>
                        <div class="mb-1">
                            <label for="observacao" class="col-form-label">Observação Ativo</label>
                            <input type="text" class="form-control" id="observacao">
                            <div class="mb-1">
                            <label for="quantidade" class="col-form-label">Quantidade Ativo</label>
                            <input type="number" class="form-control" id="quantidade">
                        </div>
                        <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button"class="btn btn-primary" id="salvar_info">Salvar</button>
                </div>
                    </form>
                </div>
          
            </div>
        </div>
    </div>
</body>
</html>
