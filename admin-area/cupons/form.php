<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cupons</title>
</head>

<body>
    <div class="container">
    <form method="post" action="">
        <div class="form-group">
            <label for="codigo">Código</label>
                <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Digite o codigo" />
        </div>
        <div class="form-group">
            <label for="desconto">Desconto</label>
            <input type="text"  class="form-control" id="desconto" name="desconto" placeholder="Digite a %" />
        </div>
        <div class="form-group">
            <label for="usos">Usos</label>
            <input type="number" class="form-control" id="usos" name="usos" placeholder="Digite a Quantidade de Usos">
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