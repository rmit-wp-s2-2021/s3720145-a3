<!-- create an array to store strings of the locations of interest -->
<?php
    $cities = array("Sydney, Australia" , "Tokyo, Japan", "Barcelona, Spain");

    // sets the timezone to Melbourne, Australia
    date_default_timezone_set('Australia/Melbourne');

    // starts the session
    session_start();
?>

<!-- api password: wp-pass12 -->

<!DOCTYPE html>
<html>
<head>
    <!--- imports Open Sans font --->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
   
</head>

<body>
    <div>
        <h1> Current Weather: Sydney Australia </h1>
    <div>

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
    
</body>
</html>