<?php
session_start();
error_reporting(0);
include("config.php");
$select="select * from state";
$select1=mysqli_query($connection,$select);

$cityname=$_REQUEST['addcity'];
$result="select * from city where city_name='$cityname'";
$result1=mysqli_query($connection,$result);
$match=mysqli_num_rows($result1);
if(isset($_REQUEST['btnaddcity']))
{
    if($match==0)
    {
        $city=$_REQUEST['ct'];
        $insert="insert into city (state_id,city_name) values('$city','$cityname')";
        mysqli_query($connection,$insert);
        header("location:displaycity.php");    
    }
    else
    {
        ?>
        <script type="text/javascript">
        alert("Duplicate values cannot be inserted");
        </script>
        <?php
    }
    
}

if(isset($_REQUEST['edit']))
{
    $id=$_REQUEST['edit'];
    $sel="select * from city where city_id='$id'";
    $sel1=mysqli_query($connection,$sel);
    $sel2=mysqli_fetch_array($sel1);
}

if(isset($_REQUEST['btnupdatecity']))
{
    $cityname=$_REQUEST['addcity'];
    $up="update city set city_name='$cityname' where city_id='$id'";
    mysqli_query($connection,$up);
    header("location:displaycity.php");
}
?>
<html>
<head>
<title>Add City</title>
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
    <!--left-fixed -navigation-->
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
                    <h2 class="title1">Forms</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                            <h4>Basic Form :</h4>
                        </div>
                        <div class="form-body">
                            <form method="post"> 
                                <div class="form-group">
                                    <tr>
                                        <label>State:</label></br>
                                        <td><select name="ct" class="form-control1">
                                    <?php
                                        while($select2=mysqli_fetch_array($select1))
                                        {
                                            if($select2['state_id']==$sel2['state_id'])
                                            {
                                                ?>
                                                    <option selected value="<?php echo $select2['state_id'] ?>"><?php echo $select2['state_name'] ?></option>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                                    <option value="<?php echo $select2['state_id'] ?>"><?php echo $select2['state_name'] ?></option>
                                                <?php    
                                            }
                                             
                                               
                                        }
                                    ?> 
                                        </select>
                                        </td>
                                    </tr> 
                                    </br>                
                                    </br>                
                                    </br>                
                                    <label>Add City:</label> 
                                    <input type="text" name="addcity" class="form-control" placeholder="Enter Your City" value="<?php echo $sel2['city_name']; ?>"> 
                                </div>
                                <?php
                                    if(isset($_REQUEST['edit']))
                                    {
                                        ?>
                                        <button type="submit" class="btn btn-default" name="btnupdatecity" value="Update">Update</button>        
                                        <?php 
                                    }
                                    else
                                    {
                                        ?>
                                           <button type="submit" class="btn btn-default" name="btnaddcity" value="Add">Add</button>        
                                        <?php 
                                    }
                                ?>
                                
                            </form> 
                        </div>
                    </div>
                                        
                                                                  
                            </div>
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
   </form>
</body>
</html>