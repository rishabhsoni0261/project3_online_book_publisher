<?php
// error_reporting(0);
session_start();
include("model.php");

  class controller
  {
      function insert_reg()
      {
          if(isset($_REQUEST['btnsignup']))
          {
              $username=$_REQUEST['username'];
              $useremail=$_REQUEST['useremail'];
              $useraddress=$_REQUEST['useraddress'];
              $userstate=$_REQUEST['userstate'];
              $usercity=$_REQUEST['usercity'];
              $usermobile=$_REQUEST['usermobile'];
              $password=$_REQUEST['password'];
              $confirmpassword=$_REQUEST['confirmpassword'];
              $ob=new model;
              if($password==$confirmpassword)
              {
                    $ob->insert_reg1($username,$useremail,$useraddress,$userstate,$usercity,$usermobile,$password);
                    header("location:signup.php"); 
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
      function user_login()   
      {
          if(isset($_REQUEST['btnlogin']))
          {
              $email=$_REQUEST['email'];
              $password=$_REQUEST['password'];
              $ob=new model;
              $select=$ob->user_login1($email,$password);
              $select1=mysqli_fetch_array($select);
              if(mysqli_num_rows($select)==1)
              {
                $_SESSION['email']=$email;
                $_SESSION['id']=$select1['reader_id'];
                if(isset($_REQUEST['book_id']) && isset($_REQUEST['categoryname']))
                {
                    $book_id=$_REQUEST['book_id'];
                    $categoryname=$_REQUEST['categoryname'];
                    header("location:bookdetails.php?book_id=$book_id&&categoryname=$categoryname");
                }
                else if(isset($_REQUEST['book_id']) && isset($_REQUEST['category_id']) && isset($_REQUEST['subcategory_id']))
                {
                   $book_id=$_REQUEST['book_id'];
                   $category_id=$_REQUEST['category_id'];
                   $subcategory_id=$_REQUEST['subcategory_id']; 
                   header("location:wishlist.php?book_id=$book_id&&category_id=$category_id&&subcategory_id=$subcategory_id") ;
                }
                else if(isset($_REQUEST['book_id']))
                {
                    $book_id=$_REQUEST['book_id'];
                    $reader_id=$_SESSION['id'];
                    header("location:cart.php?book_id=$book_id&&reader_id=$reader_id");
                }
                else
                {
                    header("location:profile.php");      
                }
                
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
      function profile_data()
      {
          $ob=new model;
          $select=$ob->profile_data1();
          return $select;
      }
      function fetch_shipping_address()
      {
          $ob=new model;
          $address=$ob->fetch_shipping_address();
          return $address;
      }
      function change_password()
      {
          if(isset($_REQUEST['btnupdate']))
          {
              $oldpassword=$_REQUEST['oldpass'];
              $newpassword=$_REQUEST['newpass'];
              $confirmpassword=$_REQUEST['confirmpass'];
              $id=$_SESSION['id'];
              $ob=new model;
              $select=$ob->change_password1($oldpassword,$id);
              if(mysqli_num_rows($select)==1)
              {
                  if($newpassword==$confirmpassword)
                  {
                    $ob->update_password($newpassword,$id);
                    header("location:profile.php");
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
              
              $name=$_REQUEST['name'];
              $email=$_REQUEST['email'];
              $address=$_REQUEST['address'];
              $city=$_REQUEST['ct'];
              $state=$_REQUEST['st'];
              $mobile=$_REQUEST['mobile'];
              $ob=new model;
              $ob->update_profile1($id,$name,$email,$address,$city,$state,$mobile);
              header("location:profile.php");
          }
      }
      function display_books()
      {
          $ob=new model;
          $select=$ob->display_books1();
          return $select;
      }
      function display_bookdetails()
      {
          if(isset($_REQUEST['book_id']))
          {
              $book_id=$_REQUEST['book_id'];
              $ob=new model;
              $select=$ob->display_bookdetails1($book_id);
              return $select;
          }
      }
      function select_category()
      {
          $ob=new model;
          $select=$ob->select_category1();
          return $select;
      }
      function select_subcategory()
      {
          $ob=new model;
          $select=$ob->select_subcategory1();
          return $select;
      }
      function select_book()
      {
          $ob=new model;
          $select=$ob->select_book1();
           return $select;    
          
          
      }
      function related_books()
      {
              if(isset($_REQUEST['book_id']) && ($_REQUEST['categoryname']))
              {
                $book_id=$_REQUEST['book_id'];
                $category_name=$_REQUEST['categoryname'];
               
                $ob=new model;
                $select=$ob->related_books1($category_name,$book_id);
                return $select;    
              }
              
              
          
          
      }
      function insert_bookreview()
      {
          if(isset($_REQUEST['btnreview']))
          {
              $bookreview=$_REQUEST['review'];
              $reader_id=$_SESSION['id'];
              $book_id=$_REQUEST['book_id'];
              $ob=new model;
              $ob->insert_bookreview1($bookreview,$reader_id,$book_id);
              header("location:displaybooks.php");
          }
      }
      function select_bookreview()
      {
          if(isset($_REQUEST['book_id']))
          {
              $book_id=$_REQUEST['book_id'];
              $reader_id=$_SESSION['id'];
              $ob=new model;
              $select=$ob->select_bookreview1($book_id);
              return $select;
          }
          
          
      }
      function select_publisher()
      {
          
              $ob=new model;
              $select=$ob->select_publisher1();
              return $select;
      }
      function display_pagination()
      {
          $ob=new model;
          if(isset($_REQUEST['btnsearch']))
          {
              $searchword=$_REQUEST['searchword'];
              $search=$ob->search_book1($searchword);
              
              return $search;
          }
          else
          {
           if(isset($_REQUEST['cpage']))
        {

            $to=6;
            $from=($_REQUEST['cpage']-1)*$to;
            
            $data=$ob->display_pagination1($from,$to);
            return $data;
        }
        else
        {
            $from=0;
            $to=6;
            
            $data=$ob->display_pagination1($from,$to);
            return $data;

        }   
          }
          
      }
      function add_wishlist()
      {
          if(isset($_REQUEST['book_id']) && isset($_REQUEST['category_id']) && isset($_REQUEST['subcategory_id']))
          {
            $book_id=$_REQUEST['book_id'];
            $category_id=$_REQUEST['category_id'];
            $subcategory_id=$_REQUEST['subcategory_id'];
            $reader_id=$_SESSION['id'];
            $ob=new model;
            $ob->add_wishlist1($book_id,$reader_id,$category_id,$subcategory_id);
            header("location:likedbooks.php");
          }
      }
      function select_wishlist()
      {
          $reader_id=$_SESSION['id'];
          $ob=new model;
          $select=$ob->select_wishlist1($reader_id);
          return $select;
      }
      function select_bookrw()
      {
          $ob=new model;
          $select=$ob->select_bookrw();
          return $select;
      }
      function select_enquiry()
      {
          if(isset($_REQUEST['book_id']))
          {
              $book_id=$_REQUEST['book_id'];
              
              $ob=new model;
              $select=$ob->select_enquiry1($book_id);
              return $select;
          }
      }
      function select_rdenq() 
      {
          
              $reader_id=$_SESSION['id'];
              $ob=new model;
              $select=$ob->select_rdenq1($reader_id);
              return $select;
          
      }
      function insert_inquiry()
      {
          if(isset($_REQUEST['btnsubmit']) && isset($_REQUEST['book_id']) && isset($_REQUEST['categoryname']))
          {
              $categoryname=$_REQUEST['categoryname'];
              $bookname=$_REQUEST['bookname'];
              $bookid=$_REQUEST['bookid'];
              $readername=$_REQUEST['name'];
              $readerid=$_REQUEST['readerid'];
              $readeremail=$_REQUEST['email'];
              $readermobile=$_REQUEST['phone'];
              $bookmessage=$_REQUEST['message'];
              $ob=new model;
              $ob->insert_enquiry1($bookname,$bookid,$readername,$readerid,$readeremail,$readermobile,$bookmessage);
             
              header("location:bookdetails.php?book_id=$bookid&&categoryname=$categoryname");
          }
      }
      function insert_cart()
      {
          if(isset($_REQUEST['btncart']))
          {
              $book_id=$_REQUEST['book_id'];
              $reader_id=$_SESSION['id'];
              
              $ob=new model;
              $select=$ob->display_bookdetails1($book_id);
              $select1=mysqli_fetch_array($select);
              $book_price=$select1['book_price'];
              $book_qty=$_REQUEST['book_qty'];
              $total_price=$book_qty*$book_price;
              $cart=$ob->duplicate_cart1($book_id,$reader_id);
              if(mysqli_num_rows($cart)>0)
              {
                $cart1=mysqli_fetch_array($cart);
                $oldqty=$cart1['book_quantity'];
                $nowqty=$oldqty+$book_qty;
                $nowtotalprice=$nowqty*$book_price;
                $cart_id=$cart1['cart_id'];
                $ob->update_qty($nowqty,$nowtotalprice,$cart_id);
                
                
              }
              else
              {
                $ob->insert_cart1($book_id,$reader_id,$book_qty,$book_price,$total_price);
                   
              }
              header("location:cart.php");
          }
      }
      function select_cart()
      {
          $reader_id=$_SESSION['id'];
          $ob=new model;
          $select=$ob->select_cart1($reader_id);
          /*while($select1=mysqli_fetch_array($select))
          {
              if(isset($_REQUEST['btncheckout']))
              {
                  $bookid=$select['book_id'];
                  $qty=$select['book_quantity'];
                  $totalprice=$select['total_book_price'];
                  $ob->insert_orders($bookid,$reader_id,$qty,$totalprice);
              }
          }*/
          return $select;
      }
      function total_count_price_cart()
      {
        $reader_id=$_SESSION['id'];
        $ob=new model;
        $sum=$ob->total_count_price_cart($reader_id);
        return $sum;
      }
      function remove_wishlist()
      {
          if(isset($_REQUEST['delete']))
          {
              $wishlist_id=$_REQUEST['delete'];
              $ob=new model;
              $ob->remove_wishlist1($wishlist_id);
              header("location:likedbooks.php");
          }
      }
      function remove_cartproduct()
      {
          if(isset($_REQUEST['delete']))
          {
              $cart_id=$_REQUEST['delete'];
              $ob=new model;
              $ob->remove_cartproduct1($cart_id);
              header("location:cart.php");
          }
      }
      function insert_websitereview()
      {
         if(isset($_REQUEST['btnsubmit'])) 
         {
             $reader_id=$_SESSION['id'];
             $readername=$_REQUEST['readername'];
             $readeremail=$_REQUEST['readeremail'];
             $readerphone=$_REQUEST['readerphone'];
             $readermessage=$_REQUEST['readermessage'];
             $ob=new model;
             $ob->insert_websitereview1($readername,$readermessage,$reader_id,$readeremail,$readerphone);
             
         }
      }
      function select_cat()
      {
          $ob=new model;
          $select=$ob->select_cat1();
          return $select;
      }
      function select_subcat()
      {
          $ob=new model;
          $select=$ob->select_subcat1();
          return $select;
      }
      function related_category()
      {
          if(isset($_REQUEST['category_id']))
          {
              $category_id=$_REQUEST['category_id'];
              $ob=new model;
              $relcat=$ob->related_category1($category_id);
              return $relcat;
          }
      }
      function related_subcategory()
      {
          if(isset($_REQUEST['subcategory_id']))
          {
              $subcategory_id=$_REQUEST['subcategory_id'];
              $ob=new model;
              $relsubcat=$ob->related_subcategory1($subcategory_id);
              return $relsubcat;
          }
      }
      function related_author()
      {
          if(isset($_REQUEST['author_name']))
          {
              $author_name=$_REQUEST['author_name'];
              $ob=new model;
              $relauthor=$ob->related_author1($author_name);
              return $relauthor;
          }
      }
      function select_mem()
      {
          $ob=new model;
          $member=$ob->select_mem1();
          return $member;
      }
      function select_submem()
      {
          $ob=new model;
          $submember=$ob->select_submem1();
          return $submember;
      }
  }
?>
