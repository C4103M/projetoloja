<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:index.php");
}
if (isset($_SESSION["id"])) {
    $nome = $_SESSION["nome"];
    $email = $_SESSION["email"];
    $senha = $_SESSION["senha"];
    $id = $_SESSION["id"];
}
?>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Professor" />
    <meta name="description" content="Descrição" />
    <meta name="keywords" content="Palavras, chaves" />
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/entrar.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="icon" type="image/jpg" href="img/L.png">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Alterar nome usuario</title>
</head>

<body class="fundo-site">
    <div class="container">
        <div class="fml">

            <div class="alterarcss">
                <form class="formulario" method="post" action="">
                    <div class="title icon icon-forward-1"> Tem certeza que deseja deletar sua conta?</div>
                    <!-- Deletar -->
                    <div class="input-container">
                        <div class="alinhar">
                            <div style="color: white;">Desejo deletar minha conta ‎ ‎ </div><input name="deletar" value="deletar" type="checkbox" required>
                        </div>
                    </div>
                    <!-- Senha atual-->
                    <div class="input-container">
                        <input id="senha" name="senha" class="input" type="password" placeholder="" required />
                        <div class="legenda-p"></div>
                        <label for="senha" class="label icon icon-lock-1"> Senha:</label>
                    </div>
                    <button type="text" class="btn">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['senha'])) {
        $senha2 = $_POST["senha"];
        $senha2 = md5($senha2);
        if ($senha == $senha2) {
            include_once("conexao.php");
            $con = conecta_mysql();
            $sql = "DELETE FROM usuario WHERE id = $id;";
            $resultado = mysqli_query($con, $sql);
            if ($resultado) {
                print "<script>alert('Seu usuario foi deletado.')</script>";
                unset($_SESSION["id"]);
	            unset($_SESSION["usuario"]);
	            unset($_SESSION["email"]);
	            unset($_SESSION["senha"]);
                sleep(5);
                header("location:index.php");

            } else {
                print "<script>alert('Senha incorreta')</script>";
            }
        }
    }
    ?>
</body>

</html>