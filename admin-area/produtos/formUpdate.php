<html>
    <head></head>

    <body>
        <h1>Atualizar Registro</h1>
        <form method="post">
        <?php
            include 'conecta.php';
            $id = $_GET["id"];
            $sql = "SELECT * FROM produtos where id=\"$id\"";
            $exec = $pdo->query($sql);
            $regAtualiza = $exec->fetch();
        ?>
            <input type="text" id="nome" name="nome" value="<?php echo $regAtualiza["nome"] ?>" />
            <input type="text" id="valor" name="valor" value="<?php echo $regAtualiza["valor"] ?>" />
            <input type="text" id="tipo" name="tipo" value="<?php echo $regAtualiza["tipo"] ?>" />
            <input type="text" id="capa" name="capa" value="<?php echo $regAtualiza["capa"] ?>" />
            <input type="hidden" id="id" name="id" value="<?php echo $regAtualiza["id"] ?>" />
            <input type="button" id="btn_atualizar" value="Atualizar" />
        </form>
        <div id="resposta"></div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>