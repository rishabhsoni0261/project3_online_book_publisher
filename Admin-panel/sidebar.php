<?php
  
?>
<html>
<body>
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <!--left-fixed -navigation-->
        <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="home.php"><span class="fa fa-area-chart"></span> OCEAN<span class="dashboard_text" style="font-size: 20px;">OF BOOKS</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="home.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
              
                     
             
              
              <li class="treeview">
                <a href="#">
                <i class="fa fa-edit"></i> <span>Manage State</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="addstate.php"><i class="fa fa-angle-right"></i>Add State</a></li>
                  <li><a href="displaystate.php"><i class="fa fa-angle-right"></i>View State</a></li>
                </ul>
              </li>
              
              <li class="treeview">
                <a href="#">
                <i class="fa fa-table"></i> <span>Manage City</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="addcity.php"><i class="fa fa-angle-right"></i>Add City</a></li>
                  <li><a href="displaycity.php"><i class="fa fa-angle-right"></i>View City</a></li>
                </ul>
              </li>
              
              <li class="treeview">
                <a href="#">
                <i class="fa fa-table"></i> <span>Manage Category</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="category.php"><i class="fa fa-angle-right"></i>Add Category</a></li>
                  <li><a href="displaycategory.php"><i class="fa fa-angle-right"></i>View Category</a></li>
                </ul>
              </li>
              
                <li class="treeview">
                <a href="#">
                <i class="fa fa-th"></i> <span>Manage Sub-Category</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="subcategory.php"><i class="fa fa-angle-right"></i>Add Sub-Category</a></li>
                  <li><a href="displaysubcategory.php"><i class="fa fa-angle-right"></i>View Sub-Category</a></li>
                </ul>
              </li>
              
               <li class="treeview">
                <a href="view_orders.php">
                <i class="fa fa-shopping-cart"></i> <span>Manage Orders</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                
              </li>
              
              <!-- <li class="treeview">
                <a href="view_orders.php">
                <i class="fa fa-shopping-cart"></i> <span> Manage Orders </span>
              </li>
               -->
              <li class="treeview" >
                <a href="profile.php">
                <i class="fa fa-user"></i> <span> Profile </span>
                <i class="fa fa-angle-left pull-right"></i>
              </li>
              
              <li class="treeview" style="margin-top: -20px;">
                <a href="changepassword.php">
                <i class="fa fa-lock"></i> <span> Change Password </span>
                <i class="fa fa-angle-left pull-right"></i>
              </li>
              
              <li class="treeview" style="margin-top: -20px;">
                <a href="contact.php">
                <i class="fa fa-comment"></i> <span>Contact </span>
               <i class="fa fa-angle-left pull-right"></i>
              </li>
              
              <!-- <li>
                <a href="salesreport.php">
                <i class="fa fa-th"></i> <span>Sales Report</span>
                <small class="label pull-right label-info"></small>
                </a>
              </li> -->
             
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
    </div>
</body>
</html>