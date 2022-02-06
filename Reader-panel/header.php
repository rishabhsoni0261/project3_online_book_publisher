<?php
// session_start();
error_reporting(0);
    $connection=mysqli_connect("localhost","root","","project");
        $reader_id=$_SESSION['id'];
        $cnt="select * from wishlist where reader_id='$reader_id'";
        $cnt1=mysqli_query($connection,$cnt);
        $cnt2=mysqli_num_rows($cnt1);
        
        
        $countheader="select * from cart where reader_id='$reader_id'";
        $countheader1=mysqli_query($connection,$countheader) or die(mysqli_error($connection));
        $countheader2=mysqli_num_rows($countheader1);
?>

<html>
    <head>
        <title>header</title>
    </head>
    <body>
        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="index.php">
                                                <img src="images/oceanbookspng.png" alt="LIBRARIA" style="margin-top : -120px; margin-left : 50px; height: 300px; ">
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="topbar-info">
                                                <a href="tel:+918469814652"><i class="fa fa-phone"></i>+91 8780640805</a>
                                                <span>/</span>
                                                <a href="oceanofbooks.com"><i class="fa fa-envelope"></i>oceanofbooks.com</a>
                                            </div>
                                              <div style="margin-left: 350px; margin-top: -30px;" >
                                             <?php 
                                          include("languagetrans.php");
                                        ?>        </div>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="topbar-links">
                                            
                                                  <!-- <a href="membership.php" style="margin-right: 10px; margin-bottom : -150px;"><i class="fa fa-lock"></i>Membership</a> -->
                                                <!-- <span>|</span> -->
                                                <div class="header-cart dropdown">
                                                    <a  href="cart.php">
                                                        <i class="fa fa-shopping-cart fa-2x"></i>
                                                        <small style="font-size: 14px;"><?php echo $countheader2; ?></small>
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index.php">Home</a>
                                            
                                        </li>
                                        
                                        <li class="dropdown">
                                        
                                            <a data-toggle="dropdown" href="displaybooks.php" class="dropdown-toggle disabled" style="margin-left: -20px;">Book Categories</a>
                                                      
                                        </li>                                         
                                         
                                       
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="reviews.php" style="margin-left: -20px;">Reviews</a>
                                            
                                        </li>
                                        
                                        <li><a href="contact.php" style="margin-left: -20px;">Contact</a></li>
                                        <?php
                                            if(isset($_SESSION['email'])=='')
                                            {
                                                ?>
                                                 <li><a href="login.php" style="margin-left: -20px"><i class="fa fa-lock">&nbsp;</i>Login / Register</a></li>
                                                <?php 
                                            }
                                            else
                                            {
                                                ?>
                                                     <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="profile.php" style="margin-left: -20px;"><i class="fa fa-user">&nbsp;</i>Profile</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="profile.php">My Profile</a></li>
                                                <li><a href="changepassword.php">Change Password</a></li>
                                                <li><a href="likedbooks.php">Liked Books(<?php echo $cnt2; ?>)</a></li>
                                                 <li><a href="cart.php">Cart(<?php echo $countheader2; ?>)</a></li>
                                                <li><a href="logout.php">Logout</a></li>
                                                
                                            </ul>
                                        </li>       
                                                <?php 
                                            }
                                        ?>
                                       
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="index.php">Home</a>
                                        <ul>
                                             <li><a href="index-2.php">Home V1</a></li>
                                            <li><a href="home-v2.php">Home V2</a></li>
                                            <li><a href="home-v3.php">Home V3</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="books-media-list-view.php">Books &amp; Media</a>
                                        <ul>
                                            <li><a href="books-media-list-view.php">Books &amp; Media List View</a></li>
                                            <li><a href="books-media-gird-view-v1.php">Books &amp; Media Grid View V1</a></li>
                                            <li><a href="books-media-gird-view-v2.php">Books &amp; Media Grid View V2</a></li>
                                            <li><a href="books-media-detail-v1.php">Books &amp; Media Detail V1</a></li>
                                            <li><a href="books-media-detail-v2.php">Books &amp; Media Detail V2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="news-events-list-view.php">News &amp; Events</a>
                                        <ul>
                                            <li><a href="news-events-list-view.php">News &amp; Events List View</a></li>
                                            <li><a href="news-events-detail.php">News &amp; Events Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="cart.php">Cart</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                            <li><a href="signin.php">Signin/Register</a></li>
                                            <li><a href="404.php">404/Error</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.php">Blog</a>
                                        <ul>
                                            <li><a href="blog.php">Blog Grid View</a></li>
                                            <li><a href="blog-detail.php">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->
    </body>
</html>
