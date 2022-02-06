<?php
    include("controller.php");
    $ob=new controller;
    $select=$ob->select_state();
    $s=$ob->select_city();
    $ob->insert_reg();
?>

<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Registration</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center"> <h3>Register Here</h3></a>
        
                                <form class="mt-5 mb-5 login-input" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="pubname"  placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="pubemail" placeholder="Email" required>
                                    </div>
                                     
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pubpassword" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pubcnfpassword" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="pubstate">
                                            
                                            <option value="">Select Your State</option>
                                            <?php
                                                while($select1=mysqli_fetch_array($select))
                                                {
                                                    ?>
                                                    
                                                        <option value="<?php echo $select1['state_name'] ?>"><?php echo $select1['state_name'] ?></option> 
                                                    <?php 
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <select class="form-control" name="pubcity">
                                            
                                            <option value="">Select Your City</option>
                                            <?php
                                                while($s1=mysqli_fetch_array($s))
                                                {
                                                    ?>
                                                    
                                                        <option value="<?php echo $s1['city_name'] ?>"><?php echo $s1['city_name'] ?></option> 
                                                    <?php 
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    
                                    <input type="submit" class="btn login-form__btn submit w-100" name="btnsubmit" value="Sign Up">
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="index.php" class="text-primary">Sign In</a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 100px;">
        <?php
            include("footer.php");
        ?>
    </div>

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>





