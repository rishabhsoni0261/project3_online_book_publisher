<?php
error_reporting(0);
    session_start();
    include("controller.php");
    $ob=new controller;
    $select=$ob->profile_data();
    $select1=mysqli_fetch_array($select);
    $edit=$ob->edit_profile();
    $state=$ob->select_state();
    $city=$ob->select_city();
    $ob->update_profile();
    //print_r(mysqli_fetch_array($city));
        
?>
<!DOCTYPE html>
<html lang="zxx">
<head>        
        
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        
        <!-- Title -->
        <title>Profile Page</title>
        
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
    </head>


    <body>
        
        <!-- Start: Header Section -->
          
        <!-- End: Header Section -->
        
        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header" style="color: white;">
                    <h1>profile</h1>
                    <span class="underline center"></span>
                    <p class="lead">Welcome to your profile</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index.php">Home</a>
                            <a href="changepassword.php">Change Password</a>
                            <a href="profile.php?edit">Update Profile</a>
                            <a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Cart Section -->
        <div id="content" class="site-content" style="margin-left: 520px;">
            <div id="primary" class="content-area" >
                <main id="main" class="site-main" >
                    <div class="signin-main">
                        <div class="container" >
                            <div class="woocommerce">
                                <div class="woocommerce-login">
                                    <div class="company-info signin-register" >
                                        <div class="col-md-5 col-md-offset-1">        
                                            <div class="row"> 
                                                <div class="col-md-12">
                                                <form method="post">
                                                  <div class="table-tabs" id="responsiveTabs" style="margin-left: -100px;">
                                                  <div class="tab-content" >
                                                <div id="sectionA" class="tab-pane fade in active">
                                                
                                                    <table class="table table-bordered" style="margin-left: -50px;">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <?php 
                                                                    if(isset($_REQUEST['edit']))
                                                                    {
                                                                        ?>
                                                                            <td><input type="text" name="name" value="<?php echo $edit['reader_name'] ?>" class="input-text"></td>
                                                                        <?php 
                                                                    }
                                                                    else
                                                                    {
                                                                        ?>
                                                                           <td><?php echo $select1['reader_name'] ?></td>
                                                                        <?php 
                                                                    }
                                                                ?>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>Email</th>
                                                                <?php 
                                                                    if(isset($_REQUEST['edit']))
                                                                    {
                                                                        ?>
                                                                        <td><input type="email" name="email" value="<?php echo $edit['reader_email'] ?>"></td>
                                                                        <?php 
                                                                    }
                                                                    else
                                                                    {
                                                                        ?>
                                                                            <td><?php echo $select1['reader_email'] ?></td>        
                                                                        <?php 
                                                                    }
                                                                ?>
                                                                
                                                                                                                                    
                                                            </tr>
                                                            <tr>
                                                                <th>Address</th> 
                                                                <?php 
                                                                  if(isset($_REQUEST['edit']))
                                                                  {
                                                                      ?>
                                                                        <td><textarea name="address"><?php echo $edit['reader_address'] ?></textarea></td>
                                                                      <?php 
                                                                  }
                                                                  else
                                                                  {
                                                                      ?>
                                                                        <td><?php echo $select1['reader_address'] ?></td>      
                                                                      <?php 
                                                                  }
                                                                ?>
                                                                
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th>City</th>
                                                                  <td>
                                                               <?php
    
                                                                if(isset($_REQUEST['edit']))
                                                               {
                                                               
?>             
                                                                            <select name="ct">
                                                                                                                   
                                                                <?php 
                                                                while($s2=mysqli_fetch_array($city))
                                                                {
                                                                    if($edit['reader_city']==$s2['city_name'])
                                                                    {
                                                                      ?> 
                                                                                <option selected="" ><?php echo $s2[2];  ?></option>
                                                                      <?php 
                                                                    }
                                                                    else
                                                                    {
                                                                        ?>
                                                                                        <option value=""><?php echo $s2[2];  ?></option>
                                                                     
                                                                        <?php
                                                                        
                                                                    }
                                                                  }
                                                               
                                                                    ?>
                                                                            </select>
                                                                            <?php
    
                                                               }
                                                               else
                                                               {
                                                                   ?>
                                                                     <?php echo $select1['reader_city'] ?>
                                                                   <?php 
                                                               }
                                                                ?>
                                                                            
                                                                        </td>
                                                                      
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th>State</th>
                                                                  <td>
                                                               <?php
    
                                                                if(isset($_REQUEST['edit']))
                                                               {
                                                               
?>             
                                                                            <select name="st">
                                                                                                                   
                                                                <?php 
                                                                while($state2=mysqli_fetch_array($state))
                                                                {
                                                                    if($edit['reader_state']==$state2['state_name'])
                                                                    {
                                                                      ?> 
                                                                                <option selected="" ><?php echo $state2[1];  ?></option>
                                                                      <?php 
                                                                    }
                                                                    else
                                                                    {
                                                                        ?>
                                                                                        <option value=""><?php echo $state2[1];  ?></option>
                                                                     
                                                                        <?php
                                                                        
                                                                    }
                                                                  }
                                                               
                                                                    ?>
                                                                            </select>
                                                                            <?php
    
                                                               }
                                                               else
                                                               {
                                                                   ?>
                                                                     <?php echo $select1['reader_state'] ?>
                                                                   <?php 
                                                               }
                                                                ?>
                                                                            
                                                                        </td>
                                                                      
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th>Mobile Number</th>
                                                                <?php 
                                                                    if(isset($_REQUEST['edit']))
                                                                    {
                                                                        ?>
                                                                            <td><input type="text" name="mobile" value="<?php echo $edit['reader_mobile'] ?>" class="input-text"></td>
                                                                        <?php 
                                                                    }
                                                                    else
                                                                    {
                                                                        ?>
                                                                           <td><?php echo $select1['reader_mobile'] ?></td>
                                                                        <?php 
                                                                    }
                                                                ?>
                                                                
                                                            </tr>
                                                            
                                                                
                                                            
                                                       
                                                        </tbody>
                                                    </table>
                                                </div>
                                                                <?php
                                                                    if(isset($_REQUEST['edit']))
                                                                    {
                                                                        ?>
                                                                            
                                                                                <div class="form-group">
                                                                                    <center><input class="form-control" type="submit" name="btnupdate" value="Update" style="width: auto;"></center>
                                                                                </div>                                              

                                                                        <?php 
                                                                    }
                                                                ?>
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
                </main>
            </div>
        </div>
        <!-- End: Cart Section -->
        
        <!-- Start: Social Network -->
        
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