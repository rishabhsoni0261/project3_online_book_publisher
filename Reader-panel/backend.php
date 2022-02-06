<?php
  $connection=mysqli_connect("localhost","root","","project");
    if($_REQUEST['category_id'])
    {
        $id=$_REQUEST['category_id'];
         $subcategory="select * from subcategory where category_id='$id'";
        $subcategory1=mysqli_query($connection,$subcategory);
        while($subcategory2=mysqli_fetch_array($subcategory1))
        {
             
             ?>
                <option value="<?php echo $subcategory2['subcategory_id']; ?>"><?php echo $subcategory2['subcategory_name']; ?></option>        
             <?php 
        }
        
    }
    if($_REQUEST['membership_id'])
    {
        $memid=$_REQUEST['membership_id'];
        $submem="select * from submembership where membership_id='$memid' ";
        $submem1=mysqli_query($connection,$submem);
        while($submem2=mysqli_fetch_array($submem1))
        {
            ?>
                <option value="<?php echo $submem2['submembership_id'] ?>"><?php echo $submem2['submembership_duration'] ?></option>
            <?php
        } 
        
    }
    
    if($_REQUEST['submembership_id'])
    {
        $submemid=$_REQUEST['submembership_id'];
        $memprice="select * from membership_price where submembership_id='$submemid'";
        $memprice1=mysqli_query($connection,$memprice);
        while($memprice2=mysqli_fetch_array($memprice1))
        {
            ?>
                <option><?php echo $memprice2['membership_price'] ?></option>
            <?php
        } 
    }
?>
