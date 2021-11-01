<!-- create an array to store strings of the locations of interest -->
<?php
    $cities = array("Sydney, Australia" , "Tokyo, Japan", "Barcelona, Spain");

    // sets the timezone to Melbourne, Australia
    date_default_timezone_set('Australia/Melbourne');
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
        <h1> Current Weather of Cites </h1>
    <div>

    <div class="city_container">
        <?php foreach($cities as $city) { ?>
            <div class="city_box">
                <h3><?php echo $city ?></h3>
                <?php 
                    $url = "api.openweathermap.org/data/2.5/weather?q={$city}&appid=85c116df3468356cb87a423b00347fc4&units=metric";
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_URL, $url);
                    $response = curl_exec($ch);
                    $current_weather = json_decode($response);
                    //print_r($current_weather);
                ?>

                <div class="time">
                    <div><?php echo date("l g:i a", time()); ?></div>
                    <div><?php echo date("jS F, Y", time()); ?></div>
                    <div><?php echo ucwords($current_weather->weather[0]->description); ?></div>
                </div>

                <div class="description_and_temperature">
                    <img src="http://openweathermap.org/img/w/<?php echo $current_weather->weather[0]->icon; ?>.png"class="weather-icon"/> 
                    max: <?php echo $current_weather->main->temp_max; ?>°C
                    min: <span class="min-temperature"><?php echo $current_weather->main->temp_min; ?>°C</span>
                </div>

                <div class="wind_and_humidity">
                    <div>Humidity: <?php echo $current_weather->main->humidity; ?> %</div>
                    <div>Wind: <?php echo $current_weather->wind->speed; ?> km/h</div>
                </div>

            </div>
        <?php } ?>
    </div>
</body>
</html>