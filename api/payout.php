<?php

error_reporting(0);

include_once("../config/index.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $type = $_POST['type'];

    $amount = $_POST['amount'];

    $payment_address = $_POST['payment_address'];

    $payment_info = $_POST['payment_info'];

    $admin_key = $_POST['admin_key'];



    if ($type == "") {

        echo json_encode(['status' => 201, 'message' => 'Please Select a Type']);

        exit();

    }



    if ($amount == "") {

        echo json_encode(['status' => 201, 'message' => 'Please Enter Amount']);

        exit();

    }



    if ($payment_address == "") {

        echo json_encode(['status' => 201, 'message' => 'Please Enter Payment Address']);

        exit();

    }



    if ($admin_key == "") {

        echo json_encode(['status' => 201, 'message' => 'Please Enter Admin Key']);

        exit();

    }



    if($payment_info == "") {

        echo json_encode(['status' => 201, 'message' => 'Please Enter Payment Info']);

        exit();

    }



    if ($admin_key != ADMIN_KEY) {

        echo json_encode(['status' => 201, 'message' => 'Incorrect Admin Key']);

        exit();

    }



    if ($amount < 0) {

        echo json_encode(['status' => 201, 'message' => 'Invalid Amount']);

        exit();

    }



    if($type != "wallet" && $type != "upi") {

        echo json_encode(['status' => 201, 'message' => 'Invalid Type']);

        exit();

    }



    if ($type == "wallet") {

        $api_url = "https://full2sms.in/api/v2/payout?mid=" . MID . "&mkey=" . MKEY . "&guid=" . GUID . "&type=wallet&amount=".$amount."&mobile=".$payment_address."&info=".$payment_info."";



        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $api_url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        $result = curl_exec($ch);

        curl_close($ch);

        $data = json_decode($result, true);

        if($data['status'] == "success") {

            echo json_encode(['status' => 200, 'message' => 'Payout Initiated Successfully']);

            exit();

        } else {

            echo json_encode(['status' => 201, 'message' => $data['message']]);

            exit();

        }

    }

    if ($type == "upi") {

        $api_url = "https://full2sms.in/api/v2/payout?mid=" . MID . "&mkey=" . MKEY . "&guid=" . GUID . "&type=upi&amount=".$amount."&upi=".$payment_address."&info=".$payment_info."";



        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $api_url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        $result = curl_exec($ch);

        curl_close($ch);

        $data = json_decode($result, true);

        if($data['status'] == "success") {

            echo json_encode(['status' => 200, 'message' => 'Payout Initiated Successfully']);

            exit();

        } else {

            echo json_encode(['status' => 201, 'message' => $data['message']]);

            exit();

        }

    }

} else {

    echo json_encode(['status' => 201, 'message' => 'Invalid Request']);

    exit();

}

?>
