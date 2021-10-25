<?php
	include("conecta.php");

	$recnome=$_GET["fnome"];
	$recpreco=$_GET["fpreco"];

	mysqli_query($conexao, "insert into dados (nome, preco) values ('$recnome', '$recpreco')");

	header("location:lista.php");
?>
