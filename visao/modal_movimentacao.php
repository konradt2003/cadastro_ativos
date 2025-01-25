<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #1a1a2e; color: white;">
                <div class="modal-header" style="border-bottom: 1px solid #6a0dad;">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Ativo</h1>
                    <button type="button" onclick="limpar_modal()" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-1">
                            <label for="ativo" class="col-form-label">Ativo</label>
                            <input type="text" class="form-control" id="ativo" style="background-color: #0f0f1a; color: white; border: 1px solid #6a0dad;">
                        </div>
                        <div class="mb-1">
                            <label for="movimentacoes" class="col-form-label">Tipo de Movimentação</label>
                            <select class="form-select" id="movimentacoes" style="background-color: #0f0f1a; color: white; border: 1px solid #6a0dad;">
                                <option selected>Selecione</option>
                                <?php
                                foreach($marcas as $marca){
                                    echo '<option value="'.$marca['idMarca'].'">'.$marca['descricaoMarca'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="tipo" class="col-form-label">Tipo</label>
                            <select class="form-select" id="tipo" style="background-color: #0f0f1a; color: white; border: 1px solid #6a0dad;">
                                <option selected>Selecione o Tipo</option>
                                <?php
                                foreach ($tipos as $tipo){
                                    echo '<option value="'.$tipo['idTipo'].'">'.$tipo['descricaoTipo'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="observacao" class="col-form-label">Observação Ativo</label>
                            <input type="text" class="form-control" id="observacao" style="background-color: #0f0f1a; color: white; border: 1px solid #6a0dad;">
                        </div>
                        <div class="mb-1">
                            <label for="quantidade" class="col-form-label">Quantidade Ativo</label>
                            <input type="number" class="form-control" id="quantidade" style="background-color: #0f0f1a; color: white; border: 1px solid #6a0dad;">
                        </div>
                        <div class="modal-footer" style="border-top: 1px solid #6a0dad;">
                            <button type="button" class="btn" style="background-color: #6a0dad; color: white;" data-bs-dismiss="modal">Fechar</button>
                            <button type="button" class="btn" style="background-color: #4b0082; color: white;" id="salvar_info">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
