<?php

echo "btab-test-website<br/>";
$curl = curl_init();

echo "10.123.1.4:<br/>";
curl_setopt($curl, CURLOPT_URL, 'http://10.123.1.4');
$resp = curl_exec($curl);

echo $resp;
echo "10.123.1.5:<br/>";
curl_setopt($curl, CURLOPT_URL, 'http://10.123.1.30');
$resp = curl_exec($curl);

echo $resp;

?>
