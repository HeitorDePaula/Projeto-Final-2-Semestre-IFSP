<html>
    <head></head>

    <body>
        <h1>Atualizar Registro</h1>
        <form method="post">
        <?php
            include 'conecta.php';
            $id = $_GET["id"];
            $sql = "SELECT * FROM compras where id=\"$id\"";
            $exec = $pdo->query($sql);
            $regAtualiza = $exec->fetch();
        ?>
            <input type="number" id="id_comprador" name="id_comprador" value="<?php echo $regAtualiza["id_comprador"] ?>" />
            <br/>
            <input type="number" id="id_produto" name="id_produto" value="<?php echo $regAtualiza["id_produto"] ?>" />
            <br/>
            <input type="hidden" id="id" name="id" value="<?php echo $regAtualiza["id"] ?>" />
            <br/>
            <input type="button" id="btn_atualizar" value="Atualizar" />
        </form>
        <div id="resposta"></div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>