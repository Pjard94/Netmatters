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
                        <a href="index.php"><h3><strong>Home</strong></h3></a>
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
                                    <a href="#" class="card-title">Cambridge Office</a>
                                    <p>Unit 1.28,<br>
                                    St John's Innovation Centre,<br>
                                    Cowley Road, Milton,<br>
                                    Cambridge,<br>
                                    CB4 0WS</p>
                                    <a href="#" class="text-design">01223 37 57 72</a>
                                    <div class="view-more">
                                        <a href="#" class="design-button office-button">view more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-container">

                            </div>
                        </div>
                        <div class="office-columns">
                            <div class="office-cards">
                                <img src="Assets/wymondham.jpg" alt="" class="office-images">
                                <div class="office-card-text">
                                    <a href="#" class="card-title">Wymondham Office</a>
                                    <p>Unit 15,<br>
                                    Penfold Drive,<br>
                                    Gateway 11 Business Park,<br>
                                    Wymondham, Norfolk,<br>
                                    NR18 0WZ</p>
                                    <a href="#" class="text-design">01603 70 40 20</a>
                                    <div class="view-more">
                                        <a href="#" class="design-button office-button">view more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-container">

                            </div>
                        </div>
                        <div class="office-columns">
                            <div class="office-cards">
                                <img src="Assets/yarmouth-2.jpg" alt="" class="office-images">
                                <div class="office-card-text">
                                    <a href="#" class="card-title">Great Yarmouth Office</a>
                                    <p>Suite F23,<br>
                                    Beacon Innovation Centre,<br>
                                    Beacon Park, Gorleston,<br>
                                    Great Yarmouth, Norfolk,<br>
                                    NR31 7RA</p>
                                    <a href="#" class="text-design">01493 60 32 04</a>
                                    <div class="view-more">
                                        <a href="#" class="design-button office-button">view more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="map-container">

                            </div>
                        </div>

                    </div>    

                </div>

                <div id="contact-area">
                    <div id="contact-area-inner">

                        <div id="contact-hours">
                            <p class="contact-hours-details"><strong>Email us on:</strong></p>
                            <p class="contact-hours-details"><a class="text-design" href="">sales@netmatters.com</a></p>
                            <p class="contact-hours-details"><strong>Business hours:</strong></p>
                            <p class="contact-hours-details"><strong>Monday - Friday 07:00 - 18:00 </strong></p>
                            <div>
                                <p class="contact-hours-details"><strong>Out of Hours IT Support</strong></p>
                                <div>
                                    <p class="contact-hours-details">Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                    <p class="contact-hours-details"><strong>Monday - Friday 18:00 - 22:00 <br> Saturday 08:00 - 16:00 <br> Sunday 10:00 - 18:00</strong></p>
                                    <p class="contact-hours-details">To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call. </p>
                                </div>
                            </div>
                        </div>

                        
                       <?php 
                    //    if($wasSent == true){
                    //         echo '<p class="message-indicator success-state">';
                    //         echo 'Thank you for your enquiry.';
                    //         echo '</p>';
                    //     } elseif($failedSend == true){
                    //         echo '<p class="message-indicator failed-state">';
                    //         echo "We're sorry the form seems to have been incomplete.";
                    //         echo '</p>';
                    //     }
                        ?>

                        <div id="form-card">
                            <form id="contactForm">
                                <label class="label-CF" for="name-CF">your name</label>
                                <input type="text" id="name-CF" class="form-input" name="name">
                                <label class="label-CF"  for="email-CF">your email</label>
                                <input type="email" id="email-CF" class="form-input" name="email">
                                <label class="label-CF" for="phone-CF">your telephone number</label>
                                <input type="phone" id="phone-CF" class="form-input" name="phoneNumber">
                                <label class="label-CF" for="subject-CF">subject</label>
                                <input type="text" id="subject-CF" class="form-input" name="subject">
                                <label class="label-CF" for="message">message</label>
                                <textarea id="message" class="form-input" name="message"></textarea>
                                
                                <div>
                                    <button id="m-y" class="pretty--checkbox"><span class="focus-fill"><i class="fas fa-check"></i></span></button>
                                    <label class="subscription-checkbox--mail" for="m-y">Please tick this box if you wish to recieve marketing information from us. Please see our <a href="#" rel="How we will keep your information safe." class="Privacy">Privacy Policy</a> for more information on how we use your data.</label>
                                </div>
                                <button id="submit-form" class="design-button button-replace">Send enquiry</button>
                                
                            </form>   
                        </div>
                        
                </div>
                </div>

            </div>


            <?php include("inc/newsletterSub.php") ?>

            <?php include("inc/footer.php") ?>

        </div>
        <!-- Repeated scripts -->
        <?php include("inc/repeatedScripts.php") ?>

        <script src="js/formSubmission.js"></script>

    </body>
</html>