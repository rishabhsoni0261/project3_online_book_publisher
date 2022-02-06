<?php
// error_reporting(0)    ;
    include("controller.php");
    $ob=new controller;
    $selprof=$ob->profile_display();
    $selprof1=mysqli_fetch_array($selprof);
    if (isset($_REQUEST['edit'])) 
    {
        $edit=$ob->edit_profile();
        $edit1=mysqli_fetch_array($edit);
    }
    $state=$ob->select_state();
    $city=$ob->select_city();
    $ob->update_profile();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Profile Page</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
 
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

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php
            include("header.php");
        ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php
            include("sidebar.php");
        ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
         <form method="post">
        <!-- row -->
        
         <div class="container-fluid" style="margin-top : 70px;">
        <h2 align="center" >My Profile</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            
                                        
                                        <tbody>
                                            <tr>
                                                <th>Name</th>
                                                <?php
                                                    if(isset($_REQUEST['edit']))
                                                    {
                                                        ?>
                                                          <td><input type="text" class="form-control input-flat" placeholder="Name" name="pubname" value="<?php echo $edit1['publisher_name'] ?>"></td>
                                                        <?php 
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <td><?php echo $selprof1['publisher_name'] ?></td>        
                                                        <?php 
                                                    }
                                                ?>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <?php
                                                    if(isset($_REQUEST['edit']))
                                                    {
                                                        ?>
                                                          <td><input type="text" class="form-control input-flat" placeholder="Email" name="pubemail" value="<?php echo $edit1['publisher_email'] ?>"></td>
                                                        <?php 
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                            <td><?php echo $selprof1['publisher_email'] ?></td>        
                                                        <?php 
                                                    }
                                                ?>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <th>State</th> 
                                                <?php
                                                    if(isset($_REQUEST['edit']))
                                                    {
                                                        
                                                    
                                                ?>
                                                <td>
                                                <select name="state" class="custom-select">
                                                
                                                    <?php 
                                                       while($state1=mysqli_fetch_array($state))
                                                       {
                                                           if($edit1['publisher_state']==$state1['state_name'])
                                                           {
                                                               ?>
                                                               
                                                                   <option selected value="<?php echo $state1['state_name'] ?>"><?php echo $state1['state_name'] ?></option>
                                                               
                                                               <?php 
                                                           }
                                                           else
                                                           {
                                                               ?>
                                                               
                                                                   <option value="<?php echo $state1['state_name'] ?>"><?php echo $state1['state_name'] ?></option>
                                                               
                                                               <?php
                                                           }
                                                       }
                                                       
                                                    ?>
                                                    
                                                </select>
                                                </td>
                                                <?php 
                                                    }
                                                     else
                                                     {
                                                         ?>
                                                            <td><?php echo $selprof1['publisher_state'] ?></td>         
                                                         <?php 
                                                     }                   
                                                
                                                ?>
                                            </tr>
                                            
                                            <tr>
                                                <th>City</th> 
                                                <?php
                                                    if(isset($_REQUEST['edit']))
                                                    {
                                                        
                                                    
                                                ?>
                                                <td>
                                                <select name="city" class="custom-select">
                                                
                                                    <?php 
                                                       while($city1=mysqli_fetch_array($city))
                                                       {
                                                           if($edit1['publisher_city']==$city1['city_name'])
                                                           {
                                                               ?>
                                                               
                                                                   <option selected value="<?php echo $city1['city_name'] ?>"><?php echo $city1['city_name'] ?></option>
                                                               
                                                               <?php 
                                                           }
                                                           else
                                                           {
                                                               ?>
                                                               
                                                                   <option value="<?php echo $city1['city_name'] ?>"><?php echo $city1['city_name'] ?></option>
                                                               
                                                               <?php
                                                           }
                                                       }
                                                       
                                                    ?>
                                                    
                                                </select>
                                                </td>
                                                <?php 
                                                    }
                                                     else
                                                     {
                                                         ?>
                                                            <td><?php echo $selprof1['publisher_city'] ?></td>         
                                                         <?php 
                                                     }                   
                                                
                                                ?>
                                            </tr>
                                            
                                            
                                            
                                        </tbody>
                                        </thead>                                    
                                         </table> 
                                         <?php
                                            if(isset($_REQUEST['edit']))
                                            {
                                                ?>
                                                   <button type="submit" class="btn mb-1 btn-rounded btn-success" name="btnupdate"><span class="btn-icon-left"><i class="fa fa-upload color-success"></i> </span>Update</button>
                                                <?php 
                                            }
                                            else
                                            {
                                                ?>
                                                    <h4 style="margin-bottom: -3px;"><a href="changepassword.php">Change Password</a></h4>
                                                    <div align="right" style="margin-top: -20px;margin-right: 20px;">
                                            
                                                        <h4><a href="app-profile.php?edit">Update Profile</a></h4>
                                            
                                                    </div>      
                                                <?php 
                                            }
                                        ?>                                                
                                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        <!-- #/ container -->
        
        </div>
        
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <?php
            include("footer.php");
        ?>  
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

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