<?php
    // sets the timezone to Melbourne, Australia
    date_default_timezone_set('Australia/Melbourne');

    // starts the session
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <!--- imports Open Sans font --->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
    <link rel="stylesheet" href="./stylesheet.css" />
</head>

<body>
    <div class="header_div">
        <h1> Current Weather: Sydney Australia </h1>
    <div>

    <div class="city_container">
        <div class="city_box">
            <div class="time">
                <div><?php echo date("l g:i a", time()); ?></div>
                <div><?php echo date("jS F, Y", time()); ?></div>
                <div><?php echo ucwords($_SESSION["sydney_weather_description"]); ?></div>
            </div>

            <div class="description_and_temperature">
                <img src="http://openweathermap.org/img/w/<?php echo $_SESSION["sydney_weather_icon"]; ?>.png"class="weather_icon"/> 
                max: <?php echo $_SESSION["sydney_max_temp"]; ?>°C
                min: <span class="min_temperature"><?php echo $_SESSION["sydney_min_temp"]; ?>°C</span>
            </div>

            <div class="wind_and_humidity">
                <div>Humidity: <?php echo $_SESSION["sydney_humidity"]; ?> %</div>
                <div>Wind: <?php echo $_SESSION["sydney_wind"]; ?> km/h</div>
            </div>
        </div>

        <div> 
            <!-- displays map of Sydney -->
            <div>
                <!-- NOTE: I'm able to use the map api to render the default location (Berlin), however I could not figure
                    out the the row and column of Sydney's map tile. THIS IS STUPID. A MAP API SHOULD USE X AND Y COORDS TO
                    RENDER A TILE. I am very cross with whoever developed this api. 0/10! -->
                <img src="https://1.base.maps.ls.hereapi.com/maptile/2.1/maptile/newest/normal.day/13/4400/2686/512/png8?apiKey=dYjlSUofgWG3l3OMEfQPibD-FUHZ7x2BUiu1ZWaoN60"class="weather_icon"/>
            </div>
        <div>
    <div>
    

    <div class="link_div">
        <a href="https://github.com/rmit-wp-s2-2021/s3720145-a3"> Visit the Github repo for this assignment! </a>
    </div>  
    
</body>
</html>