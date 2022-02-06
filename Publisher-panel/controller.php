<?php


 
 include("model.php") ;
  class controller
  {
      function select_state()
      {
          $ob=new model;
          $select=$ob->select_state1();
          return $select;
      }
      function select_city()
      {
          $ob=new model;
          $select=$ob->select_city1();
          return $select;
      }
      function insert_reg()
      {
          if(isset($_REQUEST['btnsubmit']))
          {
              $name=$_REQUEST['pubname'];
              $email=$_REQUEST['pubemail'];
              $password=$_REQUEST['pubpassword'];
              $confirmpassword=$_REQUEST['pubcnfpassword'];
              $state=$_REQUEST['pubstate'];
              $city=$_REQUEST['pubcity'];
              $ob=new model;
              if($password==$confirmpassword)
              {
                  $ob->insert_reg1($name,$email,$password,$state,$city);
                  header("location:index.php");
              }
              else
              {
                  ?>
                  <script type="text/javascript">
                  alert("Please enter same password");
                  </script>
                  <?php
              }
          }
      }
      function user_login()   
      {
          if(isset($_REQUEST['btnlogin']))
          {
              $email=$_REQUEST['pubemail'];
              $password=$_REQUEST['pubpassword'];
              $ob=new model;
              $select=$ob->user_login1($email,$password);
              $select1=mysqli_fetch_array($select);
              if(mysqli_num_rows($select)==1)
              {
                $_SESSION['email']=$email;
                $_SESSION['pubid']=$select1['publisher_id'];
                header("location:home.php");  
              }
              else
              {
                ?>
                    <script type="text/javascript">
                        alert("Please enter valid email or password");
                        </script>
                <?php
              }
          }
          
      }
      function profile_display()
      {
          $ob=new model;
          $select=$ob->profile_display1();
          return $select;
      }
      function session_not_null()
      {
          if(isset($_SESSION['email'])!='')
          {
            header("location:home.php");
          }
      }
      function session_null()
      {
          if(isset($_SESSION['email'])=='')
          {
              header("location:index.php");
          }
      }
      function change_password() 
      {
          if(isset($_REQUEST['btnpassword']))
          {
              $oldpassword=$_REQUEST['oldpass'];
              $newpassword=$_REQUEST['newpass'];
              $confirmpassword=$_REQUEST['confirmpass'];
              $id=$_SESSION['pubid'];
              $ob=new model;
              $select=$ob->change_password1($oldpassword,$id);
              if(mysqli_num_rows($select)==1)
              {
                  if($newpassword==$confirmpassword)
                  {
                     $ob->update_password($newpassword,$id);
                     header("location:app-profile.php"); 
                  }
                  else
                  {
                    ?>
                        <script type="text/javascript">
                        alert("Please check new password & confirm password");
                        </script>
                    <?php 
                    }
              }
              else
              {
                ?>
                    <script type="text/javascript">
                    alert("Old Password Is Incorrect");
                    </script>
                <?php  
              }
          }
      }
      function edit_profile()
      {
          if(isset($_REQUEST['edit']))
          {
              $ob=new model;
              $select=$ob->edit_profile1();
              return $select;
          }
      }
      function update_profile()
      {
          if(isset($_REQUEST['btnupdate']))
          {
            $pub_id=$_SESSION['pubid'];
            $name=$_REQUEST['pubname'];
            $email=$_REQUEST['pubemail'];
            $state=$_REQUEST['state'];
            $city=$_REQUEST['city'];
            $ob=new model;
            $ob->update_profile1($name,$email,$state,$city,$pub_id);
            header("location:app-profile.php");
          }
      }
      function select_category()
      {
          $ob=new model;
          $select=$ob->select_category1();
          return $select;
      }
      function select_sub_category()
      {
          $ob=new model;
          $select=$ob->select_sub_category1();
          return $select;
      }
      function insert_publishbook()
      {
          if(isset($_REQUEST['btninsert']))
          {
              $b_categoryid=$_REQUEST['category'];
              
              $b_subcategoryid=$_REQUEST['subcategory'];
              $b_bookname=$_REQUEST['bookname'];
              $f=$_FILES['coverpage']['name'];
              $tmp=$_FILES['coverpage']['tmp_name'];
              $path="coverpage/".$f;
              move_uploaded_file($tmp,$path);
              
              
              $f1=$_FILES['bookpdf']['name'];
              $tmp1=$_FILES['bookpdf']['tmp_name'];
              $path1="ebook_uploaded/".$f1;
              move_uploaded_file($tmp1,$path1);
              
              
              $b_bookdetails=$_REQUEST['bookdetails'];
              $b_authorname=$_REQUEST['authorname'];
              $b_totalpages=$_REQUEST['totalpages'];
              $b_isbn=$_REQUEST['isbn'];
              $b_qty=$_REQUEST['qty'];
              $b_price=$_REQUEST['price'];
              $id;
              $ob=new model;
              
                    $ob->insert_publishbook1($b_categoryid,$b_subcategoryid,$b_bookname,$path,$path1,$b_bookdetails,$b_authorname,$b_totalpages,$b_isbn,$b_qty,$b_price,$id);
                    header("location:viewbooks.php");    
              
              
              
          }
          
      }
      function select_publishedbooks()
          {
              $ob=new model;
              $select=$ob->select_publishedbooks1();
              return $select;
          }
          function delete_book()
          {
              if(isset($_REQUEST['bookid']) && ($_REQUEST['path']) && ($_REQUEST['path1']))
              {
                  $book_id=$_REQUEST['bookid'];
                  $path=$_REQUEST['path'];
                  $path1=$_REQUEST['path1'];
                  $ob=new model;
                  $ob->delete_book1($book_id);
                  unlink($path);
                  unlink($path1);
                  header("location:viewbooks.php");
              }
          }
          function edit_book()
          {
              if(isset($_REQUEST['update']))
              {
                $book_id=$_REQUEST['update'];
                $ob=new model;
                $edit=$ob->edit_book1($book_id);
                return $edit;
                header("location:publishbook.php");
              }
               
          }
          function book_update()
          {
              if(isset($_REQUEST['btnupdate']))
              {
                  $book_id=$_REQUEST['update'];
                  $categoryid=$_REQUEST['category'];
                  $subcategoryid=$_REQUEST['subcategory'];
                  $bookname=$_REQUEST['bookname'];
                  
                  
                  $f=$_FILES['coverpage']['name'];
                  $tmp=$_FILES['coverpage']['tmp_name'];
                  $path="coverpage/".$f;
                  move_uploaded_file($tmp,$path);
              
              
                 $f1=$_FILES['bookpdf']['name'];
                 $tmp1=$_FILES['bookpdf']['tmp_name'];
                 $path1="ebook_uploaded/".$f1;
                 move_uploaded_file($tmp1,$path1);
                 
                 $bookdetails=$_REQUEST['bookdetails'];
                 $authorname=$_REQUEST['authorname'];
                 $totalpages=$_REQUEST['totalpages'];
                 $isbn=$_REQUEST['isbn'];
                 $qty=$_REQUEST['qty'];
                 $price=$_REQUEST['price']; 
                 $ob=new model;
                 $ob->book_update1($categoryid,$subcategoryid,$bookname,$path,$path1,$bookdetails,$authorname,$totalpages,$isbn,$qty,$price,$book_id);
                 header("location:viewbooks.php");
              }
              
          }
          function select_bookreview()
          {
              $ob=new model;
              $select=$ob->select_bookreview1();
              return $select;
          }
          
      
  }
?>
