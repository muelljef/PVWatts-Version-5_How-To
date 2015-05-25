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
        installed.[4]

        The tilt angle can be set to the locations latitude if you are unsure of the actual tilt angle. This will typically
        optimize energy production for the tilt angle with increasing the angle favoring more production in winter and lowering
        favoring more production in summer.[4]

        <a href="http://rredc.nrel.gov/solar/calculators/pvwatts/version1/change.html">[4]PVWatts1 Changing System Parameters</a>
    </p>
    <p>
        As the roof pitch might determine the tilt angle of the array lets have a look at how the tilt angle affects the
        output. According to this eHow article <a href="http://www.ehow.com/info_12130348_standard-roof-pitch.html">What is the Standard Roof Pitch</a>
        The most common residential pitches are 4/12 to 9/12.
    </p>
    <p>
        I have setup an example to estimate kWh generated based on different roof pitches. A 4/12 pitch = 18.4 degress,
        6/12 pitch = 26.6 degrees, and a 9/12 pitch = 36.9 degrees.[reference]
    </p>
    <?php include 'tiltExample.php' ?>
    <p>
        Some interesting results are that the energy production at tilt angles of 26.6 and 36.9 degrees were better than
        tilt angles of the latitude. In previous documentation for PV Watts it had been stated that the tilt=latitude
        generally optimized energy production. In more recent versions it of PVWatt documentation they simply state that
        if designers are unsure of the tilt angle just use the latitude. The tilt=latitude might not guarantee optimization,
        but if you are just interested in rough estimate it is not a bad number to use. The overall change based on tilt is
        not as great as other factors such as module or array type.
    </p>
    <h3>Azimuth</h3>
    <p>
        Wikipedia notes the NREL definition for Azimuth is "the most commonly accepted convention for analyzing solar irradiation,
        e.g. for solar energy applications, is clockwise from due north, so east is 90°, south is 180° and west is 270°." [3]
        "Applies only to fixed arrays with no tracking. The array's east-west orientation in degrees. An azimuth value
        of zero is facing north, 90 degrees = east, 180 degrees = south, and 270 degrees = west, regardless of whether
        the array is in the northern or southern hemisphere."[2]
        "For systems north of the equator, a typical azimuth value would be 180 degrees. For systems south of the equator, a typical value would be 0 degrees."[2]

        Essentially what this means is that for a fixed array is is best to mount it facing directly south (180 degrees)
        for a location in the northern hemisphere like our example.

        ////This may be changed to optimize energy production based on weather (clouds typically appear in 1 direction)
    </p>
    <a href="http://en.wikipedia.org/wiki/Solar_azimuth_angle">[3]Wikipedia - Azimuth Angle</a>
    <h3>Location (latitude and longitude) (required)</h3>
    <p>
        The location of the installation is used to determine which weather stations data to use for calculating the estimate.
        Solar irradiance varies greatly by location so naturally this is a required field.
    </p>
    <p>
        We will need to get the 'location' or latitude and longitude of the campus. The API essentially gives us 2
        ways to specify location either we can specify latitude and longitude ourselves or we can give it a result from
        Google's geocoding api. The third option which specifies a data file using the NREL solar data query identifies the
        file you need by using one of the first two choices google address or lat/lon parameters. The solar data query might
        be useful if you wanted to display the different weather station choices to the user and let them pick their station
        rather than just use the closest station. Then you can just specify the data file to use.
    </p>
    <p>
        Additionally you might use the solar data query to get a better look at the nearest stations because one geographically
        a station a little further away might be more appropriate than the closest one because it is at the same elevation
        and climate or if you are looking for an international or remote location and you are not sure if there is a station
        nearby.
    </p>
    <p> It's easy to grab coordinates from Google maps. Just navigate to the desired location and drop a pin next to the
        desired location. The latitude and longitude will appear under the name and address in a light gray. See the
        following the picture for reference.
    </p>
    <p><img src="googleMapsLatLon.png"></p>
    <p> The latitude is 44.563628 and the longitude is -123.279460. Please notice the negative sign on the longitude. Some
        sites will drop the negative sign and give the longitude a direction of West.
    </p>
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