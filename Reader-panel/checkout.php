<?php
// error_reporting(0);
// session_start();
$connection=mysqli_connect("localhost","root","","project");
include("controller.php");
$ob=new controller;

$get_state=$ob->select_state();
$get_city=$ob->select_city();

$cart_sum=$ob->total_count_price_cart();
$sum_total=mysqli_fetch_array($cart_sum);

$select_profile=$ob->profile_data();
$fetch_address=$ob->fetch_shipping_address();

$rows=mysqli_num_rows($fetch_address);
if ($rows==0) 
{
    $profile_address=mysqli_fetch_array($select_profile);
    $address=$profile_address['reader_address'];
    $city=$profile_address['reader_city'];
    $state=$profile_address['reader_state'];
    $pincode="";
    $mobile=$profile_address['reader_mobile'];
}
else
{
    $profile_address=mysqli_fetch_array($fetch_address);
    $address=$profile_address['address_shipping'];
    $city=$profile_address['address_city'];
    $state=$profile_address['address_state'];
    $pincode=$profile_address['address_pincode'];
    $mobile=$profile_address['address_mobile_no'];
}

$select=$ob->select_cart();
$select_insert=$ob->select_cart();

$order_no=rand(111111,999999);
while($select1=mysqli_fetch_array($select_insert))
{
    if (isset($_REQUEST['checkout_place_order'])) 
    {      
        $reader_id=$_SESSION['id'];
        $cartid=$select1['cart_id'];
        $bookid=$select1['book_id'];
        $qty=$select1['book_quantity'];
        $totalprice=$select1['total_book_price'];
        $_SESSION['order_number']=$order_no;
        $insert="insert into orders(book_id,reader_id,quantity,total_price,order_no) values('$bookid','$reader_id','$qty','$totalprice','$order_no')";
        mysqli_query($connection,$insert) or die(mysqli_error($connection));

        $d="delete from cart where cart_id='$cartid'";
        mysqli_query($connection,$d);

        $billing_address=$_REQUEST['billing_address'];
        $billing_city=$_REQUEST['billing_city'];
        $billing_state=$_REQUEST['billing_state'];
        $billing_pincode=$_REQUEST['billing_pincode'];
        $billing_mobile=$_REQUEST['billing_mobile'];

        $insert_shipping="insert into shipping_address(reader_id,order_no,address_mobile_no,address_state,address_city,address_shipping,address_pincode) values('$reader_id','$order_no','$billing_mobile','$billing_state','$billing_city','$billing_address','$billing_pincode')";
        mysqli_query($connection,$insert_shipping) or die(mysqli_error($connection));

        header("location:order.php");
        
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        <!-- Title -->
        <title>Checkout</title>
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
                    <h2>Checkout</h2>
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
                                                            <h2 >Your order</h2>
                                                            <span class="underline left"></span>
                                                            <div class="woocommerce-checkout-review-order" id="order_review" >
                                                                <table class="shop_table woocommerce-checkout-review-order-table" >
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="product-name">Product</th>
                                                                            <th class="product-total">Total</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php                                    
                                                                            while($fetch_select=mysqli_fetch_array($select))
                                                                            {
                                                                                ?>

                                                                        <tr class="cart_item">
                                                                            <td class="product-name">
                                                                                <span class="woocommerce-product-amount"><?php echo $fetch_select['book_name'];?></span>
                                                                            </td>
                                                                            <td class="product-total">
                                                                                <span class="woocommerce-Price-amount amount"><i class="fa fa-inr"></i><?php echo $fetch_select['total_book_price'];?></span>
                                                                            </td>
                                                                        </tr>
                                                                                <?php
                                                                            }
                                                                        ?>
                                                                        
                                                                    </tbody>
                                                                    <tfoot>
                                                                    <!-- <tr class="cart-subtotal">
                                                                        <td>Cart Sub Total</td>
                                                                        <td><i class="fa fa-inr"></i>20</td>
                                                                    </tr> -->
                                                                    <tr class="cart-shipping">
                                                                        <td>Shipping</td>
                                                                        <?php
                                                                            if ($sum_total[0]<=500) 
                                                                            {
                                                                                ?>
                                                                        <td><strong class="shipping-amount"><i class="fa fa-inr"></i>60</strong></td>
                                                                    <tr class="order-total">
                                                                        <th>Order Totals</th>
                                                                        <th><i class="fa fa-inr"></i><?php echo $sum_total[0]+60;?></th>
                                                                    </tr>
                                                                                <?php
                                                                            }
                                                                            else
                                                                            {
                                                                                ?>
                                                                        <td><strong class="shipping-amount">Free</strong></td>
                                                                    </tr>
                                                                    <tr class="order-total">
                                                                        <th>Order Totals</th>
                                                                        <th><i class="fa fa-inr"></i><?php echo $sum_total[0];?></th>
                                                                    </tr>
                                                                                <?php
                                                                            }
                                                                        ?>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div id="customer_details">
                                                            <div class="col-xs-12 col-sm-6">
                                                                <div class="woocommerce-billing-fields">
                                                                    <h2>Billing Address</h2>
                                                                    <span class="underline left"></span>
                                                                    <div class="row">
                
                                                                        <div class="billing-address-box">
                                                                            <!-- <div class="col-xs-12 col-sm-6">
                                                                                <p id="billing_first_name_field" class="form-row form-row form-row-first">
                                                                                    <input type="text" value="" autocomplete="given-name" placeholder="First Name" id="billing_first_name" name="billing_first_name" class="input-text">
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-6">
                                                                                <p id="billing_last_name_field" class="form-row form-row form-row-last validate-required">
                                                                                    <input type="text" value="" autocomplete="family-name" placeholder="Last Name" id="billing_last_name" name="billing_last_name" class="input-text">
                                                                                </p>
                                                                            </div> -->
                                                                            <div class="clear"></div>
                                                                           <!--  <div class="col-xs-12 col-sm-12">
                                                                                <p id="billing_company_field" class="form-row form-row form-row-wide">
                                                                                    <input type="text" value="" autocomplete="organization" placeholder="Company Name" id="billing_company" name="billing_company" class="input-text ">
                                                                                </p>
                                                                            </div> -->
                                                                            <div class="col-xs-12 col-sm-12">
                                                                                <p id="billing_address_1_field" class="form-row form-row form-row-wide address-field validate-required">
                                                                                    <input type="text" value="<?php echo @$address;?>" placeholder="Address" name="billing_address" class="input-text">
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-6">
                                                                                <p id="billing_city_field" class="form-row form-row form-row-wide address-field validate-required" data-o_class="form-row form-row form-row-wide address-field validate-required">
                                                                                    <select name="billing_city" class="form-control">
                                                                                        <?php
                                                                                        while ($rows_city=mysqli_fetch_array($get_city)) 
                                                                                        {
                                                                                            if ($city==$rows_city['city_name']) 
                                                                                            {
                                                                                                ?>
                                                                                            <option selected=""><?php echo $rows_city['city_name'];?></option>
                                                                                                <?php
                                                                                            }
                                                                                            else
                                                                                            {

                                                                                                ?>
                                                                                            <option><?php echo $rows_city['city_name'];?></option>
                                                                                                <?php
                                                                                            }
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                    <!-- <input type="text" value="<?php echo @$city;?>" placeholder="City" name="billing_city" class="input-text"> -->
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-6">
                                                                                <p id="billing_state_field" class="form-row form-row form-row-first address-field validate-state validate-required" data-o_class="form-row form-row form-row-first address-field validate-required validate-state">
                                                                                    <select name="billing_state" class="form-control">
                                                                                        <?php
                                                                                        while ($rows_state=mysqli_fetch_array($get_state)) 
                                                                                        {
                                                                                            if ($state==$rows_state['state_name']) 
                                                                                            {
                                                                                                ?>
                                                                                            <option selected=""><?php echo $rows_state['state_name'];?></option>
                                                                                                <?php
                                                                                            }
                                                                                            else
                                                                                            {

                                                                                                ?>
                                                                                            <option><?php echo $rows_state['state_name'];?></option>
                                                                                                <?php
                                                                                            }
                                                                                        }
                                                                                        ?>
                                                                                    </select>
                                                                                    <!-- <input type="text" value="<?php echo @$state;?>" name="billing_state" placeholder="State" class="input-text "> -->
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-6">
                                                                                <p id="billing_postcode_field" class="form-row form-row form-row-last address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode">
                                                                                    <input type="number" value="<?php echo @$pincode;?>" placeholder="Pincode"  minlength="6" maxlength="6" id="billing_postcode" name="billing_pincode" class="input-text ">
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-6">
                                                                                <p id="billing_phone_field" class="form-row form-row form-row-last validate-required validate-phone">
                                                                                    <input type="text" value="<?php echo @$mobile;?>" pattern="[1-9]{1}[0-9]{9}"  minlength="10" maxlength="10" value="" autocomplete="tel" placeholder="Phone" id="billing_mobile" name="billing_mobile" class="input-text ">
                                                                                </p>
                                                                            </div>
                                                                            <!-- <div class="col-xs-12 col-sm-12">
                                                                                <div class="radio">
                                                                                    <input id="bill-address" type="radio" value="bill-address" name="bill-address">
                                                                                    <label for="bill-address">Ship Items To The Above Billing Address</label>
                                                                                </div>
                                                                            </div> -->
                                                                
                                                                        </div>
                                                                    </div>
        
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6">
                                                                <div class="woocommerce-checkout-payment" id="payment">
                                                                    <h2>Payment Method</h2>
                                                                    <span class="underline left"></span>
                                                                    <div class="form-row place-order">
                                                                        <div class="radio">
                                                                            <!-- <input id="ship-address" type="radio" value="ship-address" name="ship-address">
                                                                            <label for="ship-address"><strong>Direct Bank Transfer</strong>
                                                                                Make your payment directly into our bank account. Please use your Order ID as the payment refercene. Your order wont be shipped until the funds have cleard in our account.
                                                                            </label> -->
                                                                            <input id="cash-delivery" type="radio" checked="" value="cod" name="cod">
                                                                            <label for="cash-delivery"><strong>Cash On Delivery (cod)</strong></label>
                                                                            <!-- <input id="paypal" type="radio" value="paypal" name="ship-address">
                                                                            <label for="paypal"><strong>Paypal</strong>
                                                                                <span><a href="#"><img src="images/cart/payment-discover.jpg" alt=""></a></span>
                                                                                <span><a href="#"><img src="images/cart/payment-american-express.jpg" alt=""></a></span>
                                                                                <span><a href="#"><img src="images/cart/payment-paypal.jpg" alt=""></a></span>
                                                                                <span><a href="#"><img src="images/cart/payment-mastercard.jpg" alt=""></a></span>
                                                                                <span><a href="#"><img src="images/cart/payment-visa.jpg" alt=""></a></span>
                                                                            </label> -->
                                                                        </div>
                                                                        <input type="submit" data-value="Place order" value="Place order" id="place_order" name="checkout_place_order" class="button alt btn btn-default">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
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