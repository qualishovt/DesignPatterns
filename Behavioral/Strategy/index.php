<?php

use DesignPatterns\Behavioral\Strategy\Context\OrderController;

require_once '../../vendor/autoload.php';

/**
 * The client code.
 */

$controller = new OrderController();

echo "Client: Let's create some orders\n<br>";

$controller->post("/orders", [
    "email" => "me@example.com",
    "product" => "ABC Cat food (XL)",
    "total" => 9.95,
]);

$controller->post("/orders", [
    "email" => "me@example.com",
    "product" => "XYZ Cat litter (XXL)",
    "total" => 19.95,
]);

echo "\n<br>Client: List my orders, please\n<br>";

$controller->get("/orders");

echo "\n<br>Client: I'd like to pay for the second, show me the payment form\n<br>";

$controller->get("/order/1/payment/paypal");

echo "\n<br>Client: ...pushes the Pay button...\n<br>";
echo "\n<br>Client: Oh, I'm redirected to the PayPal.\n<br>";
echo "\n<br>Client: ...pays on the PayPal...\n<br>";
echo "\n<br>Client: Alright, I'm back with you, guys.\n<br>";

$controller->get("/order/1/payment/paypal/return" .
    "?key=c55a3964833a4b0fa4469ea94a057152&success=true&total=19.95");