$(document).ready(function () {
    $(".salvar").click(function () {
 
        let marca = $("#marca").val();
      
        let idMarca =  $("#idMarca").val();
if(idMarca==""){
    acao= 'inserir';
}else{
    acao='update';
}
        $.ajax({
            type: 'POST',
            url: "../controle/marcas_controller.php",
            data: {
                acao: acao,
                marca: marca,
                idMarca:idMarca
            },
            success: function(result) {
                alert(result);  
               location.reload(); 
            }});
            });
        });
        function muda_status(status,idMarca){
            
        $.ajax({
            type: 'POST',
            url: "../controle/marcas_controller.php",
            data: {
                acao: 'alterar_status',
                status: status,
                idMarca: idMarca
            },
            success: function (result) {
                console.log(result);
               alert(result);  
          location.reload(); 
            }
        });

            }

            function editar (idMarca){
                $('#idMarca').val(idMarca);
                $.ajax({
                    type: 'POST',
                    url: "../controle/marcas_controller.php",
                    data: {
                        acao: 'get_info',

                        idMarca: idMarca
                    },
                    success: function (result) {

                retorno=JSON.parse(result)

                $('#btn_modal').click();
                $("#idMarca").val(idMarca);
                $('#marca').val(retorno[0]['descricaoMarca']);


                        


                       console.log(result);
                    }
                });
            



            }
            function limpar_modal(){
                
          
                $("#marca").val('');
                $("#idMarca").val('');
          

            }

      
        