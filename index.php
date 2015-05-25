<?php
/**
 * Created by PhpStorm.
 * User: Jeff
 * Date: 5/23/2015
 * Time: 12:01 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>How to use the NREL PVWatts (Version 5) - Introduction</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="heading1">
        <h1>How to use the NREL PVWatts (Version 5) - Introduction</h1>
        <p>by Jeff Mueller</p>
    </div>
    <div id="content">
        <p> The NREL (National Renewable Energy Lab) PVWatts API estimates the energy production for a potential
            residential or small commercial solar PV system. You need to specify a number of details related to the
            system. This guide will show how to get results for a specific example using PHP and cURL. In my guide I will
            go into some detail about the required parameters to give guidance on why I picked certain aspects for my
            example and what some of the other options are so that you can pick the right details.
        </p>
        <p>The PVWatts API documenation can be found at this website
            <a href="https://developer.nrel.gov/docs/solar/pvwatts-v5/">PVWatts API Documentation</a>
        </p>
    </div>
    <div id="prevNext">
        <div id="prev">PREV</div>
        <div id="next"><a href="apiKey.php">NEXT</a></div>
    </div>
    <div id="parts">
            <?php include 'links.php' ?>
    </div>
</body>
</html>
