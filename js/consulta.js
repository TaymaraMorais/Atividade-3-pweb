$(function(){
    // Executa assim que o botão de salvar for clicado
    $('#enviar').click(function(e){
        
        // Cancela o envio do formulário
        e.preventDefault();

        // Pega os valores dos inputs e coloca nas variáveis
        var pet = $('#pet').val();
        var pessoa = $('#pessoa').val();
        var acao = $('#acao').val();

        // Método post do Jquery
        $.post('../controller/PetsController.php', {
            pet:pet,
            pessoa:pessoa,
            acao:acao
        }, function(resposta){
            // Valida a resposta
            if(!alert('Solicitação de consulta aprovada')){window.location.reload();}
        });
        
    });
});