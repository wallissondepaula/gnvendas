

<!DOCTYPE html>
<html>
<head>
  <title>Vendas</title>
  <link rel="stylesheet" typr="text/css" href="style.css">
  <script type="text/jscript" src="script.js"></script>
</head>

<body>
  <center>
  <h1 class="titulo">LISTA DE VENDAS CONCRETIZADAS</h1>
  <table width="60%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding="10">
    <tr>
      <td><strong>Nome do Produto</strong></td>
       <td><strong>Valor</strong></td>
      <td><strong>Nome do Comprador</strong></td>
      <td><strong>CPF do Comprador</strong></td>
      <td><strong>Telefone do Comprador</strong></td>
      <td><strong>Gerar boleto</strong></td>
    </tr>

    <?php
      include("conecta.php");

      $vendas_conc=mysqli_query($conexao, "select * from vendas order by produto ASC");

      while($campo=mysqli_fetch_array($vendas_conc)){?>

        <tr>
          <td><?=$campo["produto"]?></td>
          <td><?=$campo["valor"]?></td>
          <td><?=$campo["comprador"]?></td>
          <td><?=$campo["cpf"]?></td>
          <td><?=$campo["telefone"]?></td>

          <form method="POST" action="gr_boleto.php">
          <td><center><input type="radio" name="gerar_boleto" value="<?php echo $campo['id']; ?>"" required class="input"> <?php  echo $campo['id']; ?> </center></td>
          
          



        </tr>
      
    <?php  }?>

    <input type="submit" value="Gerar boleto" class="botform">
    </form>


  </table>
  </center>



</body>
</html>