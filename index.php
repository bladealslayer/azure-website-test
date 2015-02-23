<?php

echo "btab-test-website\n";
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'http://10.123.1.5');
$resp = curl_exec($curl);

echo $resp;

?>
