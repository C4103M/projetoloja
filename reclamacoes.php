<DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="icon" type="image/jpg" href="img/L.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Document</title>
    </head>

    <body class="fundo-site">
    <?php
    include "menu.php";
    ?>    <br><br><br><br><br>

        <div class="centro" style="margin-left: 70px;">
            <fieldset><p style="color:white; font-size:25px;">Reclamações</p>
                <form method="post" action="">
                    <p class="">
                        <textarea id="mensagem" name="mensagem" maxlength="140" required cols="50" rows="4" placeholder="Relatar algum Bug? Fazer alguma reclamação? Fazer alguma Sugestão?"></textarea>
                    </p>
                    <input type="submit" name="postar" value="postar" />
                    <input type="reset" value="Cancelar" />
                </form>
            </fieldset>
        </div>
        <?php 
        session_start();
        $id_usuario = $_SESSION['id'];
        $nome_usuario = $_SESSION['nome'];
        $email_usuario = $_SESSION['email'];
        if(isset($_POST['postar'])){
            $mensagem = $_POST['mensagem'];
            include "conexao.php";
            $con = conecta_mysql();
            $sql = "INSERT INTO reclamacoes (id_usuario, nome_usuario, email_usuario, texto_reclamacao) VALUES ('$id_usuario', '$nome_usuario', '$email_usuario', '$mensagem')";
            mysqli_query($con, $sql);
        }
        ?>
    </body>

    </html>