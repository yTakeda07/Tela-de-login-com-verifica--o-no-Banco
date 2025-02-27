    $(document).ready(function(){
                $.ajax({
                   url: "login.php",
                   type: "POST",
                   data: { acao: "verificar" },
                dataType: "html"
        }).done(function(resp) {
            $("Header").html(resp);
        }).fail(function(jqXHR, textStatus ) {
            console.log("erro");
        }).always(function() {
            console.log("Funfou");
      });
    })


    window.onload = function() {
        $.ajax({
            url: "carregada.php",
            type: "POST",
            data: { acao: "verificar" },
         dataType: "html"
 }).done(function(resp) {
    $(".caixa").html(resp); 
}).fail(function(jqXHR, textStatus) {
    alert("Falha na requisição AJAX: " + textStatus);
}).always(function() {
    console.log("Requisição AJAX registro concluída");
});
    };


    function clicou(botao){
        var nome = $("#NM_PRODUTO").val();
        

        $.ajax({
            url: "cadastro_produto.php",
            type: "POST",
            data: { nome: nome}, 
            dataType: "html"
        }).done(function(resp) {
            $(".caixa").html(resp); 
        }).fail(function(jqXHR, textStatus) {
            alert("Falha na requisição AJAX: " + textStatus);
        }).always(function() {
            console.log("Requisição AJAX registro concluída");
        });
    }

    function apagar(apagado){


        var nome = apagado.className;

        $.ajax({
            url: "excluir_produto.php",
            type: "POST",
            data: { nome: nome}, 
            dataType: "html"
        }).done(function(resp) {
            $(".caixa").html(resp);
        }).fail(function(jqXHR, textStatus) {
            alert("Falha na requisição AJAX: " + textStatus);
        }).always(function() {
            console.log("Requisição AJAX excluir concluída");
        });
    }