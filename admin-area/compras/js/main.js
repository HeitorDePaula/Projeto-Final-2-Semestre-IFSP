$("#btn_gravar").on("click",function(){
    var txt_id_produto = $("#id_produto").val();
    var txt_id_comprador = $("#id_comprador").val();

    $.ajax({
        url: "create.php",
        type: "post",
        data:{
            id_produto: txt_id_produto, id_comprador: txt_id_comprador
        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(e){
        $("#resposta").html("Dados registrado com sucesso...");
    })
})

$("#btn_atualizar").on("click",function(){
    var txt_id_produto = $("#id_produto").val();
    var txt_id_comprador = $("#id_comprador").val();
    var txt_id = $("#id").val();

    $.ajax({
        url: "update.php",
        type: "post",
        data:{
            id_produto: txt_id_produto, id_comprador: txt_id_comprador, id: txt_id
        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(e){
        $("#resposta").html("Dados atualizado com sucesso...");
        window.location="read.php";
    })
})