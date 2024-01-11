<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:index.php?erro=2");
}
if (isset($_SESSION['id'])) {
    $id_usuario = $_SESSION['id'];
    $nome_usuario = $_SESSION['nome'];
}
?>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Meu carrinho</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='CSS/style.css'>
    <link rel="icon" type="image/jpg" href="img/L.png">
    <link rel="stylesheet" href="CSS/produtos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src='main.js'></script>
</head>

<body class="fundo-site2">
    <div class="menu">
        <?php
        include_once('menu.php');
        include_once('conexao.php');
        $con = conecta_mysql();
        $cont = "SELECT COUNT('nome_produto') AS quantidade FROM carrinho WHERE id_usuario = $id_usuario";
        $resultado_count = mysqli_query($con, $cont);
        $linha_produtos = $resultado_count->fetch_assoc();
        // print "Quantidade de produtos:".$linha_produtos['quantidade']."<br>"
        ?>
    </div><br><br><br><br>
    <div class="container">
        <div class="qtd-produtos">
            <h2 style="color: white;"> <?php print "Olá, $nome_usuario você tem " . $linha_produtos['quantidade'] . " Itens no carrinho"; ?></h2>
        </div>
        <div class="produtos row sobrepor">
            <?php
            $sql = "SELECT * FROM carrinho WHERE id_usuario = $id_usuario";
            $resultado = mysqli_query($con, $sql);
            if ($resultado) {
                $produtos_carrinho[] = array();
                while ($linha = mysqli_fetch_assoc($resultado)) {
                    $produtos_carrinho[] = $linha;
                }
                foreach ($produtos_carrinho as $produto_carrinho) {
                    if (isset($produto_carrinho["nome_produto"]) and $produto_carrinho["nome_produto"] == 'botao1') {
                        include_once "produtos/produto1.php";
                    }
                    if (isset($produto_carrinho["nome_produto"]) and $produto_carrinho["nome_produto"] == 'botao2') {
                        include_once "produtos/produto2.php";
                    }
                    if (isset($produto_carrinho["nome_produto"]) and $produto_carrinho["nome_produto"] == 'botao3') {
                        include_once "produtos/produto3.php";
                    }
                    if (isset($produto_carrinho["nome_produto"]) and $produto_carrinho["nome_produto"] == 'botao4') {
                        include_once "produtos/produto4.php";
                    }
                    if (isset($produto_carrinho["nome_produto"]) and $produto_carrinho["nome_produto"] == 'botao5') {
                        include_once "produtos/produto5.php";
                    }
                    if (isset($produto_carrinho["nome_produto"]) and $produto_carrinho["nome_produto"] == 'botao6') {
                        include_once "produtos/produto6.php";
                    }
                    if (isset($produto_carrinho["nome_produto"]) and $produto_carrinho["nome_produto"] == 'botao7') {
                        include_once "produtos/produto7.php";
                    }
                    if (isset($produto_carrinho["nome_produto"]) and $produto_carrinho["nome_produto"] == 'botao8') {
                        include_once "produtos/produto8.php";
                    }
                    if (isset($produto_carrinho["nome_produto"]) and $produto_carrinho["nome_produto"] == 'botao9') {
                        include_once "produtos/produto9.php";
                    }
                    if (isset($produto_carrinho["nome_produto"]) and $produto_carrinho["nome_produto"] == 'botao10') {
                        include_once "produtos/produto10.php";
                    }
                    if (isset($produto_carrinho["nome_produto"]) and $produto_carrinho["nome_produto"] == 'botao11') {
                        include_once "produtos/produto11.php";
                    }
                    if (isset($produto_carrinho["nome_produto"]) and $produto_carrinho["nome_produto"] == 'botao12') {
                        include_once "produtos/produto12.php";
                    }
                }
            }

            ?>

        </div>
    </div>
    <div class="div-botao" style="margin-left: 70px;">
        <form action="" method="get" class="form-botao">
            <button type="submit" class="bt" name="comprar" value="comprar"><i class="fa fa-money" aria-hidden="true">Comprar</i></button>
        </form>
        <form action="" method="get" class="form-botao">
            <button type="submit" class="bt" name="limpar" value="limpar"><i class="fa fa-trash" aria-hidden="true">Limpar Carrinho</i></button>
        </form>
    </div>
    <?php
    if (isset($_GET['comprar'])) {
        print "<script>alert('Ainda não possuimos esta função');</script>";
    }
    if (isset($_GET['limpar'])) {
        $sql2 = "DELETE FROM carrinho WHERE id_usuario = $id_usuario";
        mysqli_query($con, $sql2);
        print "<script>alert('Carrinho Limpo com Sucesso');</script>";
    }
    ?>
</body>

</html>