<?php
require 'config.php';

use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use PayPalHttp\HttpException;

function captureOrder($orderId) {
    $client = PayPalClient::client();
    $request = new OrdersCaptureRequest($orderId);
    $request->prefer('return=representation');

    try {
        $response = $client->execute($request);
        return $response;
    } catch (HttpException $ex) {
        echo $ex->statusCode;
        print_r($ex->getMessage());
    }
}

if (isset($_GET['token'])) {
    $orderId = $_GET['token'];
    $response = captureOrder($orderId);
    echo "Pagamento concluído com sucesso!";
    print_r($response);
}
?>
