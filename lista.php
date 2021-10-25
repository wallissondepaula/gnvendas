

<!DOCTYPE html>
<html>
<head>

	<title> Lista de Produtos Gn-Vendas</title>

	<link rel="stylesheet" typr="text/css" href="style.css">
	<script type="text/jscript" src="script.js"></script>
</head>

<body>
	<center>
	<h1 class="titulo">LISTA DE PRODUTOS GN-VENDAS</h1>


		<form method="GET" action="gr_compras.php">
			Nome do Comprador: <input type="text" name="txt_nome_do_usuario" placeholder="Digite o nome do comprador" required class="input"><br><br>
			CPF: <input type="number" name="cpf_do_comprador" placeholder="Digite o CPF do comprador" required class="input"><br><br>
			Telefone: <input type="number" size="8" minlength="10" maxlength="11" name="telefone_do_comprador" placeholder="Digite o telefone do comprador" required class="input"><br><br>

			<?php echo("Selecione abaixo o produto que deseja adquirir:")?>

			<table width="60%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding="10">

				<tr>
					<td><center><b>Comprar</b></center></td> <td><center><b>Produto</b></center></td> <td><center><b>Valor</center></td>
				</tr>

					<?php
						include("conecta.php");
						$result_dados = "SELECT * FROM dados order by nome ASC";
						$resultado_dados = mysqli_query($conexao, $result_dados);


						while ($row_dados = mysqli_fetch_assoc($resultado_dados)) { ?>
						<tr>
							<label>
								<td>
									<center>
									<input type="radio" name="produto_adquirido" value=<?php echo $row_dados['nome']; ?> required class="input"> 
									</center>

									<td><center>	
									<?php echo $row_dados['nome']; ?><?php // echo $row_dados['preco']; ?>
									</center></td>

									<td>
									<input type="hidden" name="valor_produto" value="<?php echo $row_dados['preco']?>" required class="input"> 								
									<?php // echo $row_dados['nome']; ?> R$ <?php  echo ($row_dados['preco']); ?>
									</td>



								</td>
								<br>
							</label>
						</tr>
 <?php
						}

					?>
					
				<input type="submit" value="Efetuar Compra" class="botform">
		</form>
</table>
</center>
</body>
</html>