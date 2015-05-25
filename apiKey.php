<?php
/**
 * Created by PhpStorm.
 * User: Jeff
 * Date: 5/23/2015
 * Time: 2:16 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>How to use the NREL PVWatts (Version 5) - Obtaining an API Key</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
    <div id="heading1">
        <h1>How to use the NREL PVWatts (Version 5) - Obtaining an API Key</h1>
        <p>by Jeff Mueller</p>
    </div>
    <div id="content">
        <p> First, in order to use the API you must have a key. It is free and pretty easy to obtain an API key. Just visit this site
            <a href="https://api.data.gov/signup/">API DATA.GOV Sign-up</a> and enter your first name last name, email address,
            and website you will use the key with. The key is given to you right away as well as emailed. The key will also allow you access to
            many more US government API's if you are interested.
        </p>
        <p><img src="API_key_signup.png"></p>
        <p>
            A note on having to include a website: I was able to get a key for my intended website. I was able to then use the key with examples on a local host
            before uploading to the website. So you can use the key for testing phases without having to use it through a
            live website. If you don't have a website, there are a lot of free website builders if you just type in 'free website' in a
            search many will come up. This will allow you to get started with the API without having to pay anything.
        </p>
    </div>
    <div id="prevNext">
        <div id="prev"><a href="index.php">PREV</a></div>
        <div id="next"><a href="example.php">NEXT</a></div>
    </div>
    <div id="parts">
        <?php include 'links.php' ?>
    </div>
</body>
</html>