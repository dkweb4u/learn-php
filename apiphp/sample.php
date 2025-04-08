<?php

$ch = curl_init();
 


curl_setopt_array($ch, [
    CURLOPT_URL => 'https://api.unsplash.com/photos/random',
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => [
        "Authorization: Client-ID hTEIaJes_if54QEkX94Q9yunCvGPvoBV4Xh7HTsKUug"
    ],
    // CURLOPT_HEADER => true
    ]);

$responce = curl_exec($ch);

$status_code = curl_getinfo($ch,CURLINFO_HTTP_CODE);

$status_type = curl_getinfo($ch,CURLINFO_CONTENT_TYPE);


curl_close($ch);

print_r($responce);

echo $status_code;

echo $status_type ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form >
        <input type="text" name="dk">
        <input type="text" name="pass">
  <button type="submit" >send</button>
    </form>
</body>
</html>

