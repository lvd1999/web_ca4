<?php   
require_once('model/database.php');

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

        <div id="preloader"></div>
        <?php include 'view/header.php';?>

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
                                        <h2 class="title1">Riffle </h2>
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
        
        <!-- start pricing area -->
        <div id="pricing" class="pricing-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Let's become one of us</h2>
                        </div>
                    </div>
                </div>
                <h3 id="h3signup">Sign Up</h3>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="signupform">
                            <form action="signUp.php" method="post" class="contact100-form validate-form">

                                <div class="wrap-input100 validate-input">
                                    <span class="label-input100">First Name</span>
                                    <input class="input100" type="text" name="first_name" placeholder="Enter your name"
                                           value="<?php echo htmlspecialchars($first_name); ?>" required>
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 validate-input">
                                    <span class="label-input100">Last Name</span>
                                    <input class="input100" type="text" name="last_name" placeholder="Enter your name"
                                           value="<?php echo htmlspecialchars($last_name); ?>" required>
                                    <span class="focus-input100"></span>
                                </div>

                                <div class="wrap-input100 validate-input">
                                    <span class="label-input100">Email</span>
                                    <input class="input100" type="text" name="email" placeholder="Enter your email addess"
                                           value="<?php echo htmlspecialchars($email); ?>" required>
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 input100-select">
                                    <span class="label-input100">Password</span>
                                    <div>
                                        <input class="input100" type="password" id="passwordInput" placeholder="New password" name="signup_password"
                                               value="<?php echo htmlspecialchars($signup_password); ?>" required>
                                        <span class="focus-input100"></span>

                                    </div>
                                </div>
                                <br>
                                <input type="checkbox" onclick="showPassword()">Show Password

                                <div class="container-contact100-form-btn">
                                    <div class="wrap-contact100-form-btn">
                                        <div class="contact100-form-bgbtn"></div>
                                        <button class="contact100-form-btn">
                                            <span>
                                                <input id="submit" type="submit" value="Sign Up">
                                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <h3 id="h3signin">Log In</h3>
                        <div class="signinform">

                            <form action="login.php" method="post" class="contact100-form validate-form">
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
                <!-- End pricing table area -->
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
                                                        Leaders should be reliable without being predictable. They should be consistent without being anticipated.    
                                                    </p>
                                                    <h6>Mike Krzyzewski</h6>
                                                </div>
                                            </div>
                                            <!-- End single item -->
                                            <div class="single-testi">
                                                <div class="testi-text">
                                                    <p>
                                                        Coaches have to watch for what they don't want to see and listen to what they don't want to hear.
                                                    </p>
                                                    <h6>John Madden</h6>
                                                </div>
                                            </div>
                                            <!-- End single item -->
                                            <div class="single-testi">
                                                <div class="testi-text">
                                                    <p>
                                                        The effectiveness of a leader is best judged by the actions of those he guides.   
                                                    </p>
                                                    <h6>Bill Courtney</h6>
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
                                                <img src="img/blog/1.jpg" alt="derrick rose">
                                            </a>
                                        </div>
                                        <div class="blog-meta">
                                            <span class="comments-type">
                                                <i class="fa fa-comment-o"></i>
                                                <a href="#">13 comments</a>
                                            </span>
                                            <span class="date-type">
                                                <i class="fa fa-calendar"></i>2018-11-01 / 09:10:16
                                            </span>
                                        </div>
                                        <div class="blog-text">
                                            <h4>
                                                <a href="https://www.nytimes.com/2018/11/01/sports/derrick-rose.html">Derrick Rose Scores Career-High 50 Points in <br>Timberwolves’ Win</a>
                                            </h4>
                                            <p>
                                                Rose, the 30-year-old point guard, was in tears as he walked off the court after the game, serenaded by chants of “M.V.P.! M.V.P.!” from the home crowd. Since he was named the N.B.A. most valuable player in 2011, Rose’s career has been derailed by injuries.
                                            </p>
                                        </div>
                                        <span>
                                            <a href="https://www.nytimes.com/2018/11/01/sports/derrick-rose.html" class="ready-btn">Read more</a>
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
                                                <img src="img/blog/2.jpg" alt="lin dan">
                                            </a>
                                        </div>
                                        <div class="blog-meta">
                                            <span class="comments-type">
                                                <i class="fa fa-comment-o"></i>
                                                <a href="#">130 comments</a>
                                            </span>
                                            <span class="date-type">
                                                <i class="fa fa-calendar"></i>2018-11-19 / 09:10:16
                                            </span>
                                        </div>
                                        <div class="blog-text">
                                            <h4>
                                                <a href="blog.html">From 'Super Dan' to 'First-Round Lin' as badminton legend falters</a>
                                            </h4>
                                            <p>
                                                Lin Dan is regarded as the best badminton player of all time but his brilliance has faded markedly and Chinese fans and media are readying his career obituary.
                                                <br>
                                                <br>
                                                <br>                                                
                                            </p>
                                        </div>
                                        <span>
                                            <a href="https://www.channelnewsasia.com/news/sport/from--super-dan--to--first-round-lin--as-badminton-legend-falters-10945962" class="ready-btn">Read more</a>
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
                                                <img src="img/blog/3.jpg" alt="neymar">
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
                                                <a href="https://www.skysports.com/football/news/11820/11559077/neymar-kylian-mbappe-injury-concerns-for-psg-ahead-of-liverpool-clash">Neymar, Kylian Mbappe injury concerns for PSG ahead of Liverpool clash</a>
                                            </h4>
                                            <p>
                                                Paris Saint-Germain have injury worries over Neymar and Kylian Mbappe ahead of their Champions League match against Liverpool next week. Both players limped off playing for their countries eight days before the clash in Paris on November 28.
                                            </p>
                                        </div>
                                        <span>
                                            <a href="https://www.skysports.com/football/news/11820/11559077/neymar-kylian-mbappe-injury-concerns-for-psg-ahead-of-liverpool-clash" class="ready-btn">Read more</a>
                                        </span>
                                    </div>
                                </div>
                                <!-- End Right Blog-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Blog -->

                <!-- Start contact Area -->
                <div id="contact" class="contact-area">
                    <div class="contact-inner area-padding">
                        <div class="contact-overly"></div>
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="section-headline text-center">
                                        <h2>Contact us</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Start contact icon column -->
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="contact-icon text-center">
                                        <div class="single-icon">
                                            <i class="fa fa-mobile"></i>
                                            <p>
                                                Call: +1 5589 55488 55<br>
                                                <span>Monday-Friday (9am-5pm)</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start contact icon column -->
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="contact-icon text-center">
                                        <div class="single-icon">
                                            <i class="fa fa-envelope-o"></i>
                                            <p>
                                                Email: d00198815@student.dkit.ie<br>
                                                <span>Web: www.dkit.ie</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start contact icon column -->
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="contact-icon text-center">
                                        <div class="single-icon">
                                            <i class="fa fa-map-marker"></i>
                                            <p>
                                                Location: A108 Adam Street<br>
                                                <span>NY 535022, USA</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <!-- Start Google Map -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <!-- Start Map -->
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="570" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    <!-- End Map -->
                                </div>
                                <!-- End Google Map -->

                                <!-- Start  contact -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form contact-form">
                                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                                        <div id="errormessage"></div>
                                        <form action="" method="post" role="form" class="contactForm">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                                <div class="validation"></div>
                                            </div>
                                            <div class="text-center"><button type="submit">Send Message</button></div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Left contact -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Area -->

                <!-- Start Footer bottom Area -->
                <?php include 'view/footer.php';?>

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
