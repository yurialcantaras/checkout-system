<?php
require '../vendor/autoload.php';

use PayPal\CheckoutSdk\Core\PayPalHttpClient;
use PayPal\CheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\PayPalHttpClient as CorePayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment as CoreSandboxEnvironment;

class PayPalClient {
    public static function client() {
        return new CorePayPalHttpClient(self::environment());
    }

    public static function environment() {
        $clientId = "";
        $clientSecret = "";
        return new CoreSandboxEnvironment($clientId, $clientSecret);
    }
}
?>
