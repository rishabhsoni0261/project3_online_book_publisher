<?php
session_start();
 include("config.php") ;
 $select="select * from website_review";
 $select1=mysqli_query($connection,$select);
 
 if(isset($_REQUEST['websitereview_id']))
 {
     $websitereview_id=$_REQUEST['websitereview_id'];
     $delete="delete from website_review where websitereview_id='$websitereview_id'";
     mysqli_query($connection,$delete);
     header("location:contact.php");
 }
 
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Feedback</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
<form method="post">
    <div class="main-content">
    <?php
        include("sidebar.php");
    ?>
            <!--left-fixed -navigation-->
        
        <!-- header-starts -->
        <?php
                include("header.php");
        ?>
                 <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page general">
                <h2 class="title1">Website Contacts</h2>
                <div class="panel-info widget-shadow">
                    <h4 class="title2">Given By Readers :</h4>
                     <?php
                        while($select2=mysqli_fetch_array($select1))
                        {
                            ?>
                                 <div class="col-md-6 panel-grids">
                                    <div class="panel panel-primary"> 
                                        <div class="panel-heading" > 
                                            <h3 class="panel-title" ><?php echo $select2['review_name'] ?></h3><br><h3 class="panel-title" ><?php echo $select2['review_email'] ?></h3> 
                                        </div> 
                                        <div class="panel-body"> <?php echo $select2['website_details'] ?></div> 
                                    </div>
                                    <a class = "btn btn-danger" href="feedback.php?websitereview_id=<?php echo $select2['websitereview_id'] ?>" onclick="return confirm('Are You Sure Want To Delete This Review?')">Delete</a>
                                 </div>        
                            <?php 
                        }
                    ?>
                   
                   
                    <div class="clearfix"> </div>
                </div>
               
            </div>
        </div>
        <!--footer-->
        <?php
            include("footer.php");
       ?> 
        <!--//footer-->
    <!-- side nav js -->
    <script src='js/SidebarNav.min.js' type='text/javascript'></script>
    <script>
      $('.sidebar-menu').SidebarNav()
    </script>
    <!-- //side nav js -->
    
    <!-- Classie --><!-- for toggle left push menu script -->
        <script src="js/classie.js"></script>
        <script>
            var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
                showLeftPush = document.getElementById( 'showLeftPush' ),
                body = document.body;
                
            showLeftPush.onclick = function() {
                classie.toggle( this, 'active' );
                classie.toggle( body, 'cbp-spmenu-push-toright' );
                classie.toggle( menuLeft, 'cbp-spmenu-open' );
                disableOther( 'showLeftPush' );
            };
            
            function disableOther( button ) {
                if( button !== 'showLeftPush' ) {
                    classie.toggle( showLeftPush, 'disabled' );
                }
            }
        </script>
    <!-- //Classie --><!-- //for toggle left push menu script -->
        
    <!--scrolling js-->
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/scripts.js"></script>
    <!--//scrolling js-->
    
    <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>