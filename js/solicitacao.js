$(function(){
    // Executa assim que o botão de salvar for clicado
    $('#confirmar').click(function(e){
        
        // Cancela o envio do formulário
        e.preventDefault();

        // Pega os valores dos inputs e coloca nas variáveis
        var idNovo = $('#novo').val();
        var idPet = $('#idPet').val();
        var action = $('#action').val();

        // Método post do Jquery
        $.post('../controller/PetsController.php', {
            idPet:idPet,
            novo:idNovo,
            action: action
        }, function(resposta){
            // Valida a resposta
                if(!alert('Atendimento realizado com sucesso')){window.location.reload();}
            }
                
            
        });
        
});