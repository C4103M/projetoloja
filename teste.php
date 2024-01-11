<?php
$nome = $_POST["botao1"];
echo $nome;
?>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <mta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/entrar.css" type="text/css">
        <link rel="icon" type="image/jpg" href="img/L.png">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Olá, mundo!</title>
</head>

<body>
    <form class="formulario" method="post" action="">

        <div class="title icon icon-forward-1"> Login</div>
        <!-- Nome -->
        <div class="input-container">
            <input id="nome" name="nome" class="input" type="text" placeholder="" required />
            <div class="legenda-p"></div>
            <label for="nome" class="label icon icon-user-1"> Nome:</label>
        </div>
        <!-- Email -->
        <div class="input-container">
            <input id="email" name="email" class="input" type="email" placeholder="" required />
            <div class="legenda-p"></div>
            <label for="email" class="label icon icon-lock-1"> Email:</label>
        </div>
        <!-- Senha -->
        <div class="input-container">
            <input id="senha" name="senha" class="input" type="password" placeholder="" required/>
            <div class="legenda-p"></div>
            <label for="senha" class="label icon icon-lock-1"> Senha:</label>
        </div>
        <div class="input-container">
            <input id="senha" name="senha2" class="input" type="password" placeholder="" required/>
            <div class="legenda-p"></div>
            <label for="senha" class="label icon icon-lock-1"> Confirme a Senha:</label>
        </div>

        <button type="text" class="btn">Cadastrar</button>

    </form>
    
    <?php
    if(isset($_POST['nome'])){
        if($_POST['senha'] == $_POST['senha2']){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $senha = md5("$senha");

            include('conexao.php');
            $con = conecta_mysql();
            $sql = "INSERT INTO usuario (nome,email,senha) VALUES ('$nome','$email','$senha')";
            if(mysqli_query($con,$sql)){
                print "<script>
                alert('Usuário Cadastrado')
                window.location.href=window.location.href;
                </script>";
                // header("Location:index.php");
            }
            else{
                print "erro na conexao";
            }
        }
    }
    ?>



</body>