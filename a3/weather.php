<?php
    $cities = array("Sydney, Australia" , "Tokyo, Japan", "Barcelona, Spain");
?>

<!DOCTYPE html>
<html>
<head>
    <!--- imports Open Sans font --->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
   
</head>

<body>
    <div>
        <h1> Weather of cites </h1>
    <div>

    <div class="city_container">
        <?php foreach($cities as $city) { ?>
            <div class="city_box">
                <h3><?php echo $city ?></h3>
            </div>
        <?php } ?>
    </div>
</body>
</html>