<?php
    session_start();
    //Cabeçalho
    include_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/includes/header.php";
    //após acessar o sistema e alterar o valor na variável de sessão user,
    //declara-se uma variável que bloqueia o retorno do usuário à tela de login.
    if($_SESSION['user']!=0){
        $_SESSION['logou']='';
    }
    $mensagem='';
    //caso o usuário tenha acessado o sistema via login, exibe a mensagem na tela.
    if(!isset($_SESSION['cadastro'])){
        $mensagem="Logado com Sucesso. Direcionando ao Menu Principal";
    }
?>

<body>
    <!--Div contendo as mensagens de carregamento a serem exibidas na tela-->
    <div class="row justify-content-center mb-5 pb-3 mt-5 pt-5" style="margin: auto">
        <div class="col-md-7 heading-section text-center">
            <h2 class="mb-4"><?php echo $mensagem; ?></h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <br>
            <!--svg de carregamento-->
            <svg width="150" height="150" class="circle-load rotating">
                <g transform="translate(75,75)">
                    <path d="M0,65A65,65 0 1,1 0,-65A65,65 0 1,1 0,65M0,60A60,60 0 1,0 0,-60A60,60 0 1,0 0,60Z"
                        class="base-circle" style="fill: #fac564;"></path>
                    <path
                        d="M3.980102097228898e-15,-65A65,65 0 1,1 3.980102097228898e-15,65L3.67394039744206e-15,60A60,60 0 1,0 3.67394039744206e-15,-60Z"
                        class="arc" style="fill: rgba(255, 255, 255, 0.8);"></path>
                </g>
            </svg>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        setTimeout(function() {
            document.location.href = 'index.php';
        }, 2000);
    });
    </script>
</body>
<?php
    
    include_once "{$_SERVER['DOCUMENT_ROOT']}/ProjetoWeb/includes/footer.php";
?>
