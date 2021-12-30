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


    <section class=" justify-content-center d-md-flex">


        <div>
            <hr>
            <div class="one-half ftco-animate">


                <div class="cart-table justify-content-center mb-5 pb-3 mt-1 pt-1 text-center">
                    <br>
                    <div class="heading-section ftco-animate ">
                        <a class="btn btn-primary py-2 px-5" href="login.php">Voltar</a>
                    </div>
                    <br>

                    <div class="form">

                        <form action="form.php" method="POST">
                            <fieldset>
                                <h2 class="mb-12"><span>Cadastro De Novo Cliente</span></h1>
                                    <br>
                                    <div class="form-control">
                                        <p for="name" class="pInput">Nome completo</p>
                                        <input type="text" name="name" id="name" class="inputUser" required>

                                    </div>
                                    <br> <br>
                                    <div class="form-control">
                                        <p for="password" class="pInput">Senha</p>
                                        <input type="password" name="password" id="password" class="inputUser" required>

                                    </div>
                                    <br><br>
                                    <div class="form-control">
                                        <p for="email" class="pInput">Email</p>
                                        <input type="text" name="email" id="email" class="inputUser" required>

                                    </div>
                                    <br><br>
                                    <div class="form-control">
                                        <p for="tel" class="pInput">Telefone</p>
                                        <input type="tel" name="tel" id="tel" class="inputUser" required>

                                    </div>
                                    <br>
                                    <br>
                                    <div class="form-control">
                                        <p for="date"><b>Data de Nascimento:</b></p>
                                        <input type="date" name="date" id="date" class="inputUser" required>
                                    </div>
                                    <br><br><br>

                                    <div class="form-control">
                                        <p for="city" class="pInput">Cidade</p>
                                        <input type="text" name="city" id="city" class="inputUser" required>

                                    </div>
                                    <br><br>
                                    <div class="form-control">
                                        <p for="estate" class="pInput">Estado</p>
                                        <input type="text" name="estate" id="estate" class="inputUser" required>

                                    </div>
                                    <br><br>
                                    <div class="form-control">
                                        <p for="address" class="pInput">Endereço</p>
                                        <input type="text" name="address" id="address" class="inputUser" required>

                                    </div>
                                    <br>
                                    <br><br>
                                    <input class="btn btn-primary py-2 px-5" type="submit" name="submit" id="submit"
                                        value="Enviar">
                            </fieldset>
                        </form>
                    </div>
</body>

<?php
    include_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/includes/footer.php";
?>
