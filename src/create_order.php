<?php
require 'config.php';

use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalHttp\HttpException;

function createOrder() {
    $client = PayPalClient::client();
    $request = new OrdersCreateRequest();
    $request->prefer('return=representation');
    $request->body = [
        "intent" => "CAPTURE",
        "purchase_units" => [[
            "amount" => [
                "value" => "100.00",
                "currency_code" => "USD"
            ]
        ]],
        "application_context" => [
            "cancel_url" => "http://localhost/project/public/cancel.php",
            "return_url" => "http://localhost/project/public/success.php"
        ]
    ];

    try {
        $response = $client->execute($request);
        return $response->result->links[1]->href; // Link de aprovação
    } catch (HttpException $ex) {
        echo $ex->statusCode;
        print_r($ex->getMessage());
    }
}

echo createOrder();
?>
