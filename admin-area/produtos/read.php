<?php 
include 'conecta.php';

$sql = "SELECT * FROM produtos";
$exec = $pdo->query($sql);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Produtos</title>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        
    <?php require("../includes/nav.php") ?>

        <div id="content" class="p-4 p-md-5 pt-5">

            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
                <a id="" class="btn btn-primary" href="form.php">
                    <i class="fa fa-user"></i>
                    Adicionar Dados
                </a>

            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Capa</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
            while($reg = $exec->fetch()){
                echo "<tr>";
                echo "<th scope='row'>". $reg["id"] . "</th>";
                echo "<td>". $reg["nome"] . "</td>";
                echo "<td>". $reg["valor"] . "</td>";
                echo "<td>". $reg["tipo"] . "</td>";
                echo "<td>". $reg["capa"] . "</td>";
                echo "<td>" . "
                [<a href=formUpdate.php?id=$reg[id]>Atualizar</a>]" . "</td>";
                echo "<td>" . "[<a href=delete.php?id=$reg[id]>Excluir</a>]" . "</td>";
                echo "</tr>";
            }
        ?>
                </tbody>
            </table>

        </div>



        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
</body>

</html>