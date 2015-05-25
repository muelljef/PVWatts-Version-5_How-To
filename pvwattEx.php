<?php

$apiKey = 'KtTr4Gz4siLej2QSBEBF2brgqjFuuCPCynS2Qejw';
//building the url
$infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460&azimuth=180&tilt=44.563628&array_type=1&module_type=0&losses=14';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $infoUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = json_decode(curl_exec ($curl));
curl_close($curl);
var_dump($result);

?>