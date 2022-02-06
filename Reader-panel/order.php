<?php
// error_reporting(0);
// session_start();
$connection=mysqli_connect("localhost","root","","project");
include("controller.php");
$ob=new controller;


?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        <!-- Title -->
        <title>Order Successfully</title>
        <!-- Favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        <!-- Stylesheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
        <!-- Start: Header Section -->
        <?php
        include("header.php");
        ?>
        <!-- End: Header Section -->
        
        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Successfully  Order Completed</h2>
                    <span class="underline center"></span>
                    <!-- <p class="lead">Shopping is Cheaper than Therapy</p> -->
                </div>
                
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Cart Checkout Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="checkout-main">
                        <div class="container">
                            <div class="row">
                                <!--                                 <div class="cart-head">
                                    <div class="col-xs-12 col-sm-6 account-option">
                                        <strong>Scott Fitzgerald</strong>
                                        <ul>
                                            <li><a href="#">Edit Account</a></li>
                                            <li class="divider">|</li>
                                            <li><a href="#">Edit Pin </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 library-info">
                                        <ul>
                                            <li>
                                                <strong>Home Library:</strong>
                                                Stephen A. Schwarzman Building
                                            </li>
                                            <li>
                                                <strong>Email:</strong>
                                                <a href="mailto:scottfitzgerald@gmail.com">scottfitzgerald@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div> -->
                                <div class="col-md-12">
                                    <article class="page type-page status-publish hentry">
                                        <div class="entry-content">
                                            <div class="woocommerce">
                                                <form class="checkout woocommerce-checkout" method="post" name="checkout">
                                                    <div class="row">
                                                        
                                                        <div class="col-sm-4" style="margin-left: 400px;">
                                                            <center>
                                                            <h2>Your order ID :-<b><u><?php echo $_SESSION['order_number'];?></u></b></h2>
                                                            <br>
                                                            <h4><b>Thank You!</b> </h4>
                                                            <br>
                                                            <img src="thumbs-up-emoji.png" style="width: 75%;">
                                                            </center>
                                                        </div>
                                                    </div>

                                                    <center>
                                                        <a style="margin-top: 20px;" href="index.php" class="btn btn-warning">Continue Shopping</a>
                                                    </center>
                                                 
                                                </form>
                                            </div>
                                            </div><!-- .entry-content -->
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
            <!-- End: Cart Checkout Section -->
            <!-- Start: Social Network -->
            <section class="social-network section-padding">
             <!--    <div class="container">
                    <div class="center-content">
                        <h2 class="section-title">Follow Us</h2>
                        <span class="underline center"></span>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <ul>
                        <li>
                            <a class="facebook" href="#" target="_blank">
                                <span>
                                    <i class="fa fa-facebook-f"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="twitter" href="#" target="_blank">
                                <span>
                                    <i class="fa fa-twitter"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="google" href="#" target="_blank">
                                <span>
                                    <i class="fa fa-google-plus"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="rss" href="#" target="_blank">
                                <span>
                                    <i class="fa fa-rss"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="linkedin" href="#" target="_blank">
                                <span>
                                    <i class="fa fa-linkedin"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="youtube" href="#" target="_blank">
                                <span>
                                    <i class="fa fa-youtube"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div> -->
            </section>
            <!-- End: Social Network -->
            <!-- Start: Footer -->
            <?php
            include("footer.php");
            ?>
            <!-- End: Footer -->
            <!-- jQuery Latest Version 1.x -->
            <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
            
            <!-- jQuery UI -->
            <script type="text/javascript" src="js/jquery-ui.min.js"></script>
            
            <!-- jQuery Easing -->
            <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
            <!-- Bootstrap -->
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            
            <!-- Mobile Menu -->
            <script type="text/javascript" src="js/mmenu.min.js"></script>
            
            <!-- Harvey - State manager for media queries -->
            <script type="text/javascript" src="js/harvey.min.js"></script>
            
            <!-- Waypoints - Load Elements on View -->
            <script type="text/javascript" src="js/waypoints.min.js"></script>
            <!-- Facts Counter -->
            <script type="text/javascript" src="js/facts.counter.min.js"></script>
            <!-- MixItUp - Category Filter -->
            <script type="text/javascript" src="js/mixitup.min.js"></script>
            <!-- Owl Carousel -->
            <script type="text/javascript" src="js/owl.carousel.min.js"></script>
            
            <!-- Accordion -->
            <script type="text/javascript" src="js/accordion.min.js"></script>
            
            <!-- Responsive Tabs -->
            <script type="text/javascript" src="js/responsive.tabs.min.js"></script>
            
            <!-- Responsive Table -->
            <script type="text/javascript" src="js/responsive.table.min.js"></script>
            
            <!-- Masonry -->
            <script type="text/javascript" src="js/masonry.min.js"></script>
            
            <!-- Carousel Swipe -->
            <script type="text/javascript" src="js/carousel.swipe.min.js"></script>
            
            <!-- bxSlider -->
            <script type="text/javascript" src="js/bxslider.min.js"></script>
            
            <!-- Custom Scripts -->
            <script type="text/javascript" src="js/main.js"></script>
            
        </body>
    </html>