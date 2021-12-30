<?php

    //Instanciação de sessões na página.
    session_start();
    if(!isset($_SESSION['login']) && !isset($_SESSION['user'])){
            $_SESSION['user'] = 0;
            $_SESSION['profile'] = ''; 
		}
		
    //Cabeçalho.
	require_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/includes/header.php";
	include_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/app/controller/CProduct.php";


    $controller = new CProduct();

	$list = $controller->listProduct();

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
                    <li class="nav-item active"><a href="product.php" class="nav-link">Produtos</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">Sobre</a></li>
                    <li class="nav-item  "><a href="login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="justify-content-center product-filter-section">

        <div class="container">
            <div class="spad">
                <div class="cart-table ne-half ftco-animate">
                    <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <h2 class="mb-4">Nossos Produtos</h2>
                            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span
                                    class="deg3"></span></p>
                        </div>
                    </div>
                    <table id="list_produtos" class="display">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php

							//Loop para inserção de produtos na tela.

							if (is_array($list) || is_object($list)){
							foreach($list as $item){ 
								?>

                                <td>
                                    <h3><?php echo $item['nome']; ?></h3>
                                </td>
                                <td>
                                    <p class="price"><span>R$
                                            <?php echo str_replace(".",",",number_format($item['preco'], 2)); ?>
                                </td>

                                <?php } } ?>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Arquivos JS -->
    <?php   include_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/includes/footer.php"; ?>


</body>

</html>
