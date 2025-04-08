
<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


// curl_setopt_array($ch,
//     [
//       CURLOPT_URL => "https://maison-re-agents.boxdice.com.au/website_api/sales_listings?after=",
//       CURLOPT_RETURNTRANSFER => true ,      
//       CURLOPT_HTTPHEADER => [ "Authorization: Api-Key token=267677bec038c0f85bfbdbc552dd055d26d2e579"],
//     ]
// );

$responce = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

$date = json_decode($responce, true);

print_r($status_code);

echo "<hr>";

$data = [
    'key1' => 'value1',
    'key2' => 'value2'
];

print_r(http_build_query($data));