<?php
session_start();
include("config.php");
$select="select * from state";
$select1=mysqli_query($connection,$select);  
$total_rows=mysqli_num_rows($select1);
$per_page=3;
$total_page=ceil($total_rows/$per_page);

if(isset($_REQUEST['page']))
{
    $start=($_REQUEST['page']-1)*$per_page;
    $result="select * from state limit $start,$per_page";
    $result1=mysqli_query($connection,$result);
}
else
{
    $start=0;
    $result="select * from state limit $start,$per_page";
    $result1=mysqli_query($connection,$result); 
}

if(isset($_REQUEST['delete']))
{
    $stateid=$_REQUEST['delete'];
    $delete="delete from state where state_id='$stateid'";
    mysqli_query($connection,$delete);
    header("location:displaystate.php");
}

if(isset($_REQUEST['id']) and isset($_REQUEST['status']))
{
    $id=$_REQUEST['id'];
    $status=$_REQUEST['status'];
      if($status=='Active')
      {
          $up="update state set state_status='Deactive' where state_id='$id'";
          mysqli_query($connection,$up);
      }
      else
      {
            $up="update state set state_status='Active' where state_id='$id'";
            mysqli_query($connection,$up);
      }
      header("location:displaystate.php");
}

if(isset($_REQUEST['btnstatus']))
{
     $a=$_REQUEST['ch'];
        foreach($a as $b)
        {
            $ch1="select * from state where state_id='$b'";
            $ch2=mysqli_query($connection,$ch1);
            $ch3=mysqli_fetch_array($ch2);
                if($ch3['state_status']=='Active')
                {
                    $update="update state set state_status='Deactive' where state_id='$b'";
                    mysqli_query($connection,$update);
                }
                else
                {
                    $update="update state set state_status='Active' where state_id='$b'";
                    mysqli_query($connection,$update);
                }
        }
        header("location:displaystate.php");
}

if(isset($_REQUEST['btndelete']))
{
    $id=$_REQUEST['ch'];
        foreach($id as $b)
        {
            $delete="delete from state where state_id='$b'";
            mysqli_query($connection,$delete);
            
        }
        header("location:displaystate.php");
}

if(isset($_REQUEST['btnsearch']))
{
    if($_REQUEST['search']!="")
    {
        $name=$_REQUEST['search'];
        $result="select * from state where state_name like '$name%'";
        $result1=mysqli_query($connection,$result);
    }
    else
    {
        ?>
        <script type="text/javascript">
        alert("Record not found!");
        </script>
        <?php
    }
}

if(isset($_REQUEST['sort']))
{
    $sort=$_REQUEST['sort'];
    $cn=$_REQUEST['cn'];
    $result="select * from state order by $cn $sort";
    $result1=mysqli_query($connection,$result);
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
<title>View State</title>
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
        
        <!-- header-starts -->
        <?php
            include("header.php");
        ?>

                 <!-- //header-ends -->
        <!-- main content start-->
        <div id="page-wrapper">
            <div class="main-page">
                <div class="forms">
                    <h2 class="title1">Display</h2>
                    <div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
                        <div class="form-title">
                            <h4 align="center"><b>View State</b></h4></br></br>
                                <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="4">
                                        <input type="text" name="search" placeholder="Search..."> 
                                        <button type="submit" class="btn btn-default" name="btnsearch" value="Search">Search</button>                                        
                                    </th>
                                </tr>
                                <tr>
                                  <th style="font-size: 20px;" colspan="3">Action</th> 
                                  <th style="font-size: 20px;">State ID</th>
                                  <th style="font-size: 20px;">State Name
                                  <a href="displaystate.php?sort=asc&&cn=state_name">A-Z&nbsp;</a>
                                  <a href="displaystate.php?sort=desc&&cn=state_name">Z-A</a></th>
                                  
                                  <th style="font-size: 20px;">Date</th>
                                  <th style="font-size: 20px;">Status</th>
                                </tr>
                                <?php
                                if(mysqli_num_rows($result1)>0)
                                {
                                    while($result2=mysqli_fetch_array($result1))
                                    {
                                        ?>
                                                <tr>
                                                <td><input type="checkbox" name="ch[]" value="<?php echo $result2['state_id']; ?>"></td>
                                                <td><a href="addstate.php?up=<?php echo $result2['state_id'] ?>" style="text-decoration: none;">Edit</a></td>
                                                <td><a href="displaystate.php?delete=<?php echo $result2['state_id'] ?>" onclick="return confirm('Are you sure want to delete?')" style="text-decoration: none;">Delete</a></td>
                                                <td><?php echo $result2['state_id']; ?></td>
                                                <td><?php echo $result2['state_name']; ?></td>
                                                <td><?php echo $result2['state_date']; ?></td>
                                                <td><a href="displaystate.php?id=<?php echo $result2['state_id']; ?>&&status=<?php echo $result2['state_status']; ?>"><?php echo $result2['state_status']; ?></a></td>
                                                 </tr>
                                        <?php 
                                    }
                                }
                                else
                                {
                                    ?><h2><b><?php echo"Record not found";?></b></h2><?php 
                                }
                                ?>
                                <tr>
                                    <th colspan="5">
                                    <?php
                                        if(isset($_REQUEST['page'])==1)
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
                                            if($i==isset($_REQUEST['page']))
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
                                        if(isset($_REQUEST['page'])==$total_page)
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
                            &nbsp;&nbsp;
                            <button type="submit" class="btn btn-default" name="btnstatus" value="Status">Status</button>
                            &nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-default" name="btndelete" value="Delete" onclick="return confirm('Are You Sure Want To delete?')">Delete</button>
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
