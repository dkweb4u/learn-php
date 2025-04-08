<?php



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://maison-re-agents.boxdice.com.au/website_api/sales_listings?after=");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Authorization: Api-Key token=267677bec038c0f85bfbdbc552dd055d26d2e579"
));

$response = curl_exec($ch);
curl_close($ch);

$response= json_decode($response,true);

print_r($response);


?>