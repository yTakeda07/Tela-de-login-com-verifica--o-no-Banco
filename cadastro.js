$(document).ready(function(){
    $("#registo").click(function(){
        var nome = $("#NM_PRODUTO").val();
        

        $.ajax({
            url: "cadastro_produto.php",
            type: "POST",
            data: { nome: nome}, // Enviar os dados como objeto JSON
            dataType: "html"
        }).done(function(resp) {
            $(".caixa").html(resp); // Forma mais simples de modificar o conteúdo da div
        }).fail(function(jqXHR, textStatus) {
            alert("Falha na requisição AJAX: " + textStatus);
        }).always(function() {
            console.log("Requisição AJAX concluída");
        });
    });
});