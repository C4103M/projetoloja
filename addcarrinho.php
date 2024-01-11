<?php 
$id_usuario = $_SESSION['id'];
if(isset($_GET['botao1'])){
    $nome_produto1 = $_GET['botao1'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario', '$nome_produto1')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
}
if(isset($_GET['botao2'])){
    $nome_produto2 = $_GET['botao2'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto2')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao2'])){
    $nome_produto2 = $_GET['botao2'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto2')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao3'])){
    $nome_produto3 = $_GET['botao3'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto3')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao4'])){
    $nome_produto4 = $_GET['botao4'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto4')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao5'])){
    $nome_produto5 = $_GET['botao5'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto5')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao6'])){
    $nome_produto6 = $_GET['botao6'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto6')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao7'])){
    $nome_produto7 = $_GET['botao7'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto7')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao8'])){
    $nome_produto8 = $_GET['botao8'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto8')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao9'])){
    $nome_produto9 = $_GET['botao9'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto9')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao10'])){
    $nome_produto10 = $_GET['botao10'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto10')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao1'])){
    $nome_produto1 = $_GET['botao1'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto1')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
}
if(isset($_GET['botao2'])){
    $nome_produto2 = $_GET['botao2'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto2')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao2'])){
    $nome_produto2 = $_GET['botao2'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto2')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao3'])){
    $nome_produto3 = $_GET['botao3'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto3')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao4'])){
    $nome_produto4 = $_GET['botao4'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto4')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao5'])){
    $nome_produto5 = $_GET['botao5'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto5')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao6'])){
    $nome_produto6 = $_GET['botao6'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto6')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao7'])){
    $nome_produto7 = $_GET['botao7'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto7')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao8'])){
    $nome_produto8 = $_GET['botao8'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto8')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao9'])){
    $nome_produto9 = $_GET['botao9'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto9')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao11'])){
    $nome_produto11 = $_GET['botao11'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto11')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao1'])){
    $nome_produto1 = $_GET['botao1'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto1')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
}
if(isset($_GET['botao2'])){
    $nome_produto2 = $_GET['botao2'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto2')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao2'])){
    $nome_produto2 = $_GET['botao2'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto2')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao3'])){
    $nome_produto3 = $_GET['botao3'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto3')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao4'])){
    $nome_produto4 = $_GET['botao4'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto4')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao5'])){
    $nome_produto5 = $_GET['botao5'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto5')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao6'])){
    $nome_produto6 = $_GET['botao6'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto6')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao7'])){
    $nome_produto7 = $_GET['botao7'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto7')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao8'])){
    $nome_produto8 = $_GET['botao8'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto8')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao9'])){
    $nome_produto9 = $_GET['botao9'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto9')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
if(isset($_GET['botao12'])){
    $nome_produto12 = $_GET['botao12'];
    include "conexao.php";
    $con = conecta_mysql();
    $sql = "INSERT INTO carrinho (id_usuario, nome_produto) VALUES ('$id_usuario','$nome_produto12')";
    if(mysqli_query($con,$sql)){
        print "<script>alert('Produto adicionado ao carrinho');</script>";
    }
    else{
        print "<script>alert('erro');</script>";
    }
    
}
?>