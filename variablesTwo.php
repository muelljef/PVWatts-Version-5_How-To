<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>How to use the NREL PVWatts (Version 5) - Variables Page 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="heading1">
        <h1>How to use the NREL PVWatts (Version 5) - Variables Page 2</h1>
        <p>by Jeff Mueller</p>
    </div>
    <div id="content">
        <h3>Tilt</h3>
        <p>
            The tilt angle is the angle at which the array is tilted in relation to the ground or horizontal. So a tilt angle of
            0 degrees will be flat like a table and 90 degrees would be standing up perpendicular. The tilt angle might be dictated
            by the mounting surface such as the roof or ground, or you may have more say in the tilt angle with how the system is
            installed.[1]
            The tilt angle is generally set to the locations latitude if you are unsure of the actual tilt angle. This will typically
            optimize energy production for the tilt angle with increasing the angle favoring more production in winter and lowering
            favoring more production in summer.[1]
            Note the tilt angle will be ignored in 1-axis and 2-axis systems as the array pivots on its axis changing the tilt
            throughout the day.
        </p>
        <p>
            As the roof pitch might determine the tilt angle of the array lets have a look at how the tilt angle affects the
            output. According to this eHow article <a href="http://www.ehow.com/info_12130348_standard-roof-pitch.html">What is the Standard Roof Pitch</a>
            The most common residential pitches are 4/12 to 9/12.
        </p>
        <p>
            I have setup an example to estimate annual energy production based on different roof pitches. A 4/12 pitch = 18.4 degress,
            6/12 pitch = 26.6 degrees, and a 9/12 pitch = 36.9 degrees, and our original latitude 44.563628 degrees.[1]
        </p>
        <div class="inlineResults">
            <?php include 'tiltExample.php' ?>
        </div>
        <p>
            Some interesting results are that the energy production at tilt angles of 26.6 and 36.9 degrees were better than
            tilt angles of the latitude for the system. In previous documentation for PV Watts[1] it had been stated that the
            tilt was set equal to the latitude that would
            generally optimized energy production. In more recent versions it of PVWatt documentation they simply state that
            if designers are unsure of the tilt angle they can just use the latitude. Our example proves that tilt equal to latitude
            does not necessarily optimize energy production, but you can see that the overall change based on tilt angle
            is not as great as the change in production due to other factors such as module or array type.
        </p>
        <h3>Azimuth</h3>
        <p>
            The explanation for the NREL definition of Azimuth I liked best was Wikipedia's which is "the most commonly accepted convention for analyzing solar irradiation,
            e.g. for solar energy applications, is clockwise from due north, so east is 90°, south is 180° and west is 270°." [2]

            Essentially what this means is that for a fixed array in the northern hemisphere it is best to mount it facing directly south (180 degrees).
            If you were analyzing an array in the southern hemisphere you would want to use and Azimuth of 0 degrees. Note that the
            Azimuth will be ignored for a 2-axis system as the azimuth axis moves with this system.
        </p>
        <h3>Location (latitude and longitude)</h3>
        <p>
            The location of the installation is used to determine which weather stations data to use for calculating the estimate.
            Solar irradiance varies greatly by location so naturally this is a required field.
        </p>
        <p>
            I won't go into detail explaining what longitude and latitude is, but I will cover our options for input into the API.
            The API essentially gives us 2 ways to specify our system location. Either we can specify latitude and longitude ourselves or we can give it a result from
            Google's geocoding API. The third option which specifies a data file using the NREL solar data query identifies the
            file you need by using one of the first two choices so essentially there are 2 options. The solar data query might
            be useful if you wanted to display the different weather station choices to the user and let them pick their station
            rather than just use the closest station. If you are doing that then you can just specify the data file to use.
        </p>
        <p>
            Additionally you might use the solar data query to get a better look at the nearest stations because
            a station a that might not be the closest might be the best fit with respect to elevation and climate.
        </p>
        <p> To get the coordinates it's easy to grab coordinates from Google maps. Just navigate to the desired location and drop a pin next to it.
            The latitude and longitude will appear under the name and address in a light gray. See the
            following the picture for reference.
        </p>
        <p><img src="googleMapsLatLon.png"></p>
        <p> Please notice the negative sign on the longitude. Some
            sites will drop the negative sign and give the longitude a direction of West, if they do this make sure to
            add a negative sign to the West longitudinal coordinate.
        </p>
        <a href="http://rredc.nrel.gov/solar/calculators/pvwatts/version1/change.html">[1]PVWatts1 Changing System Parameters</a><br>
        <a href="http://en.wikipedia.org/wiki/Solar_azimuth_angle">[2]Wikipedia - Azimuth Angle</a>
    </div>
<div id="prevNext">
    <div id="prev"><a href="variablesOne.php">PREV</a></div>
    <div id="next">NEXT</div>
</div>
<div id="parts">
    <?php include 'links.php' ?>
</div>
</body>
</html>