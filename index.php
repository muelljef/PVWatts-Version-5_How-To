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
    <title>How to use the NREL PVWatts (Version 4) - Introduction</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="heading1">
        <h1>How to use the NREL PVWatts (Version 4) - Introduction</h1>
        <p>by Jeff Mueller</p>
    </div>
    <div id="content">
        <p> The NREL (National Renewable Energy Lab) PVWatts API will estimate the energy production for a potential
            residential and small commercial solar PV system. It only requires a system size and address from the user to
            make an estimate using default settings and data from the NSRDB (National Solar Radiation Data Base). Of
            course you can specify some of your own inputs such as the azimuth and tilt to get a more accurate estimate
            of the systems potential output.
        </p>
        <p> Add Link to API website</p>
        <p> Reference API document website and NSRDB as source for info</p>
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
