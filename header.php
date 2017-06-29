<div class="fullWidth" id="firstHeader">
    <div class="siteWidth">
        <a href="/contact.php">Contáctenos</a>
        <span class="fa fa-facebook-square fa-lg fa-fw"></span>
        <span class="fa fa-instagram fa-lg fa-fw"></span>
        <span class="fa fa-whatsapp fa-lg fa-fw"></span>
        <span>+9-11-4536-8257</span>

       <!--  <input type="search" name="search"> -->

    </div>        	
</div>

<header class="fullWidth" id="mainHeader">
    <div class="siteWidth">
        <a href="/"><img id="logo" src="img/logo3.png"></a>

        <a href="#" class="botonHeader"><span class="fa fa-shopping-bag fa-lg fa-fw"></span> BOLSA DE COMPRAS</a>
        <a href="#" class="botonHeader">REGISTRATE</a>
        <a href="#" class="botonHeader">INICIÁ SESIÓN</a>
    </div>
</header>

<nav class="fullWidth" id="navBar">
    <div class="siteWidth navBarInner">
        <ul>
            <li><a class="hoverThing1" id="btn1">ANILLOS</a></li>
            <li><a class="hoverThing2" id="btn2">AROS</a></li>
            <li><a class="hoverThing3" id="btn3">CADENAS</a></li>
            <li><a class="hoverThing4" id="btn4">DIJES</a></li>
            <li><a class="hoverThing5" id="btn5">PULSERAS</a></li>            
        </ul>

    </div>
</nav>

    <div class="fullWidth hoverThing1" id="subMenu1">
        <div class="siteWidth submenuWrapper">
            <a href="/mdse.php?cat=Anillo"><h2>ANILLOS</h2></a>
            <div class="subCatContainer">
                <ul>
                    <?php
                    include 'conn.php';
                    $sql = "SELECT DISTINCT subcategory, category FROM mdse WHERE category='Anillo'";
                    $result = mysqli_query($conn, $sql);

                    include 'subMenuPopulator.php';
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="fullWidth hoverThing2" id="subMenu2">
        <div class="siteWidth submenuWrapper">
            <a href="/mdse.php?cat=Aro"><h2>AROS</h2></a>
            <div class="subCatContainer">
                <ul>
                    <?php
                    include 'conn.php';
                    $sql = "SELECT DISTINCT subcategory, category FROM mdse WHERE category='Aro'";
                    $result = mysqli_query($conn, $sql);

                    include 'subMenuPopulator.php';
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="fullWidth hoverThing3" id="subMenu3">
        <div class="siteWidth submenuWrapper">
            <a href="/mdse.php?cat=Cadena"><h2>CADENAS</h2></a>
            <div class="subCatContainer">
                <ul>
                    <?php
                    include 'conn.php';
                    $sql = "SELECT DISTINCT subcategory, category FROM mdse WHERE category='Cadena'";
                    $result = mysqli_query($conn, $sql);

                    include 'subMenuPopulator.php';
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="fullWidth hoverThing4" id="subMenu4">
        <div class="siteWidth submenuWrapper">
            <a href="/mdse.php?cat=Dije"><h2>DIJES</h2></a>
            <div class="subCatContainer">
                <ul>
                    <?php
                    include 'conn.php';
                    $sql = "SELECT DISTINCT subcategory, category FROM mdse WHERE category='Dije'";
                    $result = mysqli_query($conn, $sql);

                    include 'subMenuPopulator.php';
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="fullWidth hoverThing5" id="subMenu5">
        <div class="siteWidth submenuWrapper">
            <a href="/mdse.php?cat=Pulsera"><h2>PULSERA</h2></a>
            <div class="subCatContainer">
                <ul>
                    <?php
                    include 'conn.php';
                    $sql = "SELECT DISTINCT subcategory, category FROM mdse WHERE category='Pulsera'";
                    $result = mysqli_query($conn, $sql);

                    include 'subMenuPopulator.php';
                    ?>
                </ul>
            </div>
        </div>
    </div> 

