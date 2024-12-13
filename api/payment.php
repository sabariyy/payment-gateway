<?php

error_reporting(0);

include_once("../config/index.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $amount = $_POST['amount'];

    // creating a alpha numeric random orderid

    $order_id = substr(md5(uniqid(mt_rand(), true)), 0, 10);

    echo json_encode(['status' => 200, 'url' => "https://full2sms.in/gateway/processPpayment?token=".TOKENID."&amount=".$amount."&order_id=".$order_id."&cpin=".CPIN.""]);

}else{

    echo json_encode(['status' => 201, 'message' => 'Invalid Request']);

    exit();

}

?>
