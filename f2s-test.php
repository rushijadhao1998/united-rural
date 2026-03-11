<?php

$fields = [
    "sender_id" => "TXTIND",
    "message" => "This is a test SMS from Fast2SMS API",
    "language" => "english",
    "route" => "q",
    "numbers" => "8446590779" // put your mobile number here
];

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($fields),
    CURLOPT_HTTPHEADER => [
        "authorization: cW0zxjVzKDt8LbKrdsn0aGXJZwUwRmooAh2mdJv8sfsDvf3U8Vz97bpn4zlH",
        "accept: */*",
        "cache-control: no-cache",
        "content-type: application/json"
    ],
]);

$response = curl_exec($curl);

curl_close($curl);

echo "Fast2SMS Response: " . $response;

?>