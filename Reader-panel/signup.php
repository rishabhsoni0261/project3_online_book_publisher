<?php
include("controller.php");
$ob=new controller;
$ob->insert_reg();
$select=$ob->select_state();
$s=$ob->select_city();
?>

  <!DOCTYPE html>
<html lang="zxx">
    

<head>        
        
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
        
        <!-- Title -->
        <title>Sign-Up</title>
        
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
<!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header" style="color: white;">
                    <h1>Sign-In</h1>
                    <span class="underline center"></span>
                    <p class="lead">Login or Register to enter in "Ocean Of Books"</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="login.php">Sign-In</a>
                        <a href="signup.php">Sign-Up</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <br>
        <br>
<div align="center">
    <p align="center"><h1>Register Here</h1>
    <img src="user_logo1.png" height="150px" width="150px" style="margin-top: 10px;"></p>
</div>

<div id="content" class="site-content" style="margin-left: 550px;margin-top: -200px;" >
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="signin-main">
                        <div class="container">
                            <div class="woocommerce">
                                <div class="woocommerce-login">
                                    <div class="company-info signin-register">
                                        <div class="col-md-5  new-user" >
                                            <div class="row">
                                                <div class="col-md-12" >
                                                    <div class="company-detail new-account bg-light margin-right" style="background-color:teal;">
                                                        <div class="new-user-head">
                                                            <h2>Create New Account</h2>
                                                            <span class="underline left"></span>
                                                            
                                                        </div>
                                                        <form class="login" method="post" enctype="multipart/form-data" >
                                                        
                                                            <p class="form-row form-row-first input-required">
                                                                
                                                                <input type="text" id="username1" name="username" class="input-text" placeholder="Name">
                                                            </p>
                                                            
                                                            <p class="form-row form-row-first input-required">
                                                                
                                                                <input type="email" id="useremail1" name="useremail" class="input-text" placeholder="Email">
                                                            </p>
                                                    
                                                               
                                                            <p class="form-row form-row-first input-required">
                                                                
                                                                <input type="text" id="useraddress1" name="useraddress" class="input-text" placeholder="Address">
                                                            </p>
                                                            
                                                            
                                                                
                                                                <p class="col-md-3 col-sm-6" style="margin: auto;">
                                                                     <p class="form-group">
                                                                        <select name="userstate" id="userstate1" class="form-control">
                                                                        <option value="">Select State</option>
                                                                        <?php
                                                                         while($select1=mysqli_fetch_array($select))
                                                                         {
                                                                             ?>
                                                                                 
                                                                                <option value="<?php echo $select1['state_name'] ?>"><?php echo $select1['state_name'] ?></option> 
                                                                             <?php 
                                                                         }
                                                                        ?>
                                                                            
                                                                                             
                                                                        </select>
                                                                     </p>
                                                                </p>
                                                            
                                                                <p class="col-md-3 col-sm-6" style="margin: auto;">
                                                                     <p class="form-group">
                                                                        <select name="usercity" id="usercity1" class="form-control">
                                                                        <option value="">Select City</option>
                                                                        <?php
                                                                         while($s1=mysqli_fetch_array($s))
                                                                         {
                                                                             ?>
                                                                                 
                                                                                <option value="<?php echo $s1['city_name'] ?>"><?php echo $s1['city_name'] ?></option> 
                                                                             <?php 
                                                                         }
                                                                        ?>
                                                                            
                                                                                             
                                                                        </select>
                                                                     </p>
                                                                </p>
                                                                
                                                                
                                    
                                                              <p class="form-row form-row-first input-required" style="margin-top: 27px;">
                                                                
                                                                <input type="text" id="usermobile1" name="usermobile" class="input-text" placeholder="Mobile Number">
                                                            </p>
                                                            
                                                             <p class="form-row input-required">
                                                                
                                                                <input type="password" id="password1" name="password" class="input-text" placeholder="Password">
                                                            </p>
                                
                                                            <p class="form-row input-required">
                                                                
                                                                <input type="password" id="confirmpassword1" name="confirmpassword" class="input-text" placeholder="Confirm Password">
                                                            </p>
                                
                                                            <div class="clear"></div>
                                                            <center><input type="submit" value="Signup" name="btnsignup" class="button btn btn-default"></center>
                                                            <div class="clear"></div>
                                                            </table>
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
                </main>
            </div>
            </div>
            <?php
            include("footer.php");
            ?>
            </body>