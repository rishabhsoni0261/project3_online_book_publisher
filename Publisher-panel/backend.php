<?php
  $connection=mysqli_connect("localhost","root","","project");
    if($_REQUEST['category_id'])
    {
        $id=$_REQUEST['category_id'];
         $subcat="select * from subcategory where category_id='$id'";
        $subcat1=mysqli_query($connection,$subcat);
        while($subcat2=mysqli_fetch_array($subcat1))
        {
             
             ?>
                <option value="<?php echo $subcat2['subcategory_id']; ?>"><?php echo $subcat2['subcategory_name']; ?></option>        
             <?php 
        }
        
    }
?>
