<?php
require_once('model/database.php');
session_start();
$_SESSION['block'] = true;

if (!isset($first_name)) {
    $first_name = '';
}
if (!isset($last_name)) {
    $last_name = '';
}
if (!isset($email)) {
    $email = '';
}
if (!isset($signup_password)) {
    $signup_password = '';
}
if (!isset($login_password)) {
    $login_password = '';
}
if (!isset($login_email)) {
    $login_email = '';
}
?> 
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AMMU-Nation</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
        <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
        <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
        <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/venobox/venobox.css" rel="stylesheet">

        <!-- Nivo Slider Theme -->
        <link href="css/nivo-slider-theme.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Responsive Stylesheet File -->
        <link href="css/responsive.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        

        <!-- =======================================================
          Theme Name: eBusiness
          Theme URL: https://bootstrapmade.com/xCoach-bootstrap-corporate-template/
          Author: BootstrapMade.com
          License: https://bootstrapmade.com/license/
        ======================================================= -->

    </head>

    <body data-spy="scroll" data-target="#navbar-example">

        <div id="preloader"></div>
        <header>
            <div id="sticker" class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">

                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                                        <h1>ammu-nation<span>.com</span></h1>
                                    </a>
                                </div>
                                <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active">
                                            <a class="page-scroll" href="#home">Home</a>
                                        </li>
                                        <li>
                                            <a class="page-scroll" href="#about">About</a>
                                        </li>
                                        <li>
                                            <a class="page-scroll" href="#blog">News</a>
                                        </li>                          
                                        <li>
                                            <a class="page-scroll" href="#contact">Contact</a>
                                        </li>
                                        <li>
                                            <a class="page-scroll" href="loginManager/signUp.php">Sign Up</a>
                                        </li>
                                        <li>
                                            <a class="page-scroll" href="loginManager/signIn.php">Log In</a>
                                        </li>                         
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Start Slider Area -->
        <div id="home" class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="img/slider/pistolSlider.jpg" alt="pistol" title="#slider-direction-1"/>
                    <img src="img/slider/m416Slider.jpg" alt="riffle" title="#slider-direction-2"/>
                    <img src="img/slider/awmSlider.jpg" alt="sniper" title="#slider-direction-3"/>
                </div>

                <!-- direction 1 -->
                <div id="slider-direction-1" class="slider-direction slider-one">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content">
                                    <!-- layer 1 -->
                                    <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                        <h2 class="title1">Pistol </h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                        <h1 class="title2">SIG Sauer P226</h1>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                        <a class="ready-btn page-scroll" href="#about">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction slider-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content text-center">
                                    <!-- layer 1 -->
                                    <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <h2 class="title1">Rifle </h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                        <h1 class="title2">M416</h1>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                        <a class="ready-btn page-scroll" href="#about">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- direction 3 -->
                <div id="slider-direction-3" class="slider-direction slider-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content">
                                    <!-- layer 1 -->
                                    <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <h2 class="title1">Sniper</h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                        <h1 class="title2">AWM</h1>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                                        <a class="ready-btn page-scroll" href="#about">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Area -->

        <!-- Start About area -->
        <div id="about" class="about-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2 style="color: steelblue;text-shadow: -1px 0 lightgray, 0 1px lightgray, 1px 0 lightgray, 0 -1px lightgray;">About AMMU-Nation</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single-well start-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="img/about/Ammunation_logo.png" alt="logo" style="background: white">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-middle">
                            <div class="single-well">
                                <p>
                                    <br><br><strong style="font-size: 20px;">AMMU-Nation </strong> features more than 7,000 guns in stock on any given day making us the largest gun shop in the United States. After opening its doors in 1959, we've been in the same location in Charlotte, NC and we remain a family business to this day with three generations of the Lee family working here daily. Why does this matter to you? Unlike the big-box stores, the Lee family has shared its experience, know how and customer-first attitude that comes with their 50-plus years of being in business. We also have a full-service gun repair facility on site and we're proud to say that we can service what we sell.
                                </p>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End col-->
                </div>
            </div>
        </div>
        <!-- End About area -->


        <!-- Start Testimonials -->
        <div class="testimonials-area">
            <div class="testi-inner area-padding">
                <div class="testi-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- Start testimonials Start -->
                            <div class="testimonial-content text-center">
                                <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                                <!-- start testimonial carousel -->
                                <div class="testimonial-carousel">
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <p>
                                                Thoughts are the gun, words are the bullets, deeds are the target, the bulls-eye is heaven.
                                            </p>
                                            <h6>Douglas Horton</h6>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <p>
                                                A gun is no more dangerous than a cricket bat in the hands of a madman.
                                            </p>
                                            <h6>Prince Phillip</h6>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <p>
                                                Everyone smiles with that invisible gun to their head.
                                            </p>
                                            <h6>Chuck Palahniuk</h6>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                </div>
                            </div>
                            <!-- End testimonials end -->
                        </div>
                        <!-- End Right Feature -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonials -->
        <!-- Start Blog Area -->
        <div id="blog" class="blog-area">
            <div class="blog-inner area-padding">
                <div class="blog-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Latest News</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start Left Blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="img/blog/blog-1.jpg" alt="old-school-gallery"/>
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">13 comments</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2019-04-01 / 09:10:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="https://www.nytimes.com/2018/11/01/sports/derrick-rose.html">Old School Cool: Shooting Gallery Photos</a>
                                    </h4>
                                    <p>
                                        "Grandpop showing how's it done. Getting that leg up for extra stability. Nighttime on the Wildwood Boardwalk, New Jersey, 1952."It can be a little shocking, even for gun people, to see how common and socially accepted firearms once ...
                                    </p>
                                </div>
                                <span>
                                    <a href="https://www.range365.com/shooting-gallery-photos" class="ready-btn">Read more</a>
                                </span>
                            </div>
                            <!-- Start single blog -->
                        </div>
                        <!-- End Left Blog-->
                        <!-- Start Left Blog -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="blog.html">
                                        <img src="img/blog/blog-2.jpg" alt="kim-rhode"/>
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">130 comments</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2019-02-27 / 13:54:45
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="blog.html">Instant Heirloom: New Original Henry Deluxe Engraved 2nd Edition Rifle</a>
                                    </h4>
                                    <p>
                                        Original, engraved Henry Model 1860 rifles are examples of exquisite craftsmanship. Not surprisingly, this makes them hard to come by. Oftentimes, they were reserved for important people like President Abraham Lincoln, Secretaries of War Simon Cameron and Edwin Stanton, and Secretary of the Navy Gideon Welles, who were all presented Henry rifles ...
                                        <br>
                                        <br>
                                        <br>                                                
                                    </p>
                                </div>
                                <span>
                                    <a href="https://www.range365.com/an-instant-heirloom-henry-original-deluxe-engraved-rifle" class="ready-btn">Read more</a>
                                </span>
                            </div>
                            <!-- Start single blog -->
                        </div>
                        <!-- End Left Blog-->
                        <!-- Start Right Blog-->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-blog">
                                <div class="single-blog-img">
                                    <a href="https://www.channelnewsasia.com/news/sport/from--super-dan--to--first-round-lin--as-badminton-legend-falters-10945962">
                                        <img src="img/blog/blog-3.jpg" alt="guns-of-terminators"/>
                                    </a>
                                </div>
                                <div class="blog-meta">
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        <a href="#">10 comments</a>
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>2018-11-20 / 22:06:16
                                    </span>
                                </div>
                                <div class="blog-text">
                                    <h4>
                                        <a href="https://www.skysports.com/football/news/11820/11559077/neymar-kylian-mbappe-injury-concerns-for-psg-ahead-of-liverpool-clash">Guns of Terminator: Dark Fate</a>
                                    </h4>
                                    <p>
                                        As unlikely as it seemed after the lukewarm reception of 2015's Terminator Genysis, we are actually getting another Terminator movie, with Arnold in it, no less. But for the first time since 1991, Linda Hamilton is stepping back into Sarah Connor's combat boots ...
                                    </p>
                                </div>
                                <span>
                                    <a href="https://www.range365.com/guns-terminator-dark-fate" class="ready-btn">Read more</a>
                                </span>
                            </div>
                        </div>
                        <!-- End Right Blog-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog -->

        

        <!-- Start Footer bottom Area -->
        <?php include 'view/footer.php'; ?>
        <?php include 'view/contact.php'; ?>
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/venobox/venobox.min.js"></script>
        <script src="lib/knob/jquery.knob.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/parallax/parallax.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="lib/appear/jquery.appear.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Contact Form JavaScript File -->
        <script src="contactform/contactform.js"></script>

                <script src="js/main.js"></script>
    </body>
    
</html>
