<?php
    session_start();
    if(!isset($_SESSION['login']) && !isset($_SESSION['user'])){
            $_SESSION['user'] = 0;
            $_SESSION['profile'] = ''; 
        }

    //Cabeçalho.
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
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="product.php" class="nav-link">Produtos</a></li>
                    <li class="nav-item active"><a href="about.php" class="nav-link">Sobre</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="justify-content-center d-md-flex">


        <div class="container pad">
            <hr>
            <div class="one-half ftco-animate">
                <div class="cart-table justify-content-center mb-5 pb-3 mt-1 pt-1">
                    <br>
                    <br>
                    <div class="heading-section ftco-animate text-center">
                        <h2 class="mb-4">Sobre a <span>Pin ít UP Locações</span></h2>
                    </div>

                    <p>Boa parte desta aplicação possui um completo sistema de validação e navegação dinâmica,
                        garantindo à
                        base
                        de
                        dados do Pin ít UP a consistência das informações dos usuários cadastrados.</p>
                    <p>A página da Pin ít UP Locações apresenta uma vasta variedades de produtos oferecidos que
                        ficam a sua
                        disposição
                        ,
                        todos são
                        dinamicamente atualizados pelo algoritmo desenvolvido para este site.</p>
                    <p>Faça a locação dos produtos com conforto e segurança, todos os seus dados são protegidos
                        por
                        criptografia
                        de
                        sistema, garantindo sua total confidencialidade.</p>
                </div>
            </div>
    </section>
</body>
<?php
    require_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/includes/footer.php";
?>
