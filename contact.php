<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- This helps with internet explorer-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <!--This helps to set up mobile viewing-->
        <title>Contact us | Netmatters</title>
        <!-- allows the jQuery stuff to run -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Stylesheet links -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <link rel="stylesheet" href="sass/hamburgers.css">
        <link rel="stylesheet" href="sass/style.css">
        
    </head>
    <body>

        <?php include("inc/sidemenu.php"); ?>

        
        <div id="main">

            <?php include("inc/header.php") ?>

            <div id="contact-container">

                <div id="contact-banner">
                    <h3><a>Home</a></h3>
                    <ul class="banner-list">
                        <li>Our Offices</li>
                    </ul>
                </div>

                <div id="contact-title">
                    <h1>Our Offices</h1>
                </div>

                <div id="office-addresses">
                    <div class="office-cards"></div>
                    <div class="map-container"></div>
                </div>

                <div id="contact-area"></div>

            </div>


            <?php include("inc/newsletterSub.php") ?>

            <?php include("inc/footer.php") ?>

        </div>
        <!-- Repeated scripts -->
        <?php include("inc/repeatedScripts.php") ?>

    </body>
</html>