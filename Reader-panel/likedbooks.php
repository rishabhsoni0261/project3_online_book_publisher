<?php
session_start();
error_reporting(0);
    include("controller.php");
    
    $ob=new controller;
    
   
    $select=$ob->select_wishlist();
     $reader=$ob->select_rdenq();
    $reader1=mysqli_fetch_array($reader);
    $ob->add_wishlist();
    $ob->remove_wishlist();
    
    
?>
<!DOCTYPE html>
<html lang="zxx">
    

<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>Liked Books</title>

        <!-- Favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

        <!-- Responsive Table -->
        <link rel="stylesheet" type="text/css" href="css/responsivetable.css" />

        <!-- Stylesheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

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
                    <h2>Books Listing</h2>
                    <span class="underline center"></span>
                    <p class="lead">Your Library is your paradise</p>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="booksmedia-detail-main">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                                <section class="search-filters">
                                    <div class="container">
                                       
                                    </div>
                                </section>
                                <!-- End: Search Section -->
                            </div>
                             <?php
                             while($select1=mysqli_fetch_array($select))
                             {
                                 ?>
                                     <div class="booksmedia-detail-box">
                                <div class="detailed-box">
                                    <div class="col-xs-12 col-sm-5 col-md-3">
                                        <div class="post-thumbnail">
                                            
                                            <img src="../publisher-panel/<?php echo $select1['book_cover_page'] ?>" alt="Book Image">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-6">
                                        <div class="post-center-content" style="width: 550px;">
                                            <h2><?php echo $select1['book_name'] ?></h2>
                                            <p><strong>Author:</strong> <?php echo $select1['book_author_name'] ?></p>
                                            <p><strong>ISBN:</strong> <?php echo $select1['book_ISBN'] ?></p>
                                            <p><strong>Rating:</strong> </p>
                                            <p><strong>Edition:</strong> First edition</p>  
                                            <p><strong>Publisher:</strong> New York : Shaye Areheart Books, c2008</p>
                                            <p><strong>Length:</strong>&nbsp;<?php echo $select1['book_total_page'] ?></p>
                                            <p><strong>Format:</strong> PDF</p>
                                            <p><strong>Language Note:</strong>&nbsp;English</p>
                                            <p><strong>Genre :</strong> <?php echo $select1['category_name'] ?>,&nbsp;<?php echo $select1['subcategory_name'] ?></p>
                                            <p><strong>Price :</strong> <?php echo $select1['book_price'] ?></p>
                                            
                                            <div class="actions">
                                                <ul>
                                                    <li>
                                                        <a href="cart.php?book_id=<?php echo $select1['book_id'] ?>&&reader_id=<?php echo $reader1['reader_id'] ?>&&book_qty=<?php echo $book_qty ?>"  data-toggle="blog-tags" data-placement="top" title="" data-original-title="Add To Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>    
                                                    </li>
                                                    <li>
                                                        <a href="likedbooks.php?delete=<?php echo $select1['wishlist_id'] ?>" onclick="return confirm('Are You Sure Want To Remove From Your Liked Books?')"  data-toggle="blog-tags" data-placement="top" title="" data-original-title="UnLike">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="enquiry.php?book_id=<?php echo $select1['book_id'] ?>&&categoryname=<?php echo $select1['category_name'] ?>" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Enquiry">
                                                            <i class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <!--<li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>-->
                                                    <li>
                                                    <?php
                                                        if($_SESSION['email']=='')
                                                        {
                                                            ?>
                                                             <a href="login.php?book_id=<?php echo $select1['book_id'] ?>&&categoryname=<?php echo $select1['category_name'] ?>"  data-toggle="blog-tags" data-placement="top" title="" data-original-title="PDF">
                                                            <i class="fa fa-print"></i>
                                                        </a>  
                                                        <?php  
                                                        }
                                                        else
                                                        {
                                                             ?>
                                                             <a href="../publisher-panel/<?php echo $select1['book_upload'] ?>" download data-toggle="blog-tags" data-placement="top" title="" data-original-title="PDF">
                                                            <i class="fa fa-print"></i>
                                                        </a>  
                                                        <?php
                                                        }
                                                    ?>
                                                       
                                                    </li>
                                                    <!--<li>
                                                    
                                                        <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="" data-original-title="share">
                                                            <i class="fa fa-share-alt"></i>
                                                        </a>
                                                    </li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-3 ">
                                        <div class="post-right-content">
                                            <h4>Available now</h4>
                                            <p><strong>Total Quantities:</strong>&nbsp;<?php echo $select1['book_qty'] ?> </p>
                                           <br><br> 
                                           <br> 
                                           <br> 
                                           
                                            <a href="#." class="btn btn-dark-gray">Place an Order</a> 
                                            <a href="bookdetails.php?book_id=<?php echo $select1['book_id'] ?>&&categoryname=<?php echo $select1['category_name'] ?>" class="btn btn-dark-gray">View Book Detail</a> 
                                            
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                               
                                
                                <br></br></br></br></br></br>
                                
                               
                            </div>   
                                 <?php 
                             }
                            ?>
                            
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->
        

        <!-- Start: Social Network -->
       <!-- <section class="social-network section-padding">
            <div class="container">
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
                </form>
            </div>
        </section> -->
        <!-- End: Social Network -->
                          <br>
                          <br>
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
