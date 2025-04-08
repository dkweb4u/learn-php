<?php
  if(isset($_POST['input'])){
    $url = 'https://www.toptal.com/developers/cssminifier/api/raw';

    // init the request, set various options, and send it
    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => ["Content-Type: application/x-www-form-urlencoded"],
        CURLOPT_POSTFIELDS => http_build_query($_POST)
    ]);

    $minified = curl_exec($ch);

    // finally, close the request
    curl_close($ch);

    // output the $minified CSS
    echo $minified;
  }
?>