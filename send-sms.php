<?php

// Check required fields
if (!isset($_POST['phone']) || !isset($_POST['name'])) {
    exit("Required data not received");
}

// Get form data
$phone = preg_replace('/[^0-9]/', '', $_POST['phone']);
$name  = htmlspecialchars($_POST['name']);

// Add India country code if missing
if (strlen($phone) == 10) {
    $phone = "91" . $phone;
}

// Fast2SMS API Key
$apiKey = "cW0zxjVzKDt8LbKrdsn0aGXJZwUwRmooAh2mdJv8sfsDvf3U8Vz97bpn4zlH";


// API Fields
$fields = array(
    "sender_id" => "URCCSL",
    "message" => "211098",
    "variables_values" => $name,
    "language" => "english",
    "route" => "dlt",
    "numbers" => $phone,
    "DLT_TE_ID" => "1707177315122905180"
);

// Initialize CURL
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($fields),
    CURLOPT_HTTPHEADER => array(
        "authorization: $apiKey",
        "content-type: application/json"
    ),
));

// Execute request
$response = curl_exec($curl);

// Close connection
curl_close($curl);

// Return response
echo $response;
