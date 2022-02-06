<?php
session_start();
include("config.php");
$select="select *,sum(quantity) as total_qty,sum(total_price) as total_price from orders as o,reader as r where o.reader_id=r.reader_id GROUP BY o.order_no order by o.order_id desc";
$select1=mysqli_query($connection,$select);
$total_rows=mysqli_num_rows($select1);

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
<title>View Orders</title>
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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<!--//Metis Menu -->

</head> 
<body class="cbp-spmenu-push">
    <form method="post">
    <div class="main-content">
        <?php
        include("sidebar.php");
    ?>
        
        <!-- header-starts -->
        <?php
            include("header.php");
        ?>

                 <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1">View All Order</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                            <!-- <h4 align="center"><b> Category</b></h4> </br></br> -->
                                <table class="table" id="table_id">
                            <thead>                                                              
                            
                                <tr>
                                  <th>Sr No</th>
                                  <th>Action</th>
                                  <th>Order Number</th>
                                  <th>Customer Name</th>
                                  <th>Order Total Quantity</th>
                                  <th>Order Total Price</th>
                                  <th>Order Entry Date</th>
                                  
                                </tr>
                                

                            </thead>
                            <tbody>
                                <?php 
                                    if ($total_rows>0) 
                                    {
                                        $i=1;
                                        while ($order=mysqli_fetch_array($select1)) 
                                        {
                                            ?>
                                                <tr>
                                                    <td><b><?php echo $i."."; $i++; ?></b></td>
                                                    <td><a href="view_order_detail.php?order_number=<?php echo $order['order_no']; ?>"><i class="fa fa-eye"></i>View More</a></td>
                                                    <td><?php echo $order['order_no']; ?></td>
                                                    <td><?php echo $order['reader_name']; ?></td>
                                                    <td><?php echo $order['total_qty']; ?></td>
                                                    <td><?php echo $order['total_price']; ?></td>
                                                    <td><?php echo $order['order_date']; ?></td>
                                                </tr>    
                                            <?php 
                                        }
                                        ?>
                                        <?php 
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="7" align="center" style="font-weight: bold;">Sorry! No Order Placed Yet.....</td>
                                        </tr>
                                        <?php 
                                    }
                                ?>
                                    
                            </tbody>
                            </table>
                            
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

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(document).ready( function () 
        {
            $('#table_id').DataTable();
        } );
    </script>

 </form>  
</body>
</html>

