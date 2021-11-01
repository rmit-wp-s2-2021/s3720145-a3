<!-- create an array to store strings of the locations of interest -->
<?php
    $cities = array("Sydney, Australia" , "Tokyo, Japan", "Barcelona, Spain");
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
        <h1> Current Weather of cites </h1>
    <div>

    <div class="city_container">
        <?php foreach($cities as $city) { ?>
            <div class="city_box">
                <h3><?php echo $city ?></h3>
                <?php 
                    $url = "api.openweathermap.org/data/2.5/weather?q={$city}&appid=85c116df3468356cb87a423b00347fc4";
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_URL, $url);
                    $response = curl_exec($ch);
                    $arr_result = json_decode($response);
                    print_r($arr_result);
                ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>