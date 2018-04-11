<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>Q2Q Communications</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Libs -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- Page styles-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/home.css">
    <!-- Animate navbar -->
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <!-- Animations -->
    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <!--[if lte IE 9]>
    <link href='css/animations-ie-fix.css' rel='stylesheet'>
    <![endif]-->
</head>
<body>
<?php
include_once('includes/navBar.php'); ?>

<!-- Welcome main banner -->
<div class="container-fluid mainBanner">
    <div class="pageSection animatedParent animateOnce" >
        <div class="captionBoxTop animatedParent animateOnce" data-sequence="500">
            <p class='animated fadeInDown' data-id="1">Welcome to <span class="semiBold">Q2Q</span></p>
            <p class="animated fadeInLeft delay-125" data-id="2">We are a professional,<br/>global event management agency<br/>and our objective is simple;</p>
        </div>
        <div class="captionBoxBottom animatedParent animateOnce" data-sequence="1000">
            <p><span class="animated fadeInUp delay-150" data-id="1">To contribute to your success</span><span class="animated fadeInRight delay-250" data-id="2">by delivering top quality events</span><span class="animated fadeInRight delay-375" data-id="3">with market leading levels of support</span></p>
        </div>
    </div>
</div>

<!-- About Us -->
<div class=" container-fluid blankpd">
    <div class="pageSection row animatedParent animateOnce wABitAboutUs">
        <div class="col-md-6 col aBitAboutUs animated fadeInRight">
            <div class="contentBox filterDarkBlue">
                <div>
                    <h2>A bit <span class="semiBold">about us</span></h2>
                    <div class="lineH2 bBottomWhite"></div>
                    <p>We are experienced, dynamic,<br/>
                        professional event organisers,<br/>
                        passionate about our company,  <br/>
                        passionate about our clients.<br/>
                        We are dedicated to the success of your event, <br/>
                        without exception.
                    </p>
                </div>
            </div>
        </div>
        <!-- Carousel with Testimonials -->
        <?php include_once('includes/carouselTestimonial.php'); ?>
    </div>
</div>

<!-- Fast Forward -->
<div class=" container-fluid blankpd">
    <div class="pageSection row fastForward animatedParent animateOnce">
        <div class="col-sm-6 col animated fadeInRight">
            <div class="pictureBox fullSize ourServices">
                <div class="fullSize filterDarkBlueLighter serviceBox">
                    <div class="ffCaption">Our <span class="semiBold">Services</span></div>
                    <div class="lineH2 bBottomWhite"></div>
                    <div class="ffButton"><a href="whatwedo.php" class="btnFF">View more</a></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col animated fadeInLeft">
            <div class="pictureBox fullSize pharmaceuticalSolutions">
                <div class="fullSize filterDarkBlueLighter serviceBox">
                    <div class="ffCaption">Pharmaceutical <span class="semiBold">Focus</span></div>
                    <div class="lineH2 bBottomWhite"></div>
                    <div class="ffButton"><a href="pharma-focus.php" class="btnFF">View more</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=" container-fluid blankpd">
    <div class="pageSection row fastForward animatedParent animateOnce">
        <div class="col-sm-6 col animated fadeInLeft">
            <div class="pictureBox fullSize onlineOffering">
                <div class="fullSize filterDarkBlueLighter serviceBox">
                    <div class="ffCaption">Digital <span class="semiBold">Services</span></div>
                    <div class="lineH2 bBottomWhite"></div>
                    <div class="ffButton"><a href="digital-services.php" class="btnFF">View more</a></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col animated fadeInRight">
            <div class="pictureBox fullSize meetTheTeam">
                <div class="fullSize filterDarkBlueLighter serviceBox">
                    <div class="ffCaption">Meet <span class="semiBold">The Team</span></div>
                    <div class="lineH2 bBottomWhite"></div>
                    <div class="ffButton"><a href="#" class="btnFF">View more</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Get in Touch -->
<?php include_once('includes/getInTouch.php'); ?>

<!-- Footer -->
<?php include_once('includes/footer.php'); ?>

<!-- Copyright -->
<?php include_once('includes/copyright.php'); ?>


<!-- Lib Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Scripts -->
<script src="js/global.js"></script>

<!-- Animate navbar -->
<script src="js/modernizr.custom.js"></script>

<!-- Nav Bar -->
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.min.js"></script>

<!-- Animations -->
<script src='js/css3-animate-it.js'></script>

</body>
</html>