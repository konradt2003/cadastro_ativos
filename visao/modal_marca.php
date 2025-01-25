<?php
include_once('cabecalho.php');
?>
<body>
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Marca </h1>
                    <button type="button" onclick= "limpar_modal()"class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-1">
                            <label for="marca" class="col-form-label">Descrição Marca</label>
                            <input type="text" class="form-control" id="marca">
                            <input type="hidden" class="form-control" id="idMarca">
                        </div>

                        <button type="button" class="btn btn-secundary"> Fechar </button>
                        <button type="button" class="btn btn-primary salvar"> Salvar </button>
                        
                    </form>
                </div>
          
            </div>
        </div>
    </div>
</body>
</html>
