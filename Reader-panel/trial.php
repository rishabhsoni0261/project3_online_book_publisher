<?php
include("controller.php");
$ob=new controller;
$select=$ob->display_books();
?>
<html>
<body>
    <div>
        <?php
                            while($select1=mysqli_fetch_array($select))
                            {
                                ?>
                                    <div>
                                    <img src="<?php echo $select1['book_cover_page'] ?>" alt="New Releaase">
                                    </div>
                                  <?php
                            }
                        ?>   
    </div>
</body>
</html>