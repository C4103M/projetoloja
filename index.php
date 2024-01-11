</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/entrar.css" type="text/css">
    <link rel="icon" type="image/jpg" href="img/L.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Olá, mundo!</title>
</head>

<body class="imagem-fundo">
    <div class="posicao-pc d-none d-xl-block d-none d-lg-block d-xl-none">
        <div class="enf1 mt-5">
            <img src="img/bola.png" class="img-fluid img1" alt="Imagem responsiva">
        </div>
        <div class="enf2 mt-5">
            <img src="img/bola.png" class="img-fluid img2" alt="Imagem responsiva">
        </div>
        <div class="enf3 mt-5">
            <img src="img/tracos.png" class="img-fluid img3" alt="Imagem responsiva">
        </div>
        <div class="enf4 mt-5 ">
            <img src="img/arco.png" class="img-fluid img4" alt="Imagem responsiva">
        </div>
        <div class="enf5">
            <img src="img/lowprice.png" class="img-fluid img5" alt="Imagem Responsiva">
        </div>
        <div class="enf6">
            <img src="img/tracos2.png" class="img-fluid img6" al="Imagem Responsiva">
        </div>
        <div class="enf7 mt-5 ">
            <img src="img/arco.png" class="img-fluid img7" alt="Imagem responsiva">
        </div>
    </div>

    <div class="celular d-block d-sm-none d-none d-sm-block d-md-none d-none d-md-block d-lg-none">
        <div class="enf-cel-1 ">
            <img src="img/lowprice.png" class="img-fluid img-cel" alt="Imagem Responsiva">
        </div>
    </div>
    <div class="fml">
        <form class="formulario" method="post" action="">

            <div class="title icon icon-forward-1"> Login</div>

            <div class="input-container">
                <input id="email" name="email" class="input" type="email" placeholder="" />
                <div class="legenda-p"></div>
                <label for="email" class="label icon icon-user-1"> Email</label>
            </div>

            <div class="input-container">
                <input id="senha" name="senha" class="input" type="password" placeholder="" />
                <div class="legenda-p"></div>
                <label for="senha" class="label icon icon-lock-1"> Senha</label>
            </div>
            <button type="text" class="btn">Entrar</button>
            <div class="btn">
                <label for="Cadastrar"><a href="cadastro.php" class="sem-sublinhado">Cadastre-se</a></label>
            </div>

        </form>
    </div>
    <?php
  if(isset($_POST["email"]) ){
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $senha = md5($senha);
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "SELECT * FROM usuario
            WHERE email = '$email'
            AND senha = '$senha'";
    $resultado_sql = mysqli_query($con, $sql);
    if($resultado_sql){
        // print "Consulta realizada";
        $dados_usuario = mysqli_fetch_assoc($resultado_sql);
        if( isset($dados_usuario["id"])) {
            session_start();
            $_SESSION["id"] = $dados_usuario["id"];
            $_SESSION["nome"] = $dados_usuario["nome"];
            $_SESSION["email"] = $dados_usuario["email"];
            $_SESSION["senha"] = $dados_usuario["senha"];
            header("location:homepage.php");
        }
        else{
            print "<script> alert('Email e senha incorreto'); </script>";
        }
    }
    else{
        print "Erro de SQL. Verifique seu código";
    }
}
  ?>


    
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>