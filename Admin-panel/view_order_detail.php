<?php
// session_start();
// error_reporting(0);
include("config.php");

if (isset($_REQUEST['order_number'])!='')
{
    $order_number=$_REQUEST['order_number'];

    $select_order="select * from orders as o,book as b,reader as r where o.book_id=b.book_id and r.reader_id=o.reader_id and o.order_no='$order_number' order by o.order_id desc";
    $select1_order=mysqli_query($connection,$select_order) or die(mysqli_error($connection));
    $select1_order_shipping=mysqli_query($connection,$select_order) or die(mysqli_error($connection));
    $total_rows=mysqli_num_rows($select1_order);

    $order_shipping=mysqli_fetch_array($select1_order_shipping);
    $reader_id=$order_shipping['reader_id'];
    
    $select_shipping="select * from shipping_address where order_no='$order_number' and reader_id='$reader_id'";
    $shipping_query=mysqli_query($connection,$select_shipping) or die(mysqli_error($connection));
    $shipping_data=mysqli_fetch_array($shipping_query);
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
                    <h2 class="title1">View Single Order Detail</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                            <h5 > 
                                Product Order Number is : <b><?php if (isset($_REQUEST['order_number'])!='') { echo $_REQUEST['order_number']; } ?></b> / 
                                Customer Name is : <b><?php if (isset($_REQUEST['order_number'])!='') { echo $order_shipping['reader_name']; } ?></b> / 
                                Customer Email Address is : <b><?php if (isset($_REQUEST['order_number'])!='') { echo $order_shipping['reader_email']; } ?></b></h5> </br></br>
                                <table class="table" id="table_id">
                            <thead>                                                              
                            
                                <tr>
                                  <th>Sr No</th>
                                  <th>Book Image</th>
                                  <th>Book Name</th>
                                  <th>Order Quantity</th>
                                  <th>Order Price</th>
                                  <th>Customer Mobile No</th>
                                  <th>City</th>
                                  <th>State</th>
                                  <th>Address</th>
                                  <th>Pincode</th>
                                  <th>Payment Mode</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                <?php 
                                    if ($total_rows>0) 
                                    {
                                        $i=1;
                                        while ($order=mysqli_fetch_array($select1_order)) 
                                        {
                                            ?>
                                                <tr>
                                                    <td><b><?php echo $i."."; $i++; ?></b></td>
                                                    <td><img style="width:50px;" src="../Publisher-panel/<?php echo $order['book_cover_page'];?>"></td>
                                                    <td><?php echo $order['book_name']; ?></td>
                                                    <td><?php echo $order['quantity']; ?></td>
                                                    <td><?php echo $order['total_price']; ?></td>
                                                    <td><?php echo $shipping_data['address_mobile_no']; ?></td>
                                                    <td><?php echo $shipping_data['address_city']; ?></td>
                                                    <td><?php echo $shipping_data['address_state']; ?></td>
                                                    <td><?php echo $shipping_data['address_shipping']; ?></td>
                                                    <td><?php echo $shipping_data['address_pincode']; ?></td>
                                                    <td><?php echo $order['payment_type']; ?></td>
                                                    
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
                                            <td colspan="10" align="center" style="font-weight: bold;">Sorry! No Order Placed Yet.....</td>
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

