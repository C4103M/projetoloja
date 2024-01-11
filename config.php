<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION["codigo"])) {
    header("location:index.php?erro=2");
}
if (isset($_SESSION["codigo"])) {
    $nome = $_SESSION["nome"];
    $email = $_SESSION["email"];
}
?>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Professor" />
    <meta name="description" content="Descrição" />
    <meta name="keywords" content="Palavras, chaves" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="icon" type="image/jpg" href="img/L.png">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Configurações</title>
</head>

<body class="fundo-site">
    <?php
    include('menu.php');
    ?>
    <div class="container">
        <div class="cont-config">
            <div class="esquerda-config">
                <div class="red-div"><br>
                    <img src="img/contorno-de-pessoa.png" class="img-red" alt="">
                </div>
                <div class="texto-config">
                    Nome de usuario: <span class="negrito-maior"><?php print "$nome"; ?></span> <br />
                    E-mail: <span class="italico"><?php print "$email"; ?></span> <br /><br>
                </div>
                
            </div>
            <div class="direita-config "><br><br>
                <a href="alterar_nome.php">Alterar Nome do Usuário</a><br /><br />
                <a href="alterar_email.php">Alterar Email</a><br /><br />
                <a href="alterar_senha.php">Alterar Senha do Usuário</a><br /><br />
                <a href="deletar.php">Deletar Conta</a><br /><br /><br>
            </div>
        </div>

</body>

</html>