<!-- this is a successfull code for send sms WITH VARIABLE -->
 
<?php

$name= "Testing";

$fields = [
"sender_id"=>"URCCSL",
"message"=>"211098",
"variables_values"=>$name,
"language"=>"english",
"route"=>"dlt",
"numbers"=>"918446590779",
"DLT_TE_ID"=>"1707177315122905180"
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
