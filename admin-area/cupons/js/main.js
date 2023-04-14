$("#btn_gravar").on("click",function(){
    var txt_codigo = $("#codigo").val();
    var txt_desconto = $("#desconto").val();
    var txt_usos = $("#usos").val();

    $.ajax({
        url: "create.php",
        type: "post",
        data:{
            codigo: txt_codigo, desconto: txt_desconto, usos: txt_usos
        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(e){
        $("#resposta").html("Dados registrado com sucesso...");
    })
})

$("#btn_atualizar").on("click",function(){
    var txt_codigo = $("#codigo").val();
    var txt_desconto = $("#desconto").val();
    var txt_usos = $("#usos").val();
    var txt_id = $("#id").val();

    $.ajax({
        url: "update.php",
        type: "post",
        data:{
            codigo: txt_codigo, desconto: txt_desconto, usos: txt_usos, id: txt_id
        },
        beforeSend : function(){
            $("#resposta").html("Enviando...");
        }
    }).done(function(e){
        $("#resposta").html("Dados atualizado com sucesso...");
        window.location="read.php";
    })
})