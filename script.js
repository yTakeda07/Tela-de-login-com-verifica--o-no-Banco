$(document).ready(function(){
    $("button").click(function(){
        var senha = $("#senha").val();
        var nome = $("#nome").val();

        $.ajax({
            url: "oi.php",
            type: "POST",
            data: { nome: nome, senha: senha }, // Enviar os dados como objeto JSON
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
