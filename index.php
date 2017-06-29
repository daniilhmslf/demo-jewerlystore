<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Jewerly Storefront</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/mainStyle.css">
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:600|Roboto" rel="stylesheet">

        <script src="https://use.fontawesome.com/6f966ddc2d.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>

    <?php include 'header.php'; ?>

    <div class="siteWidth sliderWrapper">
        <ul class="bxslider">
            <li><img src="img/gallery1.jpg"></li>
            <li><img src="img/gallery2.jpg"></li>
            <li><img src="img/gallery3.jpg"></li>
        </ul>
    </div>

    <div class="siteWidth clearfix" id="contentWrapper">
        <div class="fullWidthPromo">
            <a href=""><img src="img/fwPromo1.jpg" alt=""></a>
        </div>
        <div class="halfWidthPromoL">
            <a href=""><img src="img/hwPromo3.jpg" alt=""></a>
        </div>
        <div class="halfWidthPromoR">
            <a href=""><img src="img/hwPromo2.jpg" alt=""></a>
        </div>   
    </div>






    <?php include 'footer.html' ?>
<!--::::::::::::::::::::::::::::::::scripts::::::::::::::::::::::::::::::::-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/bxslider.js"></script>

        <script src="js/header.js"></script>

        <script>
            $(function(){
                $('.bxslider').bxSlider();
            });
        </script>


    </body>
</html>

