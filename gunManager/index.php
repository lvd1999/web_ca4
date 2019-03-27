<?php
if (isset($_SESSION['block'])) {
    header('Location: ../index.php');
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
        <link href="../img/favicon.png" rel="icon">
        <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="../lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
        <link href="../lib/owlcarousel/owl.carousel.css" rel="stylesheet">
        <link href="../lib/owlcarousel/owl.transitions.css" rel="stylesheet">
        <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../lib/animate/animate.min.css" rel="stylesheet">
        <link href="../lib/venobox/venobox.css" rel="stylesheet">

        <!-- Nivo Slider Theme -->
        <link href="../css/nivo-slider-theme.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="../css/style.css" rel="stylesheet">

        <!-- Responsive Stylesheet File -->
        <link href="../css/responsive.css" rel="stylesheet">



        <!-- =======================================================
          Theme Name: eBusiness
          Theme URL: https://bootstrapmade.com/xCoach-bootstrap-corporate-template/
          Author: BootstrapMade.com
          License: https://bootstrapmade.com/license/
        ======================================================= -->

    </head>

    <body data-spy="scroll" data-target="#navbar-example">

        <div id="preloader"></div>

        <?php
        include '../view/header.php';
        ?>

        <!-- header end -->

        <!-- Start Slider Area -->
        <div id="home" class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="../img/slider/pistolSlider.jpg" alt="pistol" title="#slider-direction-1"/>
                    <img src="../img/slider/m416Slider.jpg" alt="riffle" title="#slider-direction-2"/>
                    <img src="../img/slider/awmSlider.jpg" alt="sniper" title="#slider-direction-3"/>
                </div>

                <!-- direction 1 -->
                <div id="slider-direction-1" class="slider-direction slider-one">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content">
                                    <!-- layer 1 -->
                                    <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                        <h2 class="title1">Basketball </h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                        <h1 class="title2">"I accept failure, but I can't accept not trying." Michael Jordan</h1>
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
                                        <h2 class="title1">Badminton </h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                        <h1 class="title2">"If we dare to win, we should also dare to lose."<br>Lee Chong Wei</h1>
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
                                        <h2 class="title1">Football</h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                        <h1 class="title2">“The only time you run out of chances is when you stop taking them.” <br>David Beckham</h1>
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
    <?php include '../view/contact.php'; ?>
    <?php include '../view/footer.php'; ?>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/venobox/venobox.min.js"></script>
    <script src="../lib/knob/jquery.knob.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/parallax/parallax.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="../lib/appear/jquery.appear.js"></script>
    <script src="../lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <script src="../js/main.js"></script>
</body>

</html>