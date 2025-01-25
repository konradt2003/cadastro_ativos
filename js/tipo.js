$(document).ready(function () {
    $(".salvar").click(function () {
 
        let tipo = $("#tipo").val();
      
        let idTipo =  $("#idTipo").val();
if(idTipo==""){
    acao= 'inserir';
}else{
    acao='update';
}
        $.ajax({
            type: 'POST',
            url: "../controle/tipo_controller.php",
            data: {
                acao: acao,
                tipo: tipo,
                idTipo:idTipo
            },
            success: function(result) {
                alert(result);  
               location.reload(); 
            }});
            });
        });
        function muda_status(status,idTipo){
            
        $.ajax({
            type: 'POST',
            url: "../controle/tipo_controller.php",
            data: {
                acao: 'alterar_status',
                status: status,
                idTipo: idTipo
            },
            success: function (result) {
                console.log(result);
               alert(result);  
          location.reload(); 
            }
        });

            }

            function editar (idTipo){
                $('#idTipo').val(idTipo);
                $.ajax({
                    type: 'POST',
                    url: "../controle/tipo_controller.php",
                    data: {
                        acao: 'get_info',

                        idTipo: idTipo
                    },
                    success: function (result) {

                retorno=JSON.parse(result)

                $('#btn_modal').click();
                $("#idTipo").val(idTipo);
                $('#tipo').val(retorno[0]['descricaoTipo']);


                        


                       console.log(result);
                    }
                });
            



            }
            function limpar_modal(){
                
          
                $("#tipo").val('');
                $("#idTipo").val('');
          

            }

      
        