<!-- create an array to store strings of the locations of interest -->
<?php
    $cities = array("Sydney, Australia" , "Tokyo, Japan", "Barcelona, Spain");

    // sets the timezone to Melbourne, Australia
    date_default_timezone_set('Australia/Melbourne');

    // starts the session
    session_start();
?>

<!-- sets session variables to store Sydney's weather data -->
<?php
    // first we must retrive the weather information of Sydney
    $url = "api.openweathermap.org/data/2.5/weather?q=Sydney,Australia&appid=85c116df3468356cb87a423b00347fc4&units=metric";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $response = curl_exec($ch);
    $current_weather = json_decode($response);

    // now we assign values to the session variables
    $_SESSION["sydney_weather_description"] = $current_weather->weather[0]->description;
    $_SESSION["sydney_weather_icon"] = $current_weather->weather[0]->icon;
    $_SESSION["sydney_min_temp"] = $current_weather->main->temp_min;
    $_SESSION["sydney_max_temp"] = $current_weather->main->temp_max;
    $_SESSION["sydney_humidity"] = $current_weather->main->humidity; 
    $_SESSION["sydney_wind"] = $current_weather->wind->speed;
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
        <h1> Current Weather of Cites </h1>
    <div>


    <div class="city_container">
        <!-- Here I am using a foreach loop to the array of cities instantiated above. Whats good about this implementation is that it's easily scalable! -->
        <!-- Essentially the foreach loop says: "For each city that exists in the $cities array ..." -->
        <?php foreach($cities as $city) { ?>
            <div class="city_box">
                <h3><?php echo $city ?></h3>

                <!-- gets weather information for the city through an API call -->
                <?php 
                    $url = "api.openweathermap.org/data/2.5/weather?q={$city}&appid=85c116df3468356cb87a423b00347fc4&units=metric";
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_URL, $url);
                    $response = curl_exec($ch);
                    $current_weather = json_decode($response);
                    // print_r($current_weather);
                ?>

                <!-- gets the current time details and the description of the weather -->
                <div class="time">
                    <div><?php echo date("l g:i a", time()); ?></div>
                    <div><?php echo date("jS F, Y", time()); ?></div>
                    <div><?php echo ucwords($current_weather->weather[0]->description); ?></div>
                </div>

                <!-- gets an image which matches the description, as well as the minimum and maximum temperatures of the city -->
                <div class="description_and_temperature">
                    <img src="http://openweathermap.org/img/w/<?php echo $current_weather->weather[0]->icon; ?>.png" class="weather_icon"/> 
                    max: <?php echo $current_weather->main->temp_max; ?>°C
                    <span class="min_temperature">min: <?php echo $current_weather->main->temp_min; ?>°C</span>
                </div>

                <!-- gets the wind and humidity information of the city -->
                <div class="wind_and_humidity">
                    <div>Humidity: <?php echo $current_weather->main->humidity; ?> %</div>
                    <div>Wind: <?php echo $current_weather->wind->speed; ?> km/h</div>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class="link_div">
        <a href="https://titan.csit.rmit.edu.au/~s3720145/wp/a3/details.php"> Details page: Sydney, Australia </a>
    <div>
</body>
</html>