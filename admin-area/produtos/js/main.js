$("#btn_gravar").on("click",function(){
    var txt_nome = $("#nome").val();
    var txt_valor = $("#valor").val();
    var txt_tipo = $("#tipo").val();
    var txt_capa = $("#capa").val();

    $.ajax({
        url: "create.php",
        type: "post",
        data:{
            nome: txt_nome, valor: txt_valor, capa: txt_capa, tipo: txt_tipo
        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(e){
        $("#resposta").html("Dados registrado com sucesso...");
    })
})

$("#btn_atualizar").on("click",function(){
    var txt_nome = $("#nome").val();
    var txt_valor = $("#valor").val();
    var txt_tipo = $("#tipo").val();
    var txt_capa = $("#capa").val();
    var txt_id = $("#id").val();

    $.ajax({
        url: "update.php",
        type: "post",
        data:{
            nome: txt_nome, valor: txt_valor, capa: txt_capa, tipo: txt_tipo, id: txt_id
        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(e){
        $("#resposta").html("Dados atualizado com sucesso...");
        window.location="read.php";
    })
})