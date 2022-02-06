<?php
 
include("controller.php");
$ob=new controller;
$ob->insert_publishbook();
$selcat=$ob->select_category();

$s=$ob->select_sub_category();
if (isset($_REQUEST['update'])) 
{
    
    $edit=$ob->edit_book();
    $edit1=mysqli_fetch_array($edit);
}
$ob->book_update();
$ob->session_null();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Publish Books</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

<script>

    function getsubcategory(id)
    {
      var a;
                
                if(window.XMLHttpRequest)
                {
                    a=new XMLHttpRequest;
                }

                a.onreadystatechange=function()
                {
                    if(a.readyState==4)
                    {
                            document.getElementById("subcategory").innerHTML=a.responseText;    
                    }    
                }    
                a.open("GET","backend.php?category_id="+id,true);
                a.send();  
    }
</script>    
</head>

<body>
  <form method="post" enctype="multipart/form-data" id="frm">
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

        <!-- row -->

            <div class="container-fluid">

            <div class="card" style="height: 1200px;">
                <div class="card-body">
                    <h4 class="card-title"><b>Select Category</b></h4>
                        <div class="input-group mb-3">
                           <?php 
                             if(isset($_REQUEST['update']))
                             {
                                 ?>
                                    <div class="input-group-prepend"><label class="input-group-text">Options</label>
                                            </div>
                                            <select class="custom-select" name="category">
                                                <option value="" selected="selected">Choose...</option>
                                                <?php 
                                                    while($s1=mysqli_fetch_array($selcat))
                                                    {
                                                        if($edit1['category_id']==$s1['category_id'])
                                                        {
                                                        ?>
                                                            <option selected value="<?php echo $edit1['category_id']; ?>"><?php echo $edit1['category_name']; ?></option>        
                                                        <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <option value="<?php echo $s1['category_id']; ?>"><?php echo $s1['category_name']; ?></option>        
                                                        <?php    
                                                        }
                                                         
                                                    }
                                                ?>
                                                
                                                
                                            </select>
                                        </div>
                                 
                                 <?php 
                             }
                             else
                             {
                                 ?>
                                    <div class="input-group-prepend">
                                                <label class="input-group-text">Options</label>
                                            </div>
                                            <select class="custom-select" name="category" onchange="getsubcategory(this.value)">
                                                <option selected="selected">Choose...</option>
                                                
                                                <?php 
                                                
                                                    while($selcat1=mysqli_fetch_array($selcat))
                                                    {
                                                        ?>
                                                            <option value="<?php echo $selcat1['category_id']; ?>"><?php echo $selcat1['category_name']; ?></option>        
                                                            
                                                        <?php 
                                                    }
                                                ?>
                                                
                                                
                                            </select>
                                        </div>
                                 <?php 
                             }
                           ?>
                        
                                            
                          
                        <h4 class="card-title"><b>Select Sub Category</b></h4>
                                        <div class="input-group mb-3">
                                        <?php 
                                          if(isset($_REQUEST['update']))
                                          {
                                            ?>
                                                 <div class="input-group-prepend">
                                                <label class="input-group-text">Options</label>
                                            </div>
                                            <select class="custom-select" name="subcategory">
                                                <option selected="selected">Choose...</option>
                                                <?php 
                                                    while($sel1=mysqli_fetch_array($s))
                                                    {
                                                        if($edit1['subcategory_id']==$sel1['subcategory_id'])
                                                        {
                                                           ?>
                                                            <option selected value="<?php echo $edit1['subcategory_id']; ?>"><?php echo $edit1['subcategory_name']; ?></option>        
                                                        <?php 
                                                        }
                                                        else
                                                        {
                                                        ?>
                                                            <option value="<?php echo $sel1['subcategory_id']; ?>"><?php echo $sel1['subcategory_name']; ?></option>        
                                                        <?php    
                                                        }
                                                         
                                                    }
                                             
                                          }
                                          else
                                          {
                                              ?>
                                              <div class="input-group-prepend">
                                                <label class="input-group-text">Options</label>
                                            </div>
                                            <select class="custom-select" name="subcategory" id="subcategory">
                                                <option selected="selected">Choose...</option>
                                                <?php 
                                                 
                                          }
                                        ?>
                                            
                                                
                                            </select>
                                        </div>
                                        
                                        <h4 class="card-title"><b>Book Name</b></h4>
                                         <div class="form-group">
                                         <?php
                                            if(isset($_REQUEST['update']))
                                            {
                                                ?>
                                                <input type="text" class="form-control input-rounded" placeholder="Enter Book Name" name="bookname" value="<?php echo $edit1['book_name'] ?>">
                                                <?php 
                                            }
                                            else
                                            {
                                                ?>
                                                    <input type="text" class="form-control input-rounded" placeholder="Enter Book Name" name="bookname">    
                                                <?php 
                                            }
                                        ?>
                                            
                                        </div>
                                        
                             
                          <h4 class="card-title"><b>Upload Cover Page</b></h4>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            
                                            
                                                        <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="coverpage">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                              
                                                            
                                        </div>
                                        
                                        
                          <h4 class="card-title"><b>Upload Book</b></h4>                  
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="bookpdf">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                        
                                        <h4 class="card-title"><b>Book Synopsis</b></h4>
                                        <div class="form-group">
                                        <?php 
                                          if(isset($_REQUEST['update']))
                                          {
                                              ?>
                                                <textarea class="form-control h-150px" rows="6" id="comment" placeholder="Enter Short Description of Book" name="bookdetails"><?php echo $edit1['book_description'] ?></textarea>                                                
                                              <?php 
                                          }
                                          else
                                          {
                                              ?>
                                                <textarea class="form-control h-150px" rows="6" id="comment" placeholder="Enter Short Description of Book" name="bookdetails"></textarea>  
                                              <?php 
                                          }
                                        ?>
                                            
                                        </div>
                                        
                                        
                                        <h4 class="card-title"><b>Author Name</b></h4>
                                         <div class="form-group">
                                         <?php 
                                           if(isset($_REQUEST['update']))
                                           {
                                               ?>
                                                <input type="text" class="form-control input-rounded" placeholder="Enter Author Name" name="authorname" value="<?php echo $edit1['book_author_name'] ?>">
                                               <?php 
                                           }
                                           else
                                           {
                                               ?>
                                                <input type="text" class="form-control input-rounded" placeholder="Enter Author Name" name="authorname">   
                                               <?php 
                                           }
                                         ?>
                                            
                                        </div>
                                                                                      
                                        
                                        <h4 class="card-title"><b>Total Pages</b></h4>
                                         <div class="form-group">
                                         <?php 
                                           if(isset($_REQUEST['update']))
                                           {
                                               ?>
                                                <input type="text" class="form-control input-rounded" placeholder="Enter No of Pages" name="totalpages" value="<?php echo $edit1['book_total_page'] ?>">
                                               <?php 
                                           }
                                           else
                                           {
                                               ?>
                                                <input type="text" class="form-control input-rounded" placeholder="Enter No of Pages" name="totalpages">   
                                               <?php 
                                           }
                                         ?>
                                            
                                        </div>
                                        
                                         
                                        <h4 class="card-title"><b>Book's ISBN</b></h4>                     
                                         <div class="form-group">
                                         <?php 
                                           if(isset($_REQUEST['update']))
                                           {
                                               ?>
                                                <input type="text" class="form-control input-rounded" placeholder="Enter ISBN" name="isbn" value="<?php echo $edit1['book_ISBN'] ?>">   
                                               <?php 
                                           }
                                           else
                                           {
                                               ?>
                                                <input type="text" class="form-control input-rounded" placeholder="Enter ISBN" name="isbn">
                                               <?php 
                                           }
                                         ?>
                                            
                                        </div>
                                        
                                        
                                        <h4 class="card-title"><b>Book Quantity</b></h4>                     
                                         <div class="form-group">
                                         <?php 
                                           if(isset($_REQUEST['update']))
                                           {
                                               ?>
                                                <input type="text" class="form-control input-rounded" placeholder="Enter Book Quantity" name="qty" value="<?php echo $edit1['book_qty'] ?>">   
                                               <?php 
                                           }
                                           else
                                           {
                                               ?>
                                                <input type="text" class="form-control input-rounded" placeholder="Enter Book Quantity" name="qty">
                                               <?php 
                                           } 
                                         ?>
                                            
                                        </div>    
                                        
                                        
                                        <h4 class="card-title"><b>Book Price</b></h4>                     
                                         <div class="form-group">
                                         <?php 
                                           if(isset($_REQUEST['update']))
                                           {
                                               ?>
                                                <input type="text" class="form-control input-rounded" placeholder="Enter Book Price" name="price" value="<?php echo $edit1['book_price'] ?>">   
                                               <?php 
                                           }
                                           else
                                           {
                                               ?>
                                                  <input type="text" class="form-control input-rounded" placeholder="Enter Book Price" name="price">
                                               <?php 
                                           }
                                         ?>
                                            
                                        </div>
                                        
                                        <br/>
                                        <div class="rounded-button">
                                        <?php
                                          if(isset($_REQUEST['update']))
                                          {
                                              ?>
                                                 <button type="submit" class="btn mb-1 btn-rounded btn-primary" name="btnupdate">Update
                                            </button>
                                              <?php 
                                          }
                                          else
                                          {
                                              ?>
                                              <button type="submit" class="btn mb-1 btn-rounded btn-primary" name="btninsert">Submit
                                            </button>
                                              <?php 
                                          }
                                        ?>
                                            
                                        </div>
                                        
                        </div> 
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
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