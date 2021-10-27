<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- This helps with internet explorer-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <!--This helps to set up mobile viewing-->
        <title>Netmatters</title>
        <!-- allows the jQuery stuff to run -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Stylesheet links -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="sass/slick.css"/>
        <link rel="stylesheet" href="sass/slick-theme.css">
        <link rel="stylesheet" href="sass/hamburgers.css">
        <link rel="stylesheet" href="sass/style.css">
        
    </head>
    <body>

    <div id="side-menu">
            <div class="menu-xs">
                <ul>
                    <li class="side-menu--contact">
                        <a>Contact us</a>
                    </li>
                    <li class="side-menu--web">
                        <a href="#" class="li-head"><span class="web-icon"><i class="fas fa-code ci"></i></span>
                            <span><small>Web</small> Design</span></a>
                        <ul class="small-menu-items-ul">
                            <li class="small-menu-items first-li"><a href="#">Stylish Websites</a></li>
                            <li class="small-menu-items"><a href="#">Ecommerce Stores</a></li>
                            <li class="small-menu-items"><a href="#">Branding</a></li>
                            <li class="small-menu-items"><a href="#">Apps</a></li>
                            <li class="small-menu-items"><a href="#">Web Hosting</a></li>
                            <li class="small-menu-items last-li"><a href="#">Pay Monthly Websites</a></li>
                        </ul>
                    </li>
                    <li class="side-menu--support small-menu-header">
                        <a href="#" class="li-head">
                            <span class="support-icon"><i class="fas fa-desktop ci"></i></span>
                            <span><small>IT</small> Support</span>
                        </a>
                        <ul class="small-menu-items-ul">
                            <li class="small-menu-items first-li"><a href="#">Managed IT</a></li>
                            <li class="small-menu-items"><a href="#">Business IT</a></li>
                            <li class="small-menu-items"><a href="#">Office 365</a></li>
                            <li class="small-menu-items"><a href="#">Consultancy</a></li>
                            <li class="small-menu-items"><a href="#">Cloud Provider</a></li>
                            <li class="small-menu-items last-li"><a href="#">Data Backup</a></li>
                        </ul>
                    </li>
                    <li class="side-menu--telecoms small-menu-header">
                        <a class="li-head"><span class="telecoms-icon"><i class="fas fa-phone-alt ci"></i></span>
                            <span><small>Telecoms</small>Services</span></a>
                        <ul class="small-menu-items-ul">
                            <li class="small-menu-items first-li"><a href="#">Gigabit Voucher</a></li>
                            <li class="small-menu-items"><a href="#">Hosted Voip</a></li>
                            <li class="small-menu-items"><a href="#">Business Voip</a></li>
                            <li class="small-menu-items"><a href="#">Business Braodband</a></li>
                            <li class="small-menu-items"><a href="#">Leased Line</a></li>
                            <li class="small-menu-items last-li"><a href="#">3CX Systems</a></li>
                        </ul>
                    </li>
                    <li class="side-menu--bespoke small-menu-header">
                        <a class="li-head"><span class="bespoke-icon"><i class="fas fa-th ci"></i></span>
                            <span><small>Bespoke</small>Software</span></a>
                        <ul class="small-menu-items-ul">
                            <li class="small-menu-items first-li"><a href="#">Workflow</a></li>
                            <li class="small-menu-items"><a href="#">Automation</a></li>
                            <li class="small-menu-items"><a href="#">Intergration</a></li>
                            <li class="small-menu-items"><a href="#">Database</a></li>
                            <li class="small-menu-items"><a href="#">Sharepoint</a></li>
                            <li class="small-menu-items last-li"><a href="#">Business management</a></li>
                        </ul>
                    </li>
                    <li class="side-menu--marketing small-menu-header">
                        <a class="li-head"><span class="marketing-icon"><i class="fas fa-chart-line ci"></i></span>
                            <span><small>Digital</small>Marketing</span></a>
                        <ul class="small-menu-items-ul">
                            <li class="small-menu-items first-li"><a href="#">Search (SEO)</a></li>
                            <li class="small-menu-items"><a href="#">Paid (PPC)</a></li>
                            <li class="small-menu-items"><a href="#">Conversion (CRO)</a></li>
                            <li class="small-menu-items"><a href="#">email</a></li>
                            <li class="small-menu-items"><a href="#">Social media</a></li>
                            <li class="small-menu-items last-li"><a href="#">Content</a></li>
                        </ul>
                    </li>
                    <li class="side-menu--security small-menu-header">
                        <a class="li-head"><span class="security-icon"><i class="fas fa-shield-alt ci"></i></span>
                            <span><small>Cyber</small>Security</span></a>
                        <ul class="small-menu-items-ul">
                            <li class="small-menu-items first-li"><a href="#">Assessment</a></li>
                            <li class="small-menu-items"><a href="#">Management</a></li>
                            <li class="small-menu-items"><a href="#">PENETRATION testing</a></li>
                            <li class="small-menu-items"><a href="#">Cyber Essentials</a></li>
                            <li class="small-menu-items"><a href="#">PCI/DSS</a></li>
                            <li class="small-menu-items last-li"><a href="#">Hacker Prevention</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <ul>
                <li class="large-menu-group">
                    <a href="#" class="large-menu-header">Training</a>
                    <ul>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items large-menu-all">Train for a career in tech</a></li>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items large-menu-all">SCS Frequently Asked Questions</a></li>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items large-menu-all">Scion Collaborators</a></li>
                    </ul>
                </li>
                <li class="large-menu-group">
                    <a href="#" class="large-menu-header">Events</a>
                    <ul>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items large-menu-all">Business Automation Seminar</a></li>
                    </ul>
                </li>
                <li class="large-menu-group">
                    <a href="#" class="large-menu-header">Our Company</a>
                    <ul>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items">Our Culture</a></li>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items large-menu-all">Our Team</a></li>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items large-menu-all">Our Careers</a></li>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items large-menu-all">Our Benefits</a></li>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items large-menu-all">IT Support Great Yarmouth</a></li>
                    </ul>
                </li>
                <li class="large-menu-group">
                    <a href="#" class="large-menu-header">Our Work</a>
                    <ul>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items large-menu-all">Case Studies</a></li>
                    </ul>
                </li>
                <li class="large-menu-group">
                    <a href="#" class="large-menu-header">Our Knowledge</a>
                    <ul>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items">Guides</a></li>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items">News</a></li>
                        <li class=" large-menu-items"><a href="#" class="side-menu_large-items">Insights</a></li>
                    </ul>
                </li>
                <li class="large-menu-group">
                    <a href="#" class="large-menu-header">Covid Risk Assessments</a>
                </li>
                <li class="large-menu-group">
                    <a href="#" class="large-menu-header">Contact Us</a>
                    <ul>
                        <li class="large-menu-items"><a href="#" class="side-menu_large-items">Cambridge office</a></li>
                        <li class="large-menu-items"><a href="#" class="side-menu_large-items">Wymondham Office</a></li>
                        <li class="large-menu-items"><a href="#" class="side-menu_large-items">Great Yarmouth Office</a></li>
                    </ul>
                </li>
                <li class="large-menu-group">
                    <a href="#" class="large-menu-header">Support</a>
                </li>
            </ul>
        </div>

        <div id="cookie-container">
            <div id="cookie-modal">
                <div id="cookie-modal-header"><h3 id="cookie-header">Cookies Policy</h3></div>
                <div id="cookie-modal-paragraphs">
                    <div><p>We use cookies to obtain aggregate data regarding site traffic and interaction, in order to identify user trends and obtain insights in order to continually improve our site. These cookies enable us to improve your customer experience as you use our site and help provide you with relevant online marketing.</p></div>
                    <div><p>You can see a list of the other companies who use cookies on this website, by visiting cookie settings at the bottom of each page. For full details of how we use your personal information, and your rights in relation to it, view our privacy policy.</p></div>
                </div>
                <div id="cookie-buttons">
                    <div id="cookie-settings-button"><a href="#">Change Settings</a></div>
                    <div id="cookie-accept-button"><a href="#">Accept Cookies</a></div>
                </div>
            </div>
        </div>
        <div id="main">

            <?php include("inc/header.php"); ?>

            <!-- Slider placeholder -->
            <div class="slider-autoplay slides slick slick-initialise slick-slider slick-dotted">
                <div class="slider--area slider--web slick-slide">

                    <div class="slider--text">

                        <div class="slider_text">
                            <h1>Web Design</h1>
                            <p>For businesses looking to make a strong and effective first impression.</p>
                        </div>
                        
                        <button class="design-button slider-button">See More Here <i class="fas fa-arrow-right"></i> </button>
                        
                    </div>
                </div>
                <div class="slider--area slider--support slick-slide">

                <div class="slider--text">

                        <div class="slider_text">
                            <h1>IT Support</h1>
                            <p>For businesses looking to make a strong and effective first impression.</p>
                        </div>
                        
                        <button class="support-button slider-button">See More Here <i class="fas fa-arrow-right"></i> </button>
                        
                    </div>
                </div>
                <div class="slider--area slider--telecoms slick-slide">

                    <div class="slider--text">

                        <div class="slider_text">
                            <h1>Telecoms Service</h1>
                            <p>For businesses looking to make a strong and effective first impression.</p>
                        </div>
                        
                        <button class="telecoms-button slider-button">See More Here <i class="fas fa-arrow-right"></i> </button>
                        
                    </div>
                </div>
                <div class="slider--area slider--bespoke slick-slide">

                    <div class="slider--text">

                        <div class="slider_text">
                            <h1>Bespoke Design</h1>
                            <p>For businesses looking to make a strong and effective first impression.</p>
                        </div>
                        
                        <button class="bespoke-button slider-button">See More Here <i class="fas fa-arrow-right"></i> </button>
                        
                    </div>
                </div>
                <div class="slider--area slider--marketing slick-slide">

                    <div class="slider--text">

                        <div class="slider_text">
                            <h1>Digital Marketing</h1>
                            <p>For businesses looking to make a strong and effective first impression.</p>
                        </div>
                        
                        <button class="marketing-button slider-button">See More Here <i class="fas fa-arrow-right"></i> </button>
                        
                    </div>
                </div>
                <div class="slider--area slider--security slick-slide">

                    <div class="slider--text">

                        <div class="slider_text">
                            <h1>Cyber Security</h1>
                            <p>Keeping businesses and their customers sensitive information protected.</p>
                        </div>
                        
                        <button class="security-button slider-button">See More Here <i class="fas fa-arrow-right"></i> </button>
                    
                    </div>
                </div>
            </div>
              
            <!-- End of slider placeholder -->

            <!-- Linked cards to service pages -->
            <div class="cards-div">
                <div class="cards--section">

                    <!-- Bespoke Software card -->
                    <div class="card card--BS"> <a href="#" rel="Bespoke software page" class="click-card">
                        <div class="icon ic__BS"> <i class="fas fa-th ci"></i> </div>
                        <div class="card--txt">
                            <h3>Bespoke Software</h3>
                            <p>Tailored software solutions to improve business productivity and online profits. Our expert team will ensure a software solution.</p>
                        </div>
                        <div class="card__button cb__BS">READ MORE</div>
                        </a>
                    </div>

                    <!-- IT support card -->
                    <div class="card card--IT"><a href="#" rel="Support page" class="click-card">
                            <div class="icon ic__IT"> <i class="fas fa-desktop ci"></i> </div>
                            <div class="card--txt">
                                <h3>IT Support</h3>
                                <p>Remotely managed IT services that is catered to your businesses needs, adds value and reduces costs.</p>
                            </div>
                            <div class="card__button cb__IT">READ MORE</div>
                            </a>
                    </div>

                    <!-- Digital marketing card -->
                    <div class="card card--DM"> <a href="#" rel="Digital marketing page" class="click-card">
                        <div class="icon ic__DM"> <i class="fas fa-chart-line ci"></i> </div>
                        <div class="card--txt">
                            <h3>Digital marketing</h3>
                            <p>Driving brand awareness and ROI through creative digital marketing campaigns. We review and monitor online performances.</p>
                        </div>
                        <div class="card__button cb__DM">READ MORE</div>
                        </a>
                    </div>

                    <!-- Telecoms service card -->
                    <div class="card card--TS"> <a href="#" rel="Telecoms service page" class="click-card">
                        <div class="icon ic__TS"> <i class="fas fa-phone-alt ci"></i> </div>
                        <div class="card--txt">
                            <h3>Telecom services</h3>
                            <p>Stay connected with bespoke telecoms solutions when you need it most.</p>
                        </div>
                        <div class="card__button cb__TS">READ MORE</div>
                    </a>
                    </div>

                    <!-- Web design card -->
                    <div class="card card--WD"> <a href="#" rel="Web design page" class="click-card">
                        <div class="icon ic__WD"> <i class="fas fa-code ci"></i> </div>
                        <div class="card--txt">
                            <h3>Web Design</h3>
                            <p>User-centric design for businesses looking to make a lasting first impression.</p>
                        </div>
                        <div class="card__button cb__WD">READ MORE</div>
                    </a>
                    </div>

                    <!-- Cyber security card -->
                    <div class="card card--CS">  <a href="#" rel="Cyber security page" class="click-card"> 
                        <div class="icon ic__CS"> <i class="fas fa-shield-alt ci"></i> </div>
                        <div class="card--txt">
                            <h3>Cyber security</h3>
                            <p>Ensuring your online business stays secure 24/7, 365 days of the year.</p>
                        </div>
                        <div class="card__button cb__CS">READ MORE</div>
                    </a>
                    </div>

                    <!-- Developer Training card -->
                    <div class="card card--DT"> <a href="#" rel="Developer training page" class="click-card">
                        <div class="icon ic__DT"> <i class="fas fa-graduation-cap ci"></i> </div>
                        <div class="card--txt">
                            <h3>Developer trainer</h3>
                            <p>Have you considered a career in web development but you aren’t sure where to start?</p>
                        </div>
                        <div class="card__button cb__DT">READ MORE</div>
                        </a>
                    </div>

                </div> 
            </div>
            
            <!-- Start of the culture -->
            <div class="culture-section">
                <div class="culture--container">
                    <div class="culture">

                        <h1>NETMATTERS</h1>

                        <p class="intro-paragraph"><strong> Netmatters is a leading web design, IT support and digital marketing agency based in Wymondham, Norfolk</strong></p>

                        <p>Founded in 2008, we work with businesses from a variety of industries to gain new prospects, nuture existing leads and further grow their sales.</p>

                        <p>We provide Cost effective, reliable solutions to a range of services; from bespoke cloud-based management systems, workflow and IT solutions through to creative website development and integrated digital campaigning.</p>

                        <div class="but--cult"><button class="but-cult">OUR CULTURE <i class="fas fa-arrow-right"></i> </button></div>

                    </div>
                    <div class="empty-child"></div> 
                </div>
            </div>
            <!--End of the culture div-->

            <!-- The latest section -->
            <div class="Bar"><div class="latest--title"><span class="latest__title">LATEST</span></div></div>

            <div class="latest">

                <div class="latest--container">

                    <div class="news-article n--a1">
                        <div class="main-img">
                            <a href="#" class="news-img-banner banner-1">News</a>
                            <a href="#" > <img src="Assets/asset_9.jpeg" alt="image related to the story"></a>
                        </div>
                        <div class="block block--1">
                            <h3><a href="#" class="art-head1 article-header-all">Article</a></h3>
                            <p>A brief discription of what is contained in the article.</p>
                            <a href="#" class="Read-more1 read-more-all">Read More</a>
                            <div class="user">             
                                <img src="Assets/netmatters-ltd-VXAv.png" alt="The image of the user who posted the story." class="img-responsiveness">
                                <div class="details">
                                    <p><strong> Posted by <span class="user-name">Netmatters Ltd</span>.</strong></p>
                                    <p class="post-date">21st April 2021 </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="news-article n--a2">
                        <div class="main-img">
                            <a href="#" class="news-img-banner banner-2">News</a>
                            <a href="#"> <img src="Assets/asset_11.jpeg" alt="image related to the story"></a>
                        </div>
                        <div class="block block--2">
                            <h3><a href="#" class="art-head2 article-header-all">Article</a></h3>
                            <p>A brief discription of what is contained in the article.</p>
                            <a href="#" class="Read-more2 read-more-all">Read More</a>
                            <div class="user">
                                <img src="Assets/netmatters-ltd-VXAv.png" alt="The image of the user who posted the story." class="img-responsiveness">
                                <div class="details">
                                    <p><strong> Posted by <span class="user-name">Netmatters Ltd</span>.</strong></p>
                                    <p class="post-date">18th April 2021 </p>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="news-article n--a3">
                        <div class="main-img">
                            <a href="#" class="news-img-banner banner-3">News</a>
                            <a href="#"> <img src="Assets/asset_7.jpeg" alt="image related to the story"></a>
                        </div>
                        <div class="block block--3">
                            <h3><a href="#" class="art-head3 article-header-all">Article</a></h3>
                            <p>A brief discription of what is contained in the article.</p>
                            <a href="#" class="Read-more3 read-more-all">Read More</a>
                            <div class="user">
                                <img src="Assets/netmatters-ltd-VXAv.png" alt="The image of the user who posted the story." class="img-responsiveness">
                                <div class="details">
                                    <p><strong> Posted by <span class="user-name">Netmatters Ltd</span>.</strong></p>
                                    <p class="post-date">10th April 2021 </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 
            </div>
            <!--The end of the Latest section as in news articles-->

            <!-- The clients section that'll only show up at the medium breakpoint -->
            <div class="clients">
                <div class="client-area">

                    <div class="cl-img-container1">
                                
                        <div class="cl--1">    
                            <div class="tooltiptext_1">
                                <h3>Busseys</h3>
                                <p>One of the UK's leading Ford dealerships.</p>
                                <div class="arrow"></div>
                            </div>                 
                        </div>
                    </div>

                    <div class="cl-img-container2">
                        <div class="cl--2">
                            <div class="tooltiptext_2">
                                <h3>Crane Garden Builders</h3>
                                <p>Leading manufacturer and supplier of high-end garden room, summerhouses, workshops and sheds in the UK.</p>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>

                    <div class="cl-img-container3">
                        <div class="cl--3">
                            <div class="tooltiptext_3">
                                <h3>Beats</h3>
                                <p>The UK's eating disorder charity founded in 1989.</p>
                                <div class="arrow"></div>
                            </div>                        
                        </div>
                    </div>

                    <div class="cl-img-container4">
                        <div class="cl--4">
                            <div class="tooltiptext_4">
                                <h3>Northern Driver</h3>
                                <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
                                <div class="arrow"></div>
                            </div>                        
                        </div>
                    </div>

                </div>

            </div>

            <?php include("inc/newsletterSub.php"); ?>

            <?php include("inc/footer.php"); ?>


        </div>
        <div id="menu-overlay"></div>

        <script src="js/slick.min.js"></script>
        <script src="js/cookie.js"></script>
        <script src="js/sideMenu.Header.js"></script>
        <script src="js/carousel.js"></script>
        
    </body>
</html>