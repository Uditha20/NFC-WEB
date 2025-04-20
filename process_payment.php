<!-- MjgwMTg1OTYwMzEzOTEyNzc2OTUxMjI2NTE3MjI4MTQ3ODg0MTIxMQ== -->


<?php
$merchant_id = '1229822'; // Replace with your Merchant ID
$merchant_secret = 'MjgwMTg1OTYwMzEzOTEyNzc2OTUxMjI2NTE3MjI4MTQ3ODg0MTIxMQ=='; // Replace with your Merchant Secret

function generateHash($order_id, $amount, $currency)
{
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
    $userData = $_SESSION['user_data'] ?? [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'mobile' => '1234567890',
        'address' => 'No. 1, Example Street, City',
        'website' => 'https://example.com'
    ];
    // Explode the name into parts
    $nameParts = explode(' ', $userData['name'], 2);
    $firstName = $nameParts[0] ?? 'John';
    $title = $nameParts[1] ?? 'Doe'; // Default if no second word exists
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
        'name' => $firstName, // First word of the name
        'title' => $title, // Second word of the name (if exists)
        'website' => $userData['website'] ?? 'no', // Website
        'mobile' => $userData['mobile'] ?? 'no', // Mobile number
        'email' => $userData['email'] ?? 'no', // Correct email assignment
        'address' => $userData['address'] ?? 'no', // Address

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