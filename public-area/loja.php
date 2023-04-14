
<?php 
include '../admin-area/produtos/conecta.php';

$sql = "SELECT * FROM produtos";
$exec = $pdo->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8daf48c5da.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!-- Google Fonts - Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- CSS do projeto -->
    <link rel="stylesheet" href="assets/css/loja.css">
    <title>Nexus Tech - Loja</title>
</head>

<body>
    <body>
        <nav class="navbar navbar-expand-lg  bg-primary-color" id="navbar">
            <div class="container py-3">
                <a href="index.html" class="navbar-brand primary-color">
                    <img src="img/logo2.png" alt="Nexus" title="Nexus Tech">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-items"
                    aria-controls="navbar-items" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-list-ul"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbar-items">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="index.html" id="nav-link" class="nav-link">Inicio</a>
                        </li>
    
                        <li class="nav-item">
                            <a href="loja.php" class="nav-link active" aria-current="page">Loja</a>
                        </li>
    
                        <li class="nav-item">
                            <a href="termos.html" class="nav-link">Termos</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Login">
                                <span>
                                    <i class="fa-solid fa-user"></i>
                                </span>
                            </a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Carrinho">
                                <span>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>    


    <div class="container">
        
        <div class="header-path">
            <div>
                <h1 class="brand-text">Loja Oficial</h1>
            </div>
        </div>


        <div class="row all-store-cards">

            <div class="col-md-12">
                <div class="row">
                    <?php
                                    while($reg = $exec->fetch()){
                                        echo '<div class="col-md-4">';
                                        echo '<div class="card_body">';
                                        echo '<div class="card_header">';
                                        echo '<img src="'. $reg["capa"] .'"
                                        alt="product_image" class="product_image">';
                                        echo '</div>';
                                        echo '<div class="card-content">';
                                        echo '<h1>'. $reg["nome"] .'</h1>';
                                        echo '<h2>Tipo: '. $reg["tipo"] .'</h2>';
                                        echo '<h3>'. $reg["valor"] .'</h3>';
                                        echo '<div class="btn-settings">';
                                        echo '<a href="" class="link-cherry"><button
                                        type="button">Comprar</button></a>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center text-lg-start text-white" style="background-color: #161616">
        <div class="text-center p-3" style="background-color: #161616">
            <p class="secondary-color">NexusTech &copy; 2022</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>