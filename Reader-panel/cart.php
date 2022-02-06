<?php
// error_reporting(0);
// session_start();
$connection=mysqli_connect("localhost","root","","project");
include("controller.php");
$ob=new controller;

$select=$ob->select_cart();
$ob->remove_cartproduct();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>        

<!-- Meta -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

<!-- Title -->
<title>Cart</title>

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
            <h2>Cart Page</h2>
            <span class="underline center"></span>
            <p class="lead">If You Can't Stop Thinking About It.... Buy It.</p>
        </div>
       
    </div>
</section>
<!-- End: Page Banner -->
<!-- Start: Cart Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="cart-main">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="page type-page status-publish hentry">
                                <div class="entry-content">
                                    <div class="woocommerce table-tabs" id="responsiveTabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA">Book Bag</a></li>
                                            
                                        </ul>
                                        <div class="tab-content">
                                            <div id="sectionA" class="tab-pane fade in active">
                                                <form method="post" action="checkout.php">
                                                    <table class="table table-bordered shop_table cart">
                                                        <thead>
                                                            <tr>
                                                                <th class="product-name">&nbsp;</th>
                                                                <th class="product-name">Title</th>
                                                                <th class="product-quantity">Action</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            $order_no=rand(111111,999999);
                                                            $i=1;
                                                            while($select1=mysqli_fetch_array($select))
                                                            {   
                                                                // if(isset($_REQUEST['btncheckout']))
                                                                // {
                                                                //     $reader_id=$_SESSION['id'];
                                                                //     $bookid=$select1['book_id'];
                                                                //     $qty=$select1['book_quantity'];
                                                                //     $totalprice=$select1['total_book_price'];
                                                                //     $insert="insert into orders(book_id,reader_id,quantity,total_price,order_no) values('$bookid','$reader_id','$qty','$totalprice','$order_no')";
                                                                //     mysqli_query($connection,$insert) or die(mysqli_error($connection));
                                                                //     header("location:checkout.php");
                                                                // }
                                                                ?>
                                                                 <tr class="cart_item">
                                                                <td data-title="cbox" class="product-cbox">
                                                                    <span>
                                                                        <b><?php echo $i;$i++;?></b>
                                                                        <!-- <input type="checkbox" id="cbox3" value="first_checkbox"> -->
                                                                    </span>
                                                                </td>
                                                                <td data-title="Product" class="product-name">
                                                                    <span class="product-thumbnail">
                                                                        <a href="#"><img src="../publisher-panel/<?php echo $select1['book_cover_page'] ?>" alt="Image Not Available" style="height: 200px;"></a>
                                                                    </span>
                                                                    <span class="product-detail">
                                                                        <a href="#"><strong><?php echo $select1['book_name'] ?></strong></a>
                                                                        <span><strong>Author:</strong> <?php echo $select1['book_author_name'] ?></span>
                                                                        <span><strong>ISBN:</strong> <?php echo $select1['book_ISBN'] ?></span>
                                                                        <span><strong>Book Quantity:</strong> <em><?php echo $select1['book_quantity'] ?></em></span>
                                                                        <span><strong>Book Price:</strong> <em><?php echo $select1['book_price'] ?></em></span>
                                                                        <span><strong>Total Price:</strong> <em><?php echo $select1['total_book_price'] ?></em></span>
                                                                    </span>
                                                                </td>
                                                                <td data-title="action" class="product-action">
                                                                    <div class="dropdown">
                                                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="width: 200px;">Select Your Action <b class="caret"></b></a>
                                                                        <ul class="dropdown-menu">
                                                                            
                                                                            <li><a href="cart.php?delete=<?php echo $select1['cart_id'] ?>" onclick="return confirm('Are You Sure Want To Remove This Book From Your Cart?')">Remove</a></li>
                                                                            
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </td>
                                                                      
                                                            </tr>    
                                                                <?php 
                                                            }
                                                        ?>
                                                                      
                                                           
                                                        </tbody>
                                                    </table>
                                                
                                            </div>
                                            <div style="margin-left : 940px;">
                                            <button type="submit" name="btncheckout">Checkout</button> 
                                                <!-- <a href="checkout.php"  name="btncheckout">Checkout</a> -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div><!-- .entry-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</form>
<!-- End: Cart Section -->

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
    </div>
</section>  -->
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