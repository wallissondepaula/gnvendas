<?php
   require __DIR__ . '/../../php/www/Composer/vendor/autoload.php'; // caminho relacionado a SDK

   use Gerencianet\Exception\GerencianetException;
   use Gerencianet\Gerencianet;

   $clientId = 'Client_Id_4e4327e045ceb277ed5f62db8c46c399c309e0bf';// insira seu Client_Id, conforme o ambiente (Des ou Prod)
   $clientSecret = 'Client_Secret_bb1ad596c70e1c17089cd27ec860816670412681'; // insira seu Client_Secret, conforme o ambiente (Des ou Prod)


   //Recebendo valores do banco de dados

   include("conecta.php");

   $dados_boleto=mysqli_query($conexao, "SELECT * FROM boleto");
   $campo_dados=mysqli_fetch_array($dados_boleto);

   $produto=$campo_dados[1];
   $valor=$campo_dados[2];
   $comprador=$campo_dados[3];
   $cpf=$campo_dados[4];
   $telefone=$campo_dados[5];
   $valor=(intval($valor))*100;

   $hoje=date('Y-m-d');
   $vencimento=date('Y-m-d', strtotime("+2 days",strtotime($hoje)));
   echo $vencimento;

    $options = [
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
        'sandbox' => true // altere conforme o ambiente (true = homologação e false = producao)
    ];
    
   $item_1 = [
       'name' => $produto, // nome do item, produto ou serviço
       'amount' => 1, // quantidade
       'value' => 289900 // valor (1000 = R$ 10,00) (Obs: É possível a criação de itens com valores negativos. Porém, o valor total da fatura deve ser superior ao valor mínimo para geração de transações.)
   ];
   $items = [
       $item_1
   ];
   $metadata = array('notification_url'=>'https://pdf.charge.com.br'); //Url de notificações
   $customer = [
       'name' => 'Wallisson de Paula', // nome do cliente
       'cpf' => $cpf, // cpf válido do cliente
       'phone_number' => $telefone, // telefone do cliente
   ];
   $discount = [ // configuração de descontos
       'type' => 'currency', // tipo de desconto a ser aplicado
       'value' => 1 // valor de desconto 
   ];
   $configurations = [ // configurações de juros e mora
       'fine' => 200, // porcentagem de multa
       'interest' => 33 // porcentagem de juros
   ];
   $conditional_discount = [ // configurações de desconto condicional
       'type' => 'percentage', // seleção do tipo de desconto 
       'value' => 500, // porcentagem de desconto
       'until_date' => '2021-10-26' // data máxima para aplicação do desconto
   ];
   $bankingBillet = [
       'expire_at' => $vencimento, // data de vencimento do titulo
       'message' => 'teste\nteste\nteste\nteste', // mensagem a ser exibida no boleto
       'customer' => $customer,
       'discount' =>$discount,
       'conditional_discount' => $conditional_discount
   ];
   $payment = [
       'banking_billet' => $bankingBillet // forma de pagamento (banking_billet = boleto)
   ];
   $body = [
       'items' => $items,
       'metadata' =>$metadata,
       'payment' => $payment
   ];
   try {
     $api = new Gerencianet($options);
     $pay_charge = $api->oneStep([],$body);
     echo '<pre>';
     print_r($pay_charge);
//     echo '<pre>';
     
    } catch (GerencianetException $e) {
//      print_r($e->code);
//      print_r($e->error);
//      print_r($e->errorDescription);
   } catch (Exception $e) {
       print_r($e->getMessage());
   }

//   print_r($pay_charge['data']);
//   $vdata=$pay_charge['data'];
//   print_r($vdata['link']);


?>





