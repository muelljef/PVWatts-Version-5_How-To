<?php

$apiKey = 'KtTr4Gz4siLej2QSBEBF2brgqjFuuCPCynS2Qejw';
//building the url

$infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460&azimuth=180&tilt=44.563628&array_type=0&module_type=0&losses=14';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $infoUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = json_decode(curl_exec ($curl));
curl_close($curl);
echo '<p> annual_ac for fixed open - rack array: ' . $result->outputs->ac_annual . '</p>';

$infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460&azimuth=180&tilt=44.563628&array_type=1&module_type=0&losses=14';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $infoUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = json_decode(curl_exec ($curl));
curl_close($curl);
echo '<p>annual_ac for fixed - roof mounted array: ' . $result->outputs->ac_annual . '</p>';

$infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460&azimuth=180&tilt=44.563628&array_type=2&module_type=0&losses=14';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $infoUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = json_decode(curl_exec ($curl));
curl_close($curl);
echo '<p>annual_ac for 1-Axis array: ' . $result->outputs->ac_annual . '</p>';

$infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460&azimuth=180&tilt=44.563628&array_type=4&module_type=0&losses=14';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $infoUrl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = json_decode(curl_exec ($curl));
curl_close($curl);
echo '<p>annual_ac for 2-Axis array: ' . $result->outputs->ac_annual . '</p>';

?>