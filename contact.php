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
                    <div class="inner">
                        <a href="#"><h3>Home</h3></a>
                        <ul class="banner-list">
                            <li>Our Offices</li>
                        </ul>
                    </div>
                    
                </div>

                <div id="contact-title">
                    <div class="inner">
                        <h1 id="office-page-title">Our Offices</h1>
                    </div>
                </div>

                <div id="office-addresses">
                    <div id="office-list-container">
                        <div class="office-columns">
                            <div class="office-cards">
                                <img src="Assets/cambridge.jpg" alt="" class="office-images">
                                <div class="office-card-text">
                                    <a href="#">Cambridge Office</a>
                                    <p>Unit 1.28,<br>
                                    St John's Innovation Centre,<br>
                                    Cowley Road, Milton,<br>
                                    Cambridge,<br>
                                    CB4 0WS</p>
                                    <a href="#" class="text-design">01223 37 57 72</a>
                                    <a href="#" class="design-button office-button">view more</a>
                                </div>
                            </div>
                            <div class="map-container">

                            </div>
                        </div>
                        <div class="office-columns">
                            <div class="office-cards">
                                <img src="Assets/wymondham.jpg" alt="" class="office-images">
                                <div class="office-card-text">
                                    <a href="#">Wymondham Office</a>
                                    <p>Unit 15,<br>
                                    Penfold Drive,<br>
                                    Gateway 11 Business Park,<br>
                                    Wymondham, Norfolk,<br>
                                    NR18 0WZ</p>
                                    <a href="#" class="text-design">01603 70 40 20</a>
                                    <a href="#" class="design-button office-button">view more</a>
                                </div>
                            </div>
                            <div class="map-container">

                            </div>
                        </div>
                        <div class="office-columns">
                            <div class="office-cards">
                                <img src="Assets/yarmouth-2.jpg" alt="" class="office-images">
                                <div class="office-card-text">
                                    <a href="#">Great Yarmouth Office</a>
                                    <p>Suite F23,<br>
                                    Beacon Innovation Centre,<br>
                                    Beacon Park, Gorleston,<br>
                                    Great Yarmouth, Norfolk,<br>
                                    NR31 7RA</p>
                                    <a href="#" class="text-design">01493 60 32 04</a>
                                    <a href="#" class="design-button office-button">view more</a>
                                </div>
                            </div>
                            <div class="map-container">

                            </div>
                        </div>
                    </div>
                    
                </div>

                <div id="contact-area">
                    <div class="inner">

                    </div>
                </div>

            </div>


            <?php include("inc/newsletterSub.php") ?>

            <?php include("inc/footer.php") ?>

        </div>
        <!-- Repeated scripts -->
        <?php include("inc/repeatedScripts.php") ?>

    </body>
</html>