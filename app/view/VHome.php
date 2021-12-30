<?php

    //Instanciação de sessões na página
    session_start();
    if(!isset($_SESSION['login']) && !isset($_SESSION['user'])){
            $_SESSION['user'] = 0;
            $_SESSION['profile'] = ''; 
        }
    //Cabeçalho do index
    require_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/includes/header.php";
    
?>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <img src="images/logo.png" alt="logo" class="img">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="product.php" class="nav-link">Produtos</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">Sobre</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="home-slider owl-carousel">

        <div class=" slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 ftco-animate">
                        <span class="subheading">Pin ít UP Locações</span>
                        <h1 class="mb-4">As melhores locações do Brasil...</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text align-items-center" data-scrollax-parent="true">
                    <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
                        <span class="subheading">Pin ít UP Locações</span>
                        <h1 class="mb-4">Os melhores e mais acessíveis preços...</h1>
                    </div>
                    <div class="col-md-6 ftco-animate">
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <span class="subheading">Pin ít UP Locações</span>
                        <h1 class="mb-4">Clique e faça tudo com conforto!!!</h1>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Arquivos JS -->
    <?php   include_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/includes/footer.php"; ?>


</body>

</html>
