<?php
    session_start();
    if(!isset($_SESSION['login']) && !isset($_SESSION['user'])){
            $_SESSION['user'] = 0;
            $_SESSION['profile'] = ''; 
        }
        
    //Cabeçalho.
    include_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/includes/header.php";

    //Arquivo para validação dos dados inseridos pelo usuário via PHP.
    include_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/app/controller/CUser.php";
    
    if(isset($_SESSION['logou'])){
        header('Location: index.php');
    }
    
    
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
                    <li class="nav-item"><a href="about.php" class="nav-link">Sobre</a></li>
                    <li class="nav-item  active"><a href="login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="justify-content-center d-md-flex">

        <div>
            <hr>
            <div class="container ">
                <div class="one-half ftco-animate">
                    <div class="cart-table justify-content-center text-center">
                        <br>
                        <div class="heading-section ftco-animate ">
                            <h2 class="mb-4"><span>Pin ít UP Locações</span></h2>
                        </div>
                        <div class="form">
                            <form action="" autocomplete="off" id="formlog" name="formlog" method="post"
                                class="contact-form">
                                <div class="row justify-content-center">
                                    <div class="col-md-13">
                                        <div class="form-group">
                                            <input type="search" class="form-control" id="iLogin" name="log"
                                                value="<?php if(isset($_POST['log'])){ echo $_POST['log'];}else{ echo '';} ?>"
                                                placeholder="Login" required>
                                            <label id="errLog"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-13">
                                        <div class="form-group">
                                            <input autocomplete="new-password" type="password" class="form-control"
                                                id="iPassword" name="password"
                                                value="<?php if(isset($_POST['log'])){ echo $_POST['password'];}else{ echo '';} ?>"
                                                placeholder="Senha" required>
                                            <label id="errPassword"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" onclick="Login()" id="login" name="login" value="entrar"
                                        class="btn btn-primary py-2 px-5">
                                </div>
                                <br>
                                <a href="register.php" class="nav-link">
                                    <p class="new">Novo Cliente , Cadastre-se</p>
                                </a>

                            </form>
                        </div>
                    </div>
                </div>

    </section>

</body>

<?php
    include_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/includes/footer.php";
?>
