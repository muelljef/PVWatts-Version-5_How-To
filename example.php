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
    <div class="contents">
        <p>So now we have the API key let's jump into an example usage of the API. We will examine installing a 4kW
            fixed axis roof mounted system at the Oregon State University Campus. Below are the parameters we will pass to
            the API. I will go into more detail on these parameters in the following pages, but will focus on the GET request
            and basic results on this page. For all of my examples I will be using cURL and PHP to make the GET request from the NREL PVWatts API.
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
        <p>According to the documentation the following url is used with a GET request</p>
    </div>
    <div class="code">
        GET /api/pvwatts/v5.format?parameters
    </div>
    <div class="contents">
        <p>This url is appended to the base NREL developer site to look something like this</p>
    </div>
    <div class="code">
        http://developer.nrel.gov/api/pvwatts/v5.format?parameters
    </div>
    <div class="contents">
        <p>Then we replace the format with json for our example and add the parameters. The following is the PHP cURL GET requests for the data:</p>
    </div>
    <div class="code">
        $infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460&azimuth=180&tilt=44.563628&array_type=1&module_type=0&losses=14';<br>
        $curl = curl_init();<br>
        curl_setopt($curl, CURLOPT_URL, $infoUrl);<br>
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);<br>
        $result = json_decode(curl_exec ($curl));<br>
        curl_close($curl);<br>
        var_dump($result);<br>
    </div>
    <div class="contents">
        <p> Note: The $apiKey variable contains my api key for the NREL developer site and you would need to save your key to
            the same variable name if using this code directly.</p>
        <p> The following is the JSON results from the above request. Notice the JSON returns a number of different items including the
            input parameters you passed to the API, errors, station_info, output and others. For now we will focus on the ac_annual output.
            This values indicates what the power production that a residential or commercial property can use for the year.
            The ac_annual value is 4768.39453125 kWh.
        </p>
    </div>
    <div class="results">
        <?php include 'pvwattEx.php'?>
    </div>
    <div class="contents">
        <p> The error warnings can be particularly
            helpful because when in the middle of writing this How To Guide my API key became obsolete and I had to get a new
            key. When I signed up only a week ago they did not require a website with the key sign up. When I went to make requests
            today I received a warning that I had an invalid API key. Leading me back to the API key sign-up page. The error
            messages will also notify you if you do not have enough parameters. Consider the following example that would have
            worked with PVWatts version 4 which only required a system size, location (lat, lon), format, and api key. You can
            see that if you try the following url with just those parameters you will get an error message indicating that
            there are missing required parameters.
        </p>
    </div>
    <div class="code">
        $infoUrl = 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=' . $apiKey . '&system_capacity=4&lat=44.563628&lon=-123.279460';<br>
    </div>
    <br>
    <div class="results">
        <?php include 'pvwattErr.php' ?>
    </div>
    <div class="contents">
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