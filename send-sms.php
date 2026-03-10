<?php

if(!isset($_POST['phone'])){
    exit("Phone number not received");
}

$phone = preg_replace('/[^0-9]/','',$_POST['phone']);

$fields = array(
"sender_id" => "URCCSL",
"message" => "Wish You Happy Birthday -UNITED RURAL SOCIETY",
"language" => "english",
"route" => "p",
"numbers" => $phone,
"flash" => "0",
"DLT_TE_ID" => "1707171809764339483"
);

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => json_encode($fields),
CURLOPT_HTTPHEADER => array(
"authorization: cW0zxjVzKDt8LbKrdsn0aGXJZwUwRmooAh2mdJv8sfsDvf3U8Vz97bpn4zlH",
"content-type: application/json"
),
));

$response = curl_exec($curl);

curl_close($curl);

echo $response;

?>