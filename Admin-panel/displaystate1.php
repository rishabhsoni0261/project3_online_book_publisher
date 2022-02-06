<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
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
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1">Forms</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                            <h4>Basic Form :</h4>
                                <table class="table">
                            <thead>
                                <tr>
                                  <th style="font-size: 20px;" colspan="2">Action</th> 
                                  <th style="font-size: 20px;">State ID</th>
                                  <th style="font-size: 20px;">State Name</th>
                                  <th style="font-size: 20px;">Date</th>
                                  <th style="font-size: 20px;">Status</th>
                                </tr>
                                <?php
                                    while($result2=mysqli_fetch_array($result1))
                                    {
                                        ?>
                                            <tr>
                                                <td><a href="addstate.php?up=<?php echo $result2['state_id'] ?>"><img src="edit.jpg" height="30px" width="30px"></a></td>
                                                <td><a href="displaystate.php?delete=<?php echo $result2['state_id'] ?>" onclick="return confirm('Are you sure want to delete?')"><img src="delete.png" height="30px" width="30px"></a></td>
                                                <td><?php echo $result2['state_id']; ?></td>
                                                <td><?php echo $result2['state_name']; ?></td>
                                                <td><?php echo $result2['state_date']; ?></td>
                                                <td><?php echo $result2['state_status']; ?></td>
                                            </tr>
                                        <?php 
                                    }
                                ?>
                                <tr>
                                    <th colspan="5">
                                    <?php
                                        if($_REQUEST['page']==1)
                                        {
                                            echo "First"." "."Previous";
                                        }
                                        else
                                        {
                                            ?>
                                            <a href="displaystate.php?page=1" style="text-decoration: none;">First&nbsp;&nbsp;</a>
                                            <a href="displaystate.php?page=<?php echo $_REQUEST['page']-1; ?>" style="text-decoration: none;">Previous&nbsp;&nbsp;</a>
                                            
                                            <?php
    
    
                                        }
                                    ?>
                                    <?php 
                                        for($i=1;$i<=$total_page;$i++)
                                        {
                                            if($i==$_REQUEST['page'])
                                            {
                                                ?>
                                                    <a style="color: red;" ><?php echo $i; ?></a>      
                                                <?php 
                                            }
                                            else
                                            {
                                                ?>
                                                    <a href="displaystate.php?page=<?php echo $i; ?>" style="text-decoration: none;"><?php echo $i; ?></a>  
                                                <?php
                                            }
                                                                                
                                        }
                                        if($_REQUEST['page']==$total_page)
                                        {
                                            echo "Next"." "."Last";
                                        }
                                        else
                                        {
                                            ?>
                                                <a href="displaystate.php?page=<?php echo $_REQUEST['page']+1; ?>" style="text-decoration: none;">&nbsp;&nbsp;Next&nbsp;&nbsp;</a>
                                                <a href="displaystate.php?page=<?php echo $total_page; ?>">Last</a>
                                            <?php 
                                        }
                                        ?>
                                    </th>
                                </tr>
                            </thead>
                            </table>
                            <a href="addstate.php">Add more state?</a>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
        <!--footer-->
        <?php
            include("footer.php");
       ?>
        <!--//footer-->
    </div>
    
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
