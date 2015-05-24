<?php
/**
 * Created by PhpStorm.
 * User: Jeff
 * Date: 5/23/2015
 * Time: 3:03 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>How to use the NREL PVWatts (Version 4) - Basic Example</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="heading1">
    <h1>How to use the NREL PVWatts (Version 4) - Basic Example</h1>
    <p>by Jeff Mueller</p>
</div>
<div id="content">
    <p> For all of my examples I will be using cURL and php to make the GET request from the NREL PVWatts API.
    </p>
    <p>
        The 3 basic requirements to get an estimate are the output format, JSON or XML, and system size and address.
    </p>
    <p> Let's get stuck into an easy example. Say we want to setup a 4kW PV array on campus at Oregon State University.
        We will use the longitude and latitude of 44.56 and longitude of 123.28 and we will make an estimate for a 4kW
        size system. We will use a format of JSON for the results
    </p>
    <p>
        The code to do so.
        system_size=4
        api_key=youApiKeyHere

        Insert image of code
    </p>
    <p>
        system_size: '4'
    </p>
    <p>Coordinates from google search of https://www.google.com/search?q=oregon+state+university+longitude+latitude&ie=utf-8&oe=utf-8</p>
</div>
<div id="prevNext">
    <div id="prev">PREV</div>
    <div id="next">NEXT</div>
</div>
<div id="parts">
    <?php include 'links.php' ?>
</div>
</body>
</html>