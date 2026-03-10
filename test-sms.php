<?php

$fields = [
"sender_id"=>"URCCSL",
"message"=>"Test message from website",
"language"=>"english",
"route"=>"p",
"numbers"=>"918446590779"
];

$curl = curl_init();

curl_setopt_array($curl, [
CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => json_encode($fields),
CURLOPT_HTTPHEADER => [
"authorization: cW0zxjVzKDt8LbKrdsn0aGXJZwUwRmooAh2mdJv8sfsDvf3U8Vz97bpn4zlH",
"content-type: application/json"
],
]);

$response = curl_exec($curl);
curl_close($curl);

echo $response;