<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Compra</title>
</head>

<body>
    <div class="container">
    <form method="post" action="">
        <div class="form-group">
            <label for="id_comprador">Id do Cliente</label>
                <input type="number" class="form-control" id="id_comprador" name="id_comprador" placeholder="Digite o Id" />
        </div>
        <div class="form-group">
            <label for="id_produto">Id do Produto</label>
                <input type="number" class="form-control" id="id_produto" name="id_produto" placeholder="Digite o Id" />
        </div>
        <input type="button" class="btn btn-primary" id="btn_gravar" value="Salvar" />
    </form>
    <p>Deseja ver seus dados?<a href="read.php">Voltar</a></p>
    </div>
    <div id="resposta"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>