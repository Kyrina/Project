<?php
require("api.php"); 

$micro = sprintf("%06d",(microtime(true) - floor(microtime(true))) * 1000000); 
$number = date("YmdHis"); 
$order_id = $number.$micro; 
echo $order_id;
$merchant_id='i62578968603'; //Вписывайте сюда свой мерчант
$signature="2tf5LOqAn2vRNrYxPbx6DTHeyjiMoFKacGzn6qRp"; //Сюда вносите public_key

//$desc = $_GET['desc']; //Можно так принять назначение платежа
//$order_id = $_GET['order_id']; //Можно так принять назначение платежа
$price = $_GET['price']; //Все что нужно скрипту — передать в него сумму (вы можете передавать все, вплоть до ордера и описания …)

$liqpay = new LiqPay($merchant_id, $signature);
$html = $liqpay->cnb_form(array(
'version' => '3',
'amount' => $price,
'currency' => 'UAH', //Можно менять 'EUR','UAH','USD','RUB','RUR'
'description' => "Оплата квитка", //Или изменить на $desc
'order_id' => $order_id
));

echo $html;

?>