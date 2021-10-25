<?php
	include("conecta.php");

	mysqli_query($conexao, "truncate table boleto;");

	$recid=$_POST['gerar_boleto'];

//	echo $recid;
	$recid=intval($recid);
//	echo $recid;

	$boleto=mysqli_query($conexao, "SELECT * FROM vendas WHERE id=$recid");
	$campo_boleto=mysqli_fetch_array($boleto);

	print_r($campo_boleto);
	echo $campo_boleto[3];

//	print_r($campo_boleto);

	mysqli_query($conexao, "insert into boleto (id, produto, valor, comprador, cpf, telefone) values ( '$campo_boleto[0]', '$campo_boleto[1]', '$campo_boleto[2]', '=$campo_boleto[3]', '$campo_boleto[4]', '$campo_boleto[5]');");


//	print_r($produto);

//	print_r($campo_boleto);



	header("location:gera_boleto.php");

?>