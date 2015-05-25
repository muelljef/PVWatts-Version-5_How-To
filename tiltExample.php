<?php

$apiKey = 'KtTr4Gz4siLej2QSBEBF2brgqjFuuCPCynS2Qejw';
//building the url
$infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460&azimuth=180&tilt=18.4&array_type=1&module_type=0&losses=14';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $infoUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = json_decode(curl_exec ($curl));
curl_close($curl);

echo '<p> annual_ac for tilt of 18.4 degrees ' . $result->outputs->ac_annual . '</p>';


$infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460&azimuth=180&tilt=26.6&array_type=1&module_type=0&losses=14';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $infoUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = json_decode(curl_exec ($curl));
curl_close($curl);

echo '<p> annual_ac for tilt of 26.6 degrees ' . $result->outputs->ac_annual . '</p>';


$infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460&azimuth=180&tilt=36.9&array_type=1&module_type=0&losses=14';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $infoUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = json_decode(curl_exec ($curl));
curl_close($curl);

echo '<p> annual_ac for tilt of 36.9 degrees ' . $result->outputs->ac_annual . '</p>';

$infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460&azimuth=180&tilt=44.563628&array_type=1&module_type=0&losses=14';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $infoUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = json_decode(curl_exec ($curl));
curl_close($curl);

echo '<p> annual_ac for tilt of 44.563628 degrees ' . $result->outputs->ac_annual . '</p>';

?>