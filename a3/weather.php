<!DOCTYPE html>
<html>
<head>
    <!--- imports Open Sans font --->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;lang=en" />
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="plugins/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-1.8.1/slick/slick-theme.css">
    <like rel="stylesheet" href="css/slick.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="plugins/slick-1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>
</head>

<body>
    <!-- Call navbar here. -->
    <?php require_once('includes/navbar.php'); ?>

    <!-- Main page content -->
    <div class="content">

        <!-- Carousel TODO WORK ON IT LATER -->
        <div id="slick-div">
            <div><img src="assets/images/homepage_photo.png" alt="LIFE - Living It Fully Everyday" /></div>
            <div><img src="assets/images/october_photo.jpg" alt="This October - look up" /></div>
            <div><img src="assets/images/mental_health_photo.jpg" alt="Image of a brain with a heart" /></div>
            <div><img src="assets/images/lockdown_photo.png" alt="Stay home if sick" /></div>
        </div>


        <div class="color_bar"> text </div>
        <h1> Your mental health is important! </h1>
        <p> The Coronavirus (COVID-19) pandemic has made a massive impact on our lives. As we lockdown at stay home to avoid the spread of the virus
            many of us feel lonely and isolated, which can lead to an increase in stress, anxiety and depressive symtoms as well as many other mental 
            health problems. COVID-19 has the potential to exacerbate many individual's mental health challenges including anxiety and depression.
            <br><br>
            LIFE (Living It Fully Everyday) is a health and wellness program that seeks to help individuals in the coronavirus pandemic by providing 
            them tools to help manage stress and lead them down a path of becoming a more mindful and productive individual. The tools you find will
            be useful even after the pandemic!
        </p>
        <div class="services">
            <div id="services_overview" onclick="window.open('services.html','mywindow');"> Services </div>
            <div id="services_yoga" onclick="window.open('yoga.html','mywindow');"> Yoga </div>
            <div id="services_meditation" onclick="window.open('meditation.html','mywindow');"> Meditation </div>
            <div id="services_stretching" onclick="window.open('stretching.html','mywindow');"> Stretching </div>
            <div id="services_hh" onclick="window.open('healthyHabits.html','mywindow');"> Healthy Habits </div>
        </div>
    </div>

    <!-- Call footer here. -->
    <?php require_once('includes/footer.php'); ?>
</body>
</html>