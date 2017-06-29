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
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:600|Roboto" rel="stylesheet">

        <script src="https://use.fontawesome.com/6f966ddc2d.js"></script>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>

    <?php include 'header.php'; ?>

    <?php include 'conn.php' ?>

    <div class="formWidth">

        <form id="contactForm" action="mailto:jdanielsanchezn@gmail.com" method="post">

            <label><span>Nombre <br></span><input type="text" name="nombre" required autofocus></label><br>


            <label><span>Email <br></span><input type="email" name="email" required placeholder="user@mail.com"></label><br>

            <span>Sexo:</span>
            <label><input type="radio" name="sex" value="male"><span>Masculino.</span></label>
            <label><input type="radio" name="sex" value="female"><span>Femenino.</span></label><br>
            
            <label><span>Mensaje</span><textarea name="message" placeholder="Escriba su mensaje..."></textarea></label><br>

            <input type="submit" name="Enviar">
            <input type="reset" name="Restablecer">

        </form>
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

