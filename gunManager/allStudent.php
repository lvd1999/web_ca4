<?php
session_start();

$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];

require_once('database.php');

$query = "SELECT student_id, coach_id, student_name, sport, student_win, student_lose, student_age,student_email FROM student";
$statement = $db->prepare($query);
$statement->execute();
$list = $statement->fetchAll();
$statement->closeCursor();
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>xCoach</title>
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
            <!-- header-area start -->
            <div id="sticker" class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">

                            <!-- Navigation -->
                            <nav class="navbar navbar-default">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <!-- Brand -->
                                    <a class="navbar-brand page-scroll sticky-logo" href="page.php">
                                        <h1><span>x</span>Coach</h1>
                                        <!-- Uncomment below if you prefer to use an image logo -->
                                        <!-- <img src="img/logo.png" alt="" title=""> -->
                                    </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active">
                                            <a class="page-scroll"><?php
                                                echo"Hi, ";
                                                echo $first_name;
                                                echo '&nbsp';
                                                echo $last_name
                                                ?></a>
                                        </li>
                                        <li class="active">
                                            <a class="page-scroll" href="page.php">Home</a>
                                        </li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="page-scroll" href="#changePassword">Change password</a></li>
                                                <li><a class="page-scroll" href="#students" >Students</a></li>
                                                <li><a class="page-scroll" href=# >dd</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="page-scroll" href="index.php">Log Out</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- navbar-collapse -->
                            </nav>
                            <!-- END: Navigation -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
        </header>
        <!-- header end -->

        <div id="showAll" class="table col-lg-12 col-md-12 col-sm-12">
            <div id="tableDiv2">
                <table id="tableShowAll">
                    <tr>
                        <th scope="col">student id</th> 
                        <th scope="col">coach id</th> 
                        <th scope="col">student name</th>
                        <th scope="col">sport</th> 
                        <th scope="col">win</th> 
                        <th scope="col">lose</th>
                        <th scope="col">age</th> 
                        <th scope="col">student email</th> 
                    </tr>


                    <?php
                    for ($i = 0; $i < sizeof($list); $i++) {
                        ?>
                        <tr>
                            <th scope="row"> <?php echo $list[$i]['student_id'] ?></th>
                            <th><?php echo $list[$i]['coach_id'] ?></th>
                            <th> <?php echo $list[$i]['student_name'] ?></th>
                            <th><?php echo $list[$i]['sport'] ?></th>
                            <th> <?php echo $list[$i]['student_win'] ?></th>
                            <th><?php echo $list[$i]['student_lose'] ?></th>
                            <th> <?php echo $list[$i]['student_age'] ?></th>
                            <th><?php echo $list[$i]['student_email'] ?></th>
                        </tr>

                    <?php } ?>

                </table>
            </div>
        </div>

        <!--Start Footer bottom Area -->
        <footer id = "page_footer1">
            <div class = "footer-area">
                <div class = "container">
                    <div class = "row">
                        <div class = "col-md-4 col-sm-4 col-xs-12">
                            <div class = "footer-content">
                                <div class = "footer-head">
                                    <div class = "footer-logo">
                                        <h2><span>x</span>Coach</h2>
                                    </div>

                                    <p>We hope you are enjoying your stay with us</p>
                                    <div class = "footer-icons">
                                        <ul>
                                            <li>
                                                <a href = "https://www.facebook.com/bryan.liow.50"><i class = "fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href = "#"><i class = "fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href = "#"><i class = "fa fa-google"></i></a>
                                            </li>
                                            <li>
                                                <a href = "#"><i class = "fa fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end single footer -->
                        <div class = "col-md-4 col-sm-4 col-xs-12">
                            <div class = "footer-content">
                                <div class = "footer-head">
                                    <h4>information</h4>
                                    <p>
                                        Office will be closed on bank holiday.
                                    </p>
                                    <div class = "footer-contacts">
                                        <p><span>Tel:</span> +1 5589 55488 55</p>
                                        <p><span>Email:</span> d00198815@student.dkit.ie</p>
                                        <p><span>Working Hours:</span> 9am-5pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end single footer -->
                        <div class = "col-md-4 col-sm-4 col-xs-12">
                            <div class = "footer-content">
                                <div class = "footer-head">
                                    <h4>Instagram</h4>
                                    <div class = "flicker-img">
                                        <a href = "#"><img src = "img/portfolio/1.jpg" alt = "Derrick Rose"></a>
                                        <a href = "#"><img src = "img/portfolio/2.jpg" alt = "Lin Dan"></a>
                                        <a href = "#"><img src = "img/portfolio/3.jpg" alt = "Neymar"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "footer-area-bottom">
                <div class = "container">
                    <div class = "row">
                        <div class = "col-md-12 col-sm-12 col-xs-12">
                            <div class = "copyright text-center">
                                <p>
                                    &copy;
                                    Copyright <strong>xCoach</strong>. All Rights Reserved
                                </p>
                            </div>
                            <div class = "credits">
                                <!--
                                All the links in the footer should remain intact.
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
                                -->
                                Designed by <a href = "https://bootstrapmade.com/">Lellien Linda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <a href = "#" class = "back-to-top"><i class = "fa fa-chevron-up"></i></a>

        <!--JavaScript Libraries -->
        <script src = "lib/jquery/jquery.min.js"></script>
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
