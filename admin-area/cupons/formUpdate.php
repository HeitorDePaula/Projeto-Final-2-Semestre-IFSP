<html>
    <head></head>

    <body>
        <h1>Atualizar Registro</h1>
        <form method="post">
        <?php
            include 'conecta.php';
            $id = $_GET["id"];
            $sql = "SELECT * FROM cupons where id=\"$id\"";
            $exec = $pdo->query($sql);
            $regAtualiza = $exec->fetch();
        ?>
            <input type="text" id="codigo" name="codigo" value="<?php echo $regAtualiza["codigo"] ?>" />
            <br/>
            <input type="text" id="desconto" name="desconto" value="<?php echo $regAtualiza["desconto"] ?>" />
            <br/>
            <input type="text" id="usos" name="usos" value="<?php echo $regAtualiza["usos"] ?>" />
            <input type="hidden" id="id" name="id" value="<?php echo $regAtualiza["id"] ?>" />
            <br/>
            <input type="button" id="btn_atualizar" value="Atualizar" />
        </form>
        <div id="resposta"></div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>