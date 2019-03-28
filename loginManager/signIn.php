<?php
require_once('../model/database.php');

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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- =======================================================
          Theme Name: eBusiness
          Theme URL: https://bootstrapmade.com/xCoach-bootstrap-corporate-template/
          Author: BootstrapMade.com
          License: https://bootstrapmade.com/license/
        ======================================================= -->

        <script>
            $(document).ready(function () {
                $("#button10").click(function () {
                    $("#div10").load("jquery.txt");
                });
            });

            function showPassword() {
                var password = document.getElementById("passwordInput");
                if (password.type === "password") {
                    password.type = "text";
                } else {
                    password.type = "password";
                }
            }

            function showPassword1() {
                var password = document.getElementById("passwordInput1");
                if (password.type === "password") {
                    password.type = "text";
                } else {
                    password.type = "password";
                }
            }

        </script>
    </head>

    <body data-spy="scroll" data-target="#navbar-example">

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
                                        <li>
                                            <a class="page-scroll" href="../index.php">Home</a>
                                        </li>
                                        <li>
                                            <a class="page-scroll" href="signUp.php">Sign Up</a>
                                        </li>
                                        <li class="active">
                                            <a class="page-scroll" href="signIn.php">Log In</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <br><br><br><br><br><h2>Have a nice day!</h2>
                </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <br><br><br><br>
                        <h3 id="h3signin">Log In</h3>
                        <div class="signinform">

                            <form action="signInManager.php" method="post" class="contact100-form validate-form">
                                <div class="wrap-input100 validate-input">
                                    <span class="label-input100">Email</span>
                                    <input class="input100" type="text" name="login_email" placeholder="Enter your email addess"
                                           value="<?php echo htmlspecialchars($login_email); ?>" required>
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 input100-select">
                                    <span class="label-input100">Password</span>
                                    <div>
                                        <input class="input100" type="password" id="passwordInput1" placeholder="Log in password" name="login_password"
                                               value="<?php echo htmlspecialchars($login_password); ?>" required>
                                        <span class="focus-input100"></span>

                                    </div>
                                </div>
                                <br>
                                <input type="checkbox" onclick="showPassword1()">Show Password

                                <div class="container-contact100-form-btn">
                                    <div class="wrap-contact100-form-btn">
                                        <div class="contact100-form-bgbtn"></div>
                                        <button class="contact100-form-btn">
                                            <span>
                                                <input id="submit" type="submit" value="Log In">
                                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> 

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
