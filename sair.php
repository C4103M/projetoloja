<?php
	session_start();
	// limpar todas as variáveis globais
	unset($_SESSION["id"]);
	unset($_SESSION["usuario"]);
	unset($_SESSION["email"]);
	unset($_SESSION["senha"]);
	// depois direcionar para o arquivo index.php 
	header("Location:index.php");
?>
