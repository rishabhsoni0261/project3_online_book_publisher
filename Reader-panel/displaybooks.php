<?php
    include("controller.php");
     error_reporting(0);
    $ob=new controller;
    $select=$ob->select_category();
    $s=$ob->select_subcategory();
    $book=$ob->select_book();
    $total_rows=mysqli_num_rows($book);
    $per_page=6;
    $total_page=ceil($total_rows/$per_page);
    $display=$ob->display_pagination();
    if(isset($_REQUEST['cpage']))
    {
        $cpage=$_REQUEST['cpage'];
    }
    $category=$ob->select_cat();
    $subcate=$ob->select_subcat();
    $relatedcat=$ob->related_category();
    $relatedsubcat=$ob->related_subcategory();
    $relatedauthor=$ob->related_author();
?>
<!DOCTYPE html>
<html lang="zxx">
    

<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>Display Books</title>

        <!-- Favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        
        <!-- Accordion Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/jquery.accordion.css">
        
        <!-- Stylesheet -->
        <link href="style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

<script>       
    function getsubcat(id)
    {
        //alert(ob);
      var a;
                
                if(window.XMLHttpRequest)
                {
                    a=new XMLHttpRequest;
                }

                a.onreadystatechange=function()
                {
                    if(a.readyState==4)
                    {
                            document.getElementById("subcat").innerHTML=a.responseText;    
                    }    
                }    
                a.open("GET","backend.php?category_id="+id,true);
                a.send();
    }

</script>
        
    </head>

    <body>

        <!-- Start: Header Section -->
        <?php 
            include("header.php");
        ?>
        <!-- End: Header Section -->

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header"> 
                    <h2>Books Listing</h2>
                    <span class="underline center"></span>
                    <p class="lead">Your Library is your paradise</p>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->

        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="books-media-gird">
                        <div class="container">
                            <div class="row">
                                <!-- Start: Search Section -->
                                <section class="search-filters">
                                    <div class="container">
                                        <div class="filter-box">
                                            <h3>What are you looking for at the library?</h3>
                                            <form method="post">
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="keywords">Search by Keyword</label>
                                                        <input class="form-control" placeholder="Search by Keyword" id="keywords" name="searchword" type="text">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="searchcat" style="    -webkit-appearance: none;
                                                                                         -moz-appearance: none;
                                                                                         appearance: none;
                                                                                         color: #707070;
                                                                                         border: 3px solid #f4f4f4;
                                                                                         border-radius: 3px;
                                                                                         outline: none;border: 3px solid #f4f4f4;
                                                                                         -webkit-box-shadow: none;
                                                                                         -moz-box-shadow: none;
                                                                                         box-shadow: none;
                                                                                         height: 56px;
                                                                                         padding: 5px 10px;
                                                                                         width: 100%;
                                                        " onchange="getsubcat(this.value); ">   
                                                            <option>Select the Category</option>
                                                            <?php
                                                                while($select1=mysqli_fetch_array($select)) 
                                                                {
                                                                    ?>
                                                                        <option value="<?php echo $select1['category_id'] ?>"><?php echo $select1['category_name']?></option>
                                                                       <?php         
                                                                }
                                                            ?>
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="form-group">
                                                        <select name="searchsubcat" id="subcat" class="form-control">
                                                            <option>All Subcategories</option>
                                                            
                                                            
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-6">
                                                    <div class="form-group">
                                                        <input class="form-control" type="submit" value="Search" name="btnsearch">
                                                    </div>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </section>
                                <!-- End: Search Section -->
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-md-push-3">
                                    <div class="filter-options margin-list">
                                        <div class="row">                                            
                                           
                                            <div class="col-md-3 col-sm-3 pull-right">
                                                <div class="filter-toggle">
                                                    <a href="displaybooks.php" class="active"><i class="glyphicon glyphicon-th-large"></i></a>
                                                    <a href="displaybookslistview.php"><i class="glyphicon glyphicon-th-list"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="books-gird">
                                    <ul>
                                    <?php 
                                    if(isset($_REQUEST['category_id']))
                                    {
                                        while($relatedcat1=mysqli_fetch_array($relatedcat))
                                        {    
                                        ?>
                                                <li>
                                              
                                                     <figure>
                                                    <img src="../publisher-panel/<?php echo $relatedcat1['book_cover_page'] ?>" alt="Cover Not Available" style="height: 450px;width: 250px;">
                                                    <figcaption>
                                                        <p><strong><?php echo $relatedcat1['book_name'] ?></strong></p>
                                                        <p><strong>Author:</strong>&nbsp;<?php echo $relatedcat1['book_author_name'] ?></p>
                                                    </figcaption>
                                                </figure> 
                                                <div></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><?php echo $relatedcat1['book_name'] ?></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong>&nbsp;<?php echo $relatedcat1['book_author_name'] ?></li>
                                                                <li><strong>ISBN:</strong>&nbsp;<?php echo $relatedcat1['book_ISBN'] ?></li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p><?php echo $relatedcat1['book_description'] ?></p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="bookdetails.php?book_id=<?php echo $relatedcat1['book_id'] ?>&&categoryname=<?php echo $relatedcat1['category_name'] ?>">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                       
                                            </li>
                                        <?php
                                        }
                                    }
                                    else if(isset($_REQUEST['subcategory_id']))
                                    {
                                        while($relatedsubcat1=mysqli_fetch_array($relatedsubcat))
                                        {    
                                        ?>
                                                <li>
                                              
                                                     <figure>
                                                    <img src="../publisher-panel/<?php echo $relatedsubcat1['book_cover_page'] ?>" alt="Cover Not Available" style="height: 450px;width: 250px;">
                                                    <figcaption>
                                                        <p><strong><?php echo $relatedsubcat1['book_name'] ?></strong></p>
                                                        <p><strong>Author:</strong>&nbsp;<?php echo $relatedsubcat1['book_author_name'] ?></p>
                                                    </figcaption>
                                                </figure> 
                                                <div></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><?php echo $relatedsubcat1['book_name'] ?></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong>&nbsp;<?php echo $relatedsubcat1['book_author_name'] ?></li>
                                                                <li><strong>ISBN:</strong>&nbsp;<?php echo $relatedsubcat1['book_ISBN'] ?></li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p><?php echo $relatedsubcat1['book_description'] ?></p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="bookdetails.php?book_id=<?php echo $relatedsubcat1['book_id'] ?>&&categoryname=<?php echo $relatedsubcat1['category_name'] ?>">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                       
                                            </li>
                                        <?php
                                        }
                                    }
                                    else if(isset($_REQUEST['author_name']))
                                    {
                                        while($relatedauthor1=mysqli_fetch_array($relatedauthor))
                                        {    
                                        ?>
                                                <li>
                                              
                                                     <figure>
                                                    <img src="../publisher-panel/<?php echo $relatedauthor1['book_cover_page'] ?>" alt="Cover Not Available" style="height: 450px;width: 250px;">
                                                    <figcaption>
                                                        <p><strong><?php echo $relatedauthor1['book_name'] ?></strong></p>
                                                        <p><strong>Author:</strong>&nbsp;<?php echo $relatedauthor1['book_author_name'] ?></p>
                                                    </figcaption>
                                                </figure> 
                                                <div></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><?php echo $relatedauthor1['book_name'] ?></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong>&nbsp;<?php echo $relatedauthor1['book_author_name'] ?></li>
                                                                <li><strong>ISBN:</strong>&nbsp;<?php echo $relatedauthor1['book_ISBN'] ?></li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p><?php echo $relatedauthor1['book_description'] ?></p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="bookdetails.php?book_id=<?php echo $relatedauthor1['book_id'] ?>&&categoryname=<?php echo $relatedauthor1['category_name'] ?>">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                       
                                            </li>
                                        <?php
                                        }
                                    }
                                    else
                                    {
                                         while($display1=mysqli_fetch_array($display))
                                        {
                                              
                                                   ?>
                                            
                                                <li>
                                              
                                                     <figure>
                                                    <img src="../publisher-panel/<?php echo $display1['book_cover_page'] ?>" alt="Cover Not Available" style="height: 450px;width: 250px;">
                                                    <figcaption>
                                                        <p><strong><?php echo $display1['book_name'] ?></strong></p>
                                                        <p><strong>Author:</strong>&nbsp;<?php echo $display1['book_author_name'] ?></p>
                                                    </figcaption>
                                                </figure> 
                                                <div></div>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <div class="books-social-sharing">
                                                            <ul>
                                                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="optional-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Add TO CART">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Like">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                
                                                                <li>
                                                                    <a href="#" target="_blank" data-toggle="blog-tags" data-placement="top" title="Print">
                                                                        <i class="fa fa-print"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><?php echo $display1['book_name'] ?></h3>
                                                            <ul>
                                                                <li><strong>Author:</strong>&nbsp;<?php echo $display1['book_author_name'] ?></li>
                                                                <li><strong>ISBN:</strong>&nbsp;<?php echo $display1['book_ISBN'] ?></li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p><?php echo $display1['book_description'] ?></p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary" href="bookdetails.php?book_id=<?php echo $display1['book_id'] ?>&&categoryname=<?php echo $display1['category_name'] ?>">Read More</a>
                                                        </footer>
                                                    </div>
                                                </div>                                       
                                            </li>
                                                    <?php 
                                        }
                                              
                                    }
                                    ?>   
                                                
                                                                                         
                                        </ul>
                                    </div>
                                    
                                    <nav class="navigation pagination text-center">
                                        <h2 class="screen-reader-text">Posts navigation</h2>
                                        <div class="nav-links">
                                        
                                        <?php 
                                                    if($cpage>1)
                                                    {   
                                                         
                                                        ?>                             
                                                        <a href="displaybooks.php?cpage=1">First</a>&nbsp;&nbsp;
                                                        <a href="displaybooks.php?cpage=<?php echo $_REQUEST['cpage']-1; ?>"> Previous</a> 
                                                         <?php 
                                                    }
                                                    else
                                                    {                               
                                                         echo "First"?> &nbsp;&nbsp;<?php echo "Previous" ; 
                                                        
                                                    }
                                             
                                             for($i=1;$i<=$total_page;$i++)
                                            {
                                               
                                                        ?>
                                                            <a href="displaybooks.php?cpage=<?php echo $i; ?>" style="text-decoration: none;" class="page-numbers"> <?php echo $i; ?> </a>
                                                        <?php
                                                   
                                            }
                                            if($cpage<$total_page)
                                            {

                                                if(!isset($cpage))
                                                {

                                                ?>
                                                    <a href="displaybooks.php?cpage=<?php echo $_REQUEST['cpage']+2; ?>">Next</a>&nbsp;&nbsp;
                            
                                                <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                        <a href="displaybooks.php?cpage=<?php echo $_REQUEST['cpage']+1; ?>">Next</a>&nbsp;&nbsp;
                                                         
                                                    <?php 
                                                }
                                            }
                                            else
                                            {
                                                echo "Next"; ?>&nbsp;&nbsp;<?php 
                                            }
                            ?>

                                            <a  href="displaybooks.php?cpage=<?php echo $total_page; ?>">Last </a>
                                            
                                            
                                        </div>
                                    </nav>
                                </div>
                                <div class="col-md-3 col-md-pull-9">
                                    <aside id="secondary" class="sidebar widget-area" data-accordion-group>
                                        <div class="widget widget_related_search open" data-accordion>
                                            <h4 class="widget-title" data-control>Related Searches</h4>
                                            <div data-content>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Category</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                        <?php
                                                            while($cat5=mysqli_fetch_array($category))
                                                            {
                                                                ?>
                                                                    <li><a href="displaybooks.php?category_id=<?php echo $cat5['category_id'] ?>"><?php echo $cat5['category_name'] ?> <span></span></a></li>    
                                                                <?php 
                                                            }
                                                            ?>
                                                            
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Sub Category</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <?php
                                                            while($mini=mysqli_fetch_array($subcate))
                                                            {
                                                                ?>
                                                                    <li><a href="displaybooks.php?subcategory_id=<?php echo $mini['subcategory_id'] ?>"><?php echo $mini['subcategory_name'] ?> <span></span></a></li>    
                                                                <?php 
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div data-accordion>
                                                    <h5 class="widget-sub-title" data-control>Authors</h5>
                                                    <div class="widget_categories" data-content>
                                                        <ul>
                                                            <?php
                                                            while($author=mysqli_fetch_array($book))
                                                            {
                                                                ?>
                                                                    <li><a href="displaybooks.php?author_name=<?php echo $author['book_author_name'] ?>"><?php echo $author['book_author_name'] ?> <span></span></a></li>    
                                                                <?php 
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                               
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                       
                                        </aside>
                                </div>
                            </div>
                        </div>

                        <!-- Start: Staff Picks -->
                      <!--  <section class="team staff-picks">
                            <div class="container">
                                <div class="center-content">
                                    <h2 class="section-title">Staff Picks</h2>
                                    <span class="underline center"></span>
                                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <div class="team-list">
                                    <div class="team-member">
                                        <figure>
                                            <img src="images/books-media/staff-pick/staff-picks-01.jpg" alt="Staff Pick" />
                                        </figure>
                                        <div class="content-block">
                                            <div class="member-info">
                                                <div class="member-thumb">
                                                    <img src="images/books-media/staff-pick/gail.jpg" alt="Katherine">
                                                </div>
                                                <div class="member-content">
                                                    <span class="designation">Downtown & Business</span>
                                                    <h4>The Collector</h4>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-skype"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                                                <a class="btn btn-primary" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-member">
                                        <figure>
                                            <img src="images/books-media/staff-pick/staff-picks-02.jpg" alt="Staff Pick" />
                                        </figure>
                                        <div class="content-block">
                                            <div class="member-info">
                                                <div class="member-thumb">
                                                    <img src="images/books-media/staff-pick/katherine.jpg" alt="Katherine">
                                                </div>
                                                <div class="member-content">
                                                    <span class="designation">Katherine, West End</span>
                                                    <h4>Mongolia</h4>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-skype"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                                                <a class="btn btn-primary" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-member">
                                        <figure>
                                            <img src="images/books-media/staff-pick/staff-picks-03.jpg" alt="Staff Pick" />
                                        </figure>
                                        <div class="content-block">
                                            <div class="member-info">
                                                <div class="member-thumb">
                                                    <img src="images/books-media/staff-pick/chris.jpg" alt="Katherine">
                                                </div>
                                                <div class="member-content">
                                                    <span class="designation">Chris, East Liberty</span>
                                                    <h4>The Revolution</h4>
                                                    <ul class="social">
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-facebook-f"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank">
                                                                <i class="fa fa-skype"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...</p>
                                                <a class="btn btn-primary" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                        <!-- End: Staff Picks -->
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Products Section -->

        <!-- Start: Social Network -->
       <!-- <section class="social-network section-padding">
            <div class="container">
                <div class="center-content">
                    <h2 class="section-title">Follow Us</h2>
                    <span class="underline center"></span>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <ul>
                    <li>
                        <a class="facebook" href="#" target="_blank">
                            <span>
                                <i class="fa fa-facebook-f"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="twitter" href="#" target="_blank">
                            <span>
                                <i class="fa fa-twitter"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="google" href="#" target="_blank">
                            <span>
                                <i class="fa fa-google-plus"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="rss" href="#" target="_blank">
                            <span>
                                <i class="fa fa-rss"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="linkedin" href="#" target="_blank">
                            <span>
                                <i class="fa fa-linkedin"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="youtube" href="#" target="_blank">
                            <span>
                                <i class="fa fa-youtube"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </section> -->
        <!-- End: Social Network -->

        <!-- Start: Footer -->  
        <br>
        <br>
        <br>
        <?php 
            include("footer.php");
        ?>
        <!-- End: Footer -->

        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
       <script type="text/javascript" src="js/main.js"></script>
        </form>
    </body>


</html>