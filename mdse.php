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
        <link rel="stylesheet" href="css/mdse.css">
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:600|Roboto" rel="stylesheet">

        <script src="https://use.fontawesome.com/6f966ddc2d.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>

    <?php include 'header.php'; ?>

    <?php include 'conn.php' ?>

    <div class="grid siteWidth">
        <?php
        $category = $_GET['cat'];        

        if (!empty($_GET['subcat'])) {
            $subcategory = $_GET['subcat'];
            $sql = "SELECT description, picture, price FROM mdse WHERE category = '$category' AND subcategory = '$subcategory'";
        } else {
            $sql = "SELECT description, picture, price FROM mdse WHERE category = '$category'"; 
        }        
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            $description = $row["description"];
            $pic = $row["picture"];
            $price = $row["price"];

            echo
            "<div class='grid-item'>
                <div class='mdseItemPicture'>
                    <img src='$pic' alt=''>
                </div>
                <div class='mdseItemTextWrapper'>
                    <h3>$description</h3>
                    <p>Precio: $$price</p>
                    <a href=''>COMPRAR</a>
                </div>               
            </div>";
        }
        ?>        
    </div>

   
    

    <?php include 'footer.html' ?>
<!--::::::::::::::::::::::::::::::::::::::scripts::::::::::::::::::::::::::::::::::::::-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script src='js/masonry.pkgd.min.js'></script>
        <script src='js/imagesloaded.pkgd.min.js'></script>

        <script src="js/header.js"></script>

        <script>
            $('.grid').imagesLoaded(function(){
                $('.grid').masonry({
                ItemSelector: '.grid-item',
                columnWidth: 300
                });
            });

            
        </script>
    </body>
</html>

