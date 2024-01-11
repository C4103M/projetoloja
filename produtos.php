<!DOCTYPE html>
<?php
		session_start();
		if (!isset($_SESSION["id"]) ){
			header("location:index.php?erro=2");
		}

	?>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" type="image/jpg" href="img/L.png">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Página inicial Low price</title>
</head>

<body class="fundo-site">
    <div>
        <?php 
        include('menu.php');
        ?>
    </div>
    <div class="princ-div"><br><br><br>
        <div class="cinza">
            <h3 class="texto-estilo1">Prod<span class="texto-estilo2">utos</span></h3>
        </div>
        <hr color="black">
        <!-- Primeira fileira -->
        <div class="primeira-fileira"><br>
            <h2 style="color:white; text-align:center;">Cadeira Gamer</h2><br>
            <div class="produtos row">
                <div class="produto1 prod-cel col-md-5 col-lg-2 col-xs-12">
                    <img src="img/cadeirasgamers/cadeira1.png" class="img-produto mt-2 img-fluid"
                        alt="Cadeira Gamer"><br>
                    <p style="color:white;" class="mt-3">
                        <a href="produtos/produto1.php" class="">Cadeira Gamer Coral Snake <br><br>
                            R$ 750,00
                        </a><br><br>
                    <form method="get" action="">
                        <button name="botao1" class="botao" type="submit" value="botao1">
                            <i class="fi fi-rr-shopping-cart">Add ao carrinho </i>
                        </button>
                    </form>
                    </p>
                </div>
                <div class="produto1 prod-cel col-md-5 col-lg-2 col-xs-12">
                    <img src="img/cadeirasgamers/cadeira2.png" class="img-produto mt-2 img-fluid" alt="Cadeira Gamer">
                    <p style="color:white;" class="mt-3">
                        <a href="produtos/produto2.php" class="">Cadeira Gamer TGT Heron<br><br>
                            R$ 1250,00
                        </a><br><br>
                    <form method="get" action="">
                        <button name="botao2" class="botao" type="submit" value="botao2">
                            <i class="fi fi-rr-shopping-cart">Add ao carrinho </i>
                        </button>
                    </form>
                    </p>
                </div>
                <div class="produto1 prod-cel col-md-5 col-lg-2 col-xs-12">
                    <img src="img/cadeirasgamers/cadeira3.png" class="img-produto mt-2 img-fluid" alt="Cadeira Gamer">
                    <p style="color:white;" class="mt-3">
                        <a href="produtos/produto3.php" class="">Cadeira Gamer Mx5 Giratoria Branco E Rosa - Mymax<br><br>
                            R$ 960,00
                        </a><br><br>
                    <form method="get" action="">
                        <button name="botao3" class="botao" type="submit" value="botao3">
                            <i class="fi fi-rr-shopping-cart">Add ao carrinho </i>
                        </button>
                    </form>
                    </p>
                </div>
                <div class="produto1 prod-cel col-md-5 col-lg-2 col-xs-12">
                    <img src="img/cadeirasgamers/cadeira4.png" class="img-produto mt-2 img-fluid" alt="Cadeira Gamer">
                    <p style="color:white;" class="mt-3">
                        <a href="produtos/produto4.php" class="">Cadeira Gamer infantil Homem Aranha<br><br>
                            R$ 1000,00
                        </a><br><br>
                    <form method="get" action="">
                        <button name="botao4" class="botao" type="submit" value="botao4">
                            <i class="fi fi-rr-shopping-cart">Add ao carrinho </i>
                        </button>
                    </form>
                    </p>
                </div>

            </div><br>
        </div>

        <!-- segunda fileira -->
        <div class="segunda-fileira"><br>
            <h2 style="color:white; text-align:center;">Headsets</h2><br>
            <div class="produtos row">
                <div class="produto1 prod-cel col-md-5 col-lg-2 col-xs-12">
                    <img src="img/headsets/fone1.png" class="img-produto mt-2 img-fluid" alt="Cadeira Gamer"><br>
                    <p style="color:white;" class="mt-3">
                        <a href="produtos/produto5.php" class="">Headset Simples <br><br>
                            R$ 119,90
                        </a><br><br>
                    <form method="get" action="">
                        <button name="botao5" class="botao" type="submit" value="botao5">
                            <i class="fi fi-rr-shopping-cart">Add ao carrinho </i>
                        </button>
                        </p>
                </div>
                <div class="produto1 prod-cel col-md-5 col-lg-2 col-xs-12">
                    <img src="img/headsets/fone2.png" class="img-produto mt-2 img-fluid" alt="Cadeira Gamer">
                    <p style="color:white;" class="mt-3">
                        <a href="produtos/produto6.php" class="">Headset JBL<br><br>
                            R$ 235,00
                        </a><br><br>
                    <form method="get" action="">
                        <button name="botao6" class="botao" type="submit" value="botao6">
                            <i class="fi fi-rr-shopping-cart">Add ao carrinho </i>
                        </button>
                    </form>
                    </p>
                </div>
                <div class="produto1 prod-cel col-md-5 col-lg-2 col-xs-12">
                    <img src="img/headsets/fone3.png" class="img-produto mt-2 img-fluid" alt="Cadeira Gamer">
                    <p style="color:white;" class="mt-3">
                        <a href="produtos/produto7.php" class="">Headset Feminino<br><br>
                            R$ 79,90
                        </a><br><br>
                    <form method="get" action="">
                        <button name="botao7" class="botao" type="submit" value="botao7">
                            <i class="fi fi-rr-shopping-cart">Add ao carrinho </i>
                        </button>
                    </form>
                    </p>
                </div>
                <div class="produto1 prod-cel col-md-5 col-lg-2 col-xs-12">
                    <img src="img/headsets/fone4.png" class="img-produto mt-2 img-fluid" alt="Cadeira Gamer">
                    <p style="color:white;" class="mt-3">
                        <a href="produtos/produto8.php" class="">Headset Vermelho AKG<br><br>
                            R$ 159,00
                        </a><br><br>
                    <form method="get" action="">
                        <button name="botao8" class="botao" type="submit" value="botao8">
                            <i class="fi fi-rr-shopping-cart">Add ao carrinho </i>
                        </button>
                    </form>
                    </p>
                </div>
            </div>
        </div>

        <!-- Terceira fileira -->
        <div class="terceira-fileira"><br>
            <h2 style="color:white; text-align:center;">Mouses</h2>br
            <div class="produtos row">
                <div class="produto1 prod-cel col-md-5 col-lg-2 col-xs-12">
                    <img src="img/mouses/mouse1.png" class="img-produto mt-2 img-fluid" alt="Cadeira Gamer"><br>
                    <p style="color:white;" class="mt-3">
                        <a href="produtos/produto9.php" class="">Glorious Gaming Mouse<br><br>
                            R$ 235,00
                        </a><br><br>
                    <form method="get" action="">
                        <button name="botao9" class="botao" type="submit" value="botao9">
                            <i class="fi fi-rr-shopping-cart">Add ao carrinho </i>
                        </button>
                    </form>
                    </p>
                </div>
                <div class="produto1 prod-cel col-md-5 col-lg-2 col-xs-12 col-xs-12 ">
                    <img src="img/mouses/mouse2.png" class="img-produto mt-2 img-fluid" alt="Cadeira Gamer">
                    <p style="color:white;" class="mt-3">
                        <a href="produtos/produto10.php" class="">Mouse MOBA Sem Fio<br><br>
                            R$ 60,00
                        </a><br><br>
                    <form method="get" action="">
                        <button name="botao10" class="botao" type="submit" value="botao10">
                            <i class="fi fi-rr-shopping-cart">Add ao carrinho </i>
                        </button>
                    </form>
                    </p>
                </div>
                <div class="produto1 prod-cel col-md-5 col-lg-2 col-xs-12">
                    <img src="img/mouses/mouse3.png" class="img-produto mt-2 img-fluid" alt="Cadeira Gamer">
                    <p style="color:white;" class="mt-3">
                        <a href="produtos/produto11.php" class="">Mouse Gamer Bluetooth<br><br>
                            R$ 89,00
                        </a><br><br>
                    <form method="get" action="">
                        <button name="botao12" class="botao" type="submit" value="botao11">
                            <i class="fi fi-rr-shopping-cart">Add ao carrinho </i>
                        </button>
                    </form>
                    </p>
                </div>
                <div class="produto1 prod-cel col-md-5 col-lg-2 col-xs-12">
                    <img src="img/mouses/mouse4.png" class="img-produto mt-2 img-fluid" alt="Cadeira Gamer">
                    <p style="color:white;" class="mt-3">
                        <a href="produtos/produto12.php" class="">Mouse Razer Gaming<br><br>
                            R$ 449,00
                        </a><br><br>
                    <form method="get" action="">
                        <button name="botao12" class="botao" type="submit" value="botao12">
                            <i class="fi fi-rr-shopping-cart">Add ao carrinho </i>
                        </button>
                    </form>
                    </p>
                </div>

            </div>
        </div>
        <?php 
        include('addcarrinho.php');
        ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <?php 
        include('rodape.php');
        ?>
    </div>









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