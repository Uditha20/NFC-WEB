<!-- MjgwMTg1OTYwMzEzOTEyNzc2OTUxMjI2NTE3MjI4MTQ3ODg0MTIxMQ== -->


<?php
$merchant_id = '1229822'; // Replace with your Merchant ID
$merchant_secret = 'MjgwMTg1OTYwMzEzOTEyNzc2OTUxMjI2NTE3MjI4MTQ3ODg0MTIxMQ=='; // Replace with your Merchant Secret

function generateHash($order_id, $amount, $currency) {
    global $merchant_id, $merchant_secret;
    
    return strtoupper(
        md5(
            $merchant_id . 
            $order_id . 
            number_format((float)$amount, 2, '.', '') . 
            $currency .  
            strtoupper(md5($merchant_secret)) 
        ) 
    );
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = uniqid(); // Generate a unique order ID
    $amount = $_POST['amount']; // Get the amount from the form
    $currency = $_POST['currency']; // Get the currency from the form

    $hash = generateHash($order_id, $amount, $currency);

    $payment_data = [
        'merchant_id' => $merchant_id,
        'return_url' => 'http://localhost/nfcweb', // Replace with your return URL
        'cancel_url' => 'http://localhost/nfcweb', // Replace with your cancel URL
        'notify_url' => 'http://localhost/nfcweb', // Replace with your notify URL
        'order_id' => $order_id,
        'items' => 'Purchase', // Required field: Description of the item
        'amount' => number_format((float)$amount, 2, '.', ''),
        'currency' => $currency,
        'hash' => $hash,
        'first_name' => 'John', // Required: Customer first name
        'last_name' => 'Doe', // Required: Customer last name
        'email' => 'johndoe@example.com', // Required: Customer email
        'phone' => '0771234567', // Required: Customer phone
        'address' => '123, Street, City', // Required: Customer address
        'city' => 'Colombo', // Required: Customer city
        'country' => 'Sri Lanka', // Required: Customer country
    ];
    
    // Generate an auto-submitting form
    echo '<form id="payhere_form" action="https://sandbox.payhere.lk/pay/checkout" method="POST">';
    foreach ($payment_data as $key => $value) {
        echo '<input type="hidden" name="' . htmlspecialchars($key) . '" value="' . htmlspecialchars($value) . '">';
    }
    echo '</form>';
    echo '<script>document.getElementById("payhere_form").submit();</script>';
    exit();
}
?>
