<?php
	include("conecta.php");

//	mysqli_query($conexao, "truncate cliente");

	$txt_nome_usuario=$_GET["txt_nome_do_usuario"];
	$cpf_comprador=$_GET["cpf_do_comprador"];
	$telefone_comprador=$_GET["telefone_do_comprador"];
	$produto_adquirido=$_GET["produto_adquirido"];
	$valor_do_produto=$_GET["valor_produto"];

	mysqli_query($conexao, "insert into vendas (id, produto, valor, comprador, cpf, telefone) values ('', '$produto_adquirido', '$valor_do_produto', '$txt_nome_usuario', '$cpf_comprador', '$telefone_comprador')");


	$result_vendas = mysqli_query($conexao, "SELECT * FROM dados order by nome ASC");
	echo('$result_vendas');


	header("location:vendas.php");
?>
