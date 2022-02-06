<?php
 
 include("controller.php") ;
 $ob=new controller;
 $selbook=$ob->select_publishedbooks();
 $ob->delete_book();
 $ob->session_null();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>View Books</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
<form method="post">

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
         <?php
            include("header.php");
        ?> 
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        
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

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <!-- End Row -->
                <div class="row">
                    <div class="col-12 m-b-30">
                        <h4 class="d-inline">Published Books</h4>
                        
                        <div class="row">                                   
                        <?php
                            while($selbook1=mysqli_fetch_array($selbook))
                            {
                                
                         ?>
                            <div class="col-md-6 col-lg-3" style="margin-top: 10px;">
                                <div class="card">
                                
                                        <img class="img-fluid" src="<?php echo $selbook1['book_cover_page'] ?>" alt="Cover Photo Not Available" height="100px" width="500px">   
                                      
                                    
                                    
                                         <div class="card-body">
                                        <h5 class="card-title"><?php echo $selbook1['book_name'] ?></h5>
                                        <p class="card-text"><?php  echo $selbook1['book_description'] ?></p>
                                        <p class="card-text"><small class="text-muted"><?php echo $selbook1['book_regdate'] ?></small>
                                        <!--<input type="hidden" name="bookid" value="<?php //echo $select1['book_id'] ?>">
                                        <input type="hidden" name="path" value="<?php //echo $select1['book_cover_page'] ?>">
                                        <input type="hidden" name="path1" value="<?php //echo $select1['book_upload'] ?>">-->
                                        </p>
                                        
                                <div class="row">
                                    <div class="col-lg-12"> 
                                        <div class="rounded-button" style="margin-left: 130px;">
                                               <div class="sweetalert m-t-30">
                                            <a href="viewbooks.php?bookid=<?php echo $selbook1['book_id']?>&&path=<?php echo $selbook1['book_cover_page']?>&&path1=<?php echo $selbook1['book_upload']?>" class="btn mb-1 btn-rounded btn-danger btn-warning btn sweet-success-cancel" >Delete</a>
                                                </div>
                                        </div>
                                    </div>  
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-12"> 
                                        <div class="rounded-button" style="margin-right: 300px; margin-top: -40px;">
                                            
                                            <a href="publishbook.php?update=<?php echo $selbook1['book_id'] ?>" class="btn mb-1 btn-rounded btn-success">Update</a>
                                            
                                        </div>
                                    </div>
                                </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <?php 
                            }
                            ?>
                            <!-- End Col -->
                   
            <!-- #/ container -->
        </div>
        
                 
        
        </div>
        </div>
        </div>
        
        <!--**********************************
            Content body end
        ***********************************-->
          </div>
          </div>
        
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