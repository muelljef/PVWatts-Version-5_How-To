<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>How to use the NREL PVWatts (Version 5) - Example</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="heading1">
    <h1>How to use the NREL PVWatts (Version 5) - Example</h1>
    <p>by Jeff Mueller</p>
</div>
<div id="content">
    <p>So now we have the API key let's jump into an example usage of the API. We will examine installing a 4kW
        fixed axis roof mounted system at the Oregon State University Campus. Below are the parameters we will pass to
        the API. I will go into more detail on these parameters in the following pages, but will focus on the GET request
        and basic results on this page.
    </p>
    <p> For all of my examples I will be using cURL and php to make the GET request from the NREL PVWatts API.
    </p>
    <h3>Example</h3>
    <p> For our example lets look at installing a 4kW PV array on campus at Oregon State University. We have the format: json
        the api_key and the system capacity: 4kW. Let's start to gather the other variables.
    </p>

    <p> The required parameters are as follows: format, api_key, system_capacity, module_type, losses, array_type, tilt,
        azimuth, and an option that specifies location. We will use latitude and longitude for the location option.
    </p>
    <ul>
        <li>Format: json</li>
        <li>System Size: 4 kW</li>
        <li>Module Type: Standard (0)</li>
        <li>Losses: 14%</li>
        <li>Array Type: Fixed - Roof Mounted (1)</li>
        <li>Tilt: latitude (44.563628)</li>
        <li>Azimuth: 180</li>
        <li>Latitude: 44.563628</li>
        <li>Longitude: -123.279460</li>
    </ul>
    <p>According to the documentation you use the following request url</p>
    <p class="code">GET /api/pvwatts/v5.format?parameters</p>
    <p>This syntax is added to the base NREL developer site to look something like this</p>
    <p>http://developer.nrel.gov/api/pvwatts/v5.format?parameters</p>
    <p>Then we replace the format with json for our example and add the parameters to get the following:</p>
    <p class="code">
        $infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460&azimuth=180&tilt=44.563628&array_type=1&module_type=0&losses=14';<br>
        $curl = curl_init();<br>
        curl_setopt($curl, CURLOPT_URL, $infoUrl);<br>
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);<br>
        $result = json_decode(curl_exec ($curl));<br>
        curl_close($curl);<br>
        var_dump($result);<br>
    </p>
    <p>Note: The $apiKey variable contains my api key for the NREL developer site and you would need to save you key to
        the same variable name if using this code directly.</p>
    <p> And the following is the JSON results from that request. Notice the JSON returns a number of different items including the
        input parameters you passed to the API, errors, station_info, output and others. We are probably most interested in
        the ac_monthly array or the ac_annual value for basic cost analysis. These values indicate what the power production
        that can be used in the typical home or sold back to the grid if possible. The ac_annual value is 4768.39453125 kWh.
    </p>
    <p class="code">
    <?php include 'pvwattEx.php'?>
    </p>
    <p> The error warnings can be particularly
        helpful because when in the middle of writing this How To Guide my API key became obsolete and I had to get a new
        key. When I signed up only a week ago they did not require a website with the key sign up. When I went to make requests
        today I received a warning that I had an invalid API key. Leading me back to the API key sign-up page. The error
        messages will also notify you if you do not have enough parameters. Consider the following example that would have
        worked with PVWatts version 4 which only required a system size, location (lat, lon), format, and api key.
    </p>
    <p class="code">
        $infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460';<br>
    </p>
    <p class="code">
        <?php include 'pvwattErr.php' ?>
    </p>
    <p>
        In the next part I will explain the required input variables in more detail and explore a few different options
        and how they impact the system ac_annual output.
    </p>
</div>
<div id="prevNext">
    <div id="prev"><a href="apiKey.php">PREV</a></div>
    <div id="next"><a href="variablesOne.php">NEXT</a></div>
</div>
<div id="parts">
    <?php include 'links.php' ?>
</div>
</body>
</html>