<?php
session_start();

$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];

//set default value of variables for initial page load
if (!isset($student_id)) {
    $student_id = '';
}
if (!isset($student_name)) {
    $student_name = '';
}
if (!isset($sport)) {
    $sport = '';
}
if (!isset($student_win)) {
    $student_win = '';
}
if (!isset($student_lose)) {
    $student_lose = '';
}
if (!isset($student_age)) {
    $student_age = '';
}
if (!isset($student_email)) {
    $student_email = '';
}
if (!isset($student_id)) {
    $student_id = '';
}
if (!isset($update_student_name)) {
    $update_student_name = '';
}
if (!isset($update_sport)) {
    $update_sport = '';
}
if (!isset($update_student_win)) {
    $update_student_win = '';
}
if (!isset($update_student_lose)) {
    $update_student_lose = '';
}
if (!isset($update_student_age)) {
    $update_student_age = '';
}
if (!isset($update_student_email)) {
    $update_student_email = '';
}
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
                                            <a class="page-scroll" href="#home">Home</a>
                                        </li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="page-scroll" href="#">Add picture</a></li>
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

        <!-- Start Slider Area -->
        <div id="home" class="slider-area">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="img/slider/micaelJordanSlider.jpg" alt="Michael Jordan" title="#slider-direction-1" />
                    <img src="img/slider/leeChongWeiSlider.jpg" alt="Lee Chong Wei" title="#slider-direction-2" />
                    <img src="img/slider/davidBeckhamSlider.jpg" alt="David Beckham" title="#slider-direction-3" />
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
        <!-- Add Student Area -->
        <div id="students">
            <h2>Students</h2>
            <div id="showAllStudentsButton">
                <a onclick="window.location.href = 'allStudent.php'" class="button">SHOW ALL STUDENTS</a>

            </div>
            <div id="addTitle">
                <h3 id="addStudent">Add students</h3>
            </div>
            <div id="addStudentForm">
                <div id="addStudentFormContent">
                    <form action="addStudent.php" method="post" >
                        <div class="addStudentInput">
                            <span>Name: </span>
                            <input type="text" name="name" placeholder="Enter student name"
                                   value="<?php echo htmlspecialchars($student_name); ?>">
                        </div>
                        <br>
                        <div class="addStudentInput">
                            <span>Coach:</span>
                            <input type="text" name="sport" placeholder="Basketball/ Badminton/ Football"
                                   value="<?php echo htmlspecialchars($sport); ?>">
                        </div>
                        <br>
                        <div class="addStudentInput">
                            <span>Win:</span>
                            <input type="text" name="win" 
                                   value="<?php echo htmlspecialchars($student_win); ?>">
                        </div>
                        <br>
                        <div class="addStudentInput">
                            <span>Lose:</span>
                            <input type="text" name="lose" 
                                   value="<?php echo htmlspecialchars($student_lose); ?>">
                        </div>
                        <br>
                        <div class="addStudentInput">
                            <span>Age:</span>
                            <input type="text" name="age" 
                                   value="<?php echo htmlspecialchars($student_age); ?>">
                        </div>
                        <br>
                        <div class="addStudentInput">
                            <span>Email:</span>
                            <input type="text" name="email" 
                                   value="<?php echo htmlspecialchars($student_email); ?>">
                        </div>

                        <br><br>
                        <button id="addStudentButton">
                            <input id="submit" type="submit" value="Add Student">
                        </button>

                    </form>
                </div>
            </div>
        </div>
        <!-- Delete student area -->
        <div id="deleteTitle">
            <h3 id="deleteStudent">Delete students</h3>
        </div>
        <div id="deleteStudentForm">
            <div id="addStudentFormContent">
                <form action="deleteStudent.php" method="post" >
                    <div class="addStudentInput">
                        <span>Student ID: </span>
                        <input type="text" name="id" placeholder="Enter student ID"
                               value="<?php echo htmlspecialchars($student_id); ?>">
                    </div>
                    <br><br>
                    <button id="deleteStudentButton">
                        <input id="submit" type="submit" value="Delete Student">
                    </button>

                </form>
            </div>
        </div>
    </div>
    <!-- Update Student Area -->
    <div id="updateTitle">
        <h3 id="updateStudent">Update students</h3>
    </div>
    <div id="updateStudentForm">
        <div id="addStudentFormContent">
            <form action="updateStudent.php" method="post" >
                <div class="addStudentInput">
                    <span>Student ID: </span>
                    <input type="text" name="id" placeholder="Enter Student ID"
                           value="<?php echo htmlspecialchars($student_id); ?>">
                </div>
                <div class="addStudentInput">
                    <span>Name: </span>
                    <input type="text" name="update_name" placeholder="Enter student name"
                           value="<?php echo htmlspecialchars($update_student_name); ?>">
                </div>
                <br>
                <div class="addStudentInput">
                    <span>Coach:</span>
                    <input type="text" name="update_sport" placeholder="Basketball/ Badminton/ Football"
                           value="<?php echo htmlspecialchars($update_sport); ?>">
                </div>
                <br>
                <div class="addStudentInput">
                    <span>Win:</span>
                    <input type="text" name="update_win" 
                           value="<?php echo htmlspecialchars($update_student_win); ?>">
                </div>
                <br>
                <div class="addStudentInput">
                    <span>Lose:</span>
                    <input type="text" name="update_lose" 
                           value="<?php echo htmlspecialchars($update_student_lose); ?>">
                </div>
                <br>
                <div class="addStudentInput">
                    <span>Age:</span>
                    <input type="text" name="update_age" 
                           value="<?php echo htmlspecialchars($update_student_age); ?>">
                </div>
                <br>
                <div class="addStudentInput">
                    <span>Email:</span>
                    <input type="text" name="update_email" 
                           value="<?php echo htmlspecialchars($update_student_email); ?>">
                </div>

                <br><br>
                <button id="updateStudentButton">
                    <input id="submit" type="submit" value="Update Student">
                </button>

            </form>
        </div>
    </div>

    <img id="sponsor" src="img/sponsor.jpg" alt="li-ning"/>
    <!-- Start Footer bottom Area -->
    <footer id="page_footer">
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <h2><span>x</span>Coach</h2>
                                </div>

                                <p>We hope you are enjoying your stay with us</p>
                                <div class="footer-icons">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/bryan.liow.50"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>information</h4>
                                <p>
                                    Office will be closed on bank holiday.
                                </p>
                                <div class="footer-contacts">
                                    <p><span>Tel:</span> +1 5589 55488 55</p>
                                    <p><span>Email:</span> d00198815@student.dkit.ie</p>
                                    <p><span>Working Hours:</span> 9am-5pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Instagram</h4>
                                <div class="flicker-img">
                                    <a href="#"><img src="img/portfolio/1.jpg" alt="Derrick Rose"></a>
                                    <a href="#"><img src="img/portfolio/2.jpg" alt="Lin Dan"></a>
                                    <a href="#"><img src="img/portfolio/3.jpg" alt="Neymar"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright <strong>xCoach</strong>. All Rights Reserved
                            </p>
                        </div>
                        <div class="credits">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
                            -->
                            Designed by <a href="https://bootstrapmade.com/">Lellien Linda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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
