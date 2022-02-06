<?php
error_reporting(0);
include("controller.php")  ;
$ob=new controller;

$sel=$ob->select_rdenq();
$sel1=mysqli_fetch_array($sel);
$membership=$ob->select_mem();
$match=$ob->select_mem();
$match1=mysqli_fetch_array($match);
$submembership=$ob->select_submem();
?>
<!DOCTYPE html>
<html lang="zxx">
    

<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>..:: LIBRARIA ::..</title>

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

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

<script>

    function getsubmembership(id)
    {
      var a;
                
                if(window.XMLHttpRequest)
                {
                    a=new XMLHttpRequest;
                }

                a.onreadystatechange=function()
                {
                    if(a.readyState==4)
                    {
                            document.getElementById("duration").innerHTML=a.responseText;    
                    }    
                }    
                a.open("GET","backend.php?membership_id="+id,true);
                a.send();  
    }
    
    function getmembershipprice(id)
    {
      var a;
                
                if(window.XMLHttpRequest)
                {
                    a=new XMLHttpRequest;
                }

                a.onreadystatechange=function()
                {
                    if(a.readyState==4)
                    {
                            document.getElementById("price").innerHTML=a.responseText;    
                    }    
                }    
                a.open("GET","backend.php?submembership_id="+id,true);
                a.send();  
    }
</script>        
        
        
    </head>


    <body>
      <form id="contact" name="contact"  method="post" >
        <!-- Start: Header Section -->
        <?php 
            include("header.php");   
        ?>
        <!-- End: Header Section -->

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                
              
            </div>
        </section>
        <!-- End: Page Banner -->
        
        <!-- Start: Contact Us Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="contact-main">
                        <div class="contact-us">
                            <div class="container">
                                <div class="contact-location">
                                    
                                        <div class="front">
                                            
                                                </div>
                                    </div>  
                                    
                                </div>
                                <div class="row">
                                    <div class="contact-area">
                                        <div class="container" >
                                            <div class="col-md-5 col-md-offset-1">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5" style="margin-left: -200px;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="contact-form bg-light" style="margin: -60px;">
                                                            <center><h2>Membership Form</h2></center>
                                                            <span class="underline center"></span>
                                                            <div class="contact-fields">
                                                                
                                                                    <div class="row">
                                                                       
                                                                        <div class="col-md-6 col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="text"  name="name" id="last-name" size="30" value="<?php echo $sel1['reader_name'] ?>" aria-required="true" readonly/>
                                                                                <input  type="hidden"  name="readerid" value="<?php echo $sel1['reader_id'] ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"  name="email" id="email" size="30" value="<?php echo $sel1['reader_email'] ?>" aria-required="true" readonly/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="text" placeholder="Phone Number" name="phone" id="phone" size="30"  aria-required="true" value="<?php echo $sel1['reader_mobile'] ?>" disabled>
                                                                            </div>
                                                                        </div>
                                                                          <div class="col-md-6 col-sm-6">
                                                                              <div class="form-group">
                                                                                <select name="membershipplan"  onchange="getsubmembership(this.value)" class="form-control">
                                                                                    <option>Select Membership Plan</option>
                                                                                    <?php
                                                                                        while($membership1=mysqli_fetch_array($membership))
                                                                                        {
                                                                                            ?>
                                                                                                <option value="<?php echo $membership1['membership_id'] ?>"><?php echo $membership1['membership_type'] ?></option>
                                                                                            <?php 
                                                                                            
                                                                                        }
                                                                                    ?>
                                                                                </select>
                                                                              </div>
                                                                          </div>
                                                                        
                                                                        <div class="col-md-6 col-sm-6">
                                                                              <div class="form-group">
                                                                                <select name="membershipduration" id="duration" onchange="getmembershipprice(this.value)" class="form-control">
                                                                                    <option>Select Membership Duration</option>
                                                                                    <?php
                                                                                        
                                                                                    ?>
                                                                                </select>
                                                                              </div>
                                                                          </div>
                                                                          
                                                                          <div class="col-md-6 col-sm-6">
                                                                              <div class="form-group">
                                                                                <select name="membershipplan" id="price" class="form-control">
                                                                                    <option>Membership Price</option>
                                                                                    <?php
                                                                                        
                                                                                    ?>
                                                                                </select>
                                                                              </div>
                                                                          </div>
                                                                        
                                                                        <div >
                                                                            <div >
                                                                                <input class="btn btn-default"  type="submit" name="btnsubmit" value="Confirm Membership">
                                                                            </div>
                                                                        </div>
                                                                        <div id="success">
                                                                            <span>Your message was sent successfully! Our team will contact you soon.</span>
                                                                        </div>

                                                                        <div id="error">
                                                                            <span>Something went wrong, try refreshing and submitting the form again.</span>
                                                                        </div>
                                                                    </div>
                                                                </form> 
                                                            </div>                                                                   
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Contact Us Section -->

        <!-- Start: Social Network -->
        <!-- <section class="social-network section-padding">
            <div class="container">
                <div class="center-content">
                    <h2 class="section-title">Follow Us</h2>
                    <span class="underline center"></span>
                    <p class="lead">Follow Us for amazing books And Pre-Releases</p>
                </div>
                <ul style="margin-left : 200px;">
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
                    
                </ul>
            </div>
        </section> -->
        <!-- End: Social Network -->
         <br >
         <br >
         <br >
         <br >
         <br >
         <br >
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
        
        <!-- Google Map API -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT5k-RhvFSVIuCALkpHhKgQx6SJUd9gpI"></script>

        <!-- Google Map (Custom Style) -->
        <script type="text/javascript" src="js/google.map.js"></script>

        <!-- Custom Scripts -->
        <script type="text/javascript" src="js/main.js"></script>

    </body>


</html>
