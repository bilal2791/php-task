<?php
require_once('vendor/autoload.php');

$stripe = new \Stripe\StripeClient('sk_test_51GuJUHEWIKxG0jQGipoLydXlOInn5TTVhlzENqeEWko1O4Mp8yx6xCCO5urD7clz3CY0vg1Ar2VNOD81jSQ1YCct00WIysfCOy');
$customer = $stripe->customers->create([
    'description' => 'example customer',
    'email' => 'email@example.com',
    'payment_method' => 'pm_card_visa',
]);

$charge = $stripe->charges->create([
    'amount' => 2000,
    'currency' => 'usd',
    'source' => 'tok_visa',
    'description' => 'My First Test Charge (created for API docs)',
  ]);
print_r($charge);

?>