<?php
  
  class model
  {
      function insert_reg1($name,$email,$address,$state,$city,$mobile,$password)
      {
          $connection=mysqli_connect("localhost","root","","project");
          $insert="insert into reader(reader_name,reader_email,reader_address,reader_state,reader_city,reader_mobile,reader_password) values('$name','$email','$address','$state','$city','$mobile','$password')";
          mysqli_query($connection,$insert);
      }
      function select_state1()
      {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from state";
        $select1=mysqli_query($connection,$select);
        return $select1;
      }
      function select_city1()
      {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from city";
        $select1=mysqli_query($connection,$select);
        return $select1;
      }
      function user_login1($email,$password)
      {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from reader where reader_email='$email' and reader_password='$password'";
        $select1=mysqli_query($connection,$select);
        return $select1;
      }
      function profile_data1()
      {
        $connection=mysqli_connect("localhost","root","","project");
        $id=$_SESSION['id'];
        $select="select * from reader where reader_id='$id'";
        $select1=mysqli_query($connection,$select);
        return $select1;
      }
      function fetch_shipping_address()
      {
        $connection=mysqli_connect("localhost","root","","project");
        $id=$_SESSION['id'];
        $select_address="select * from shipping_address where reader_id='$id' order by address_id desc";
        $address=mysqli_query($connection,$select_address);
        return $address;
      }
      function change_password1($oldpassword,$id)
      {
          $connection=mysqli_connect("localhost","root","","project");
          $select="select * from reader where reader_password='$oldpassword' and reader_id='$id'";
          $select1=mysqli_query($connection,$select);
          return $select1;
      }
      function update_password($newpassword,$id)
      {
        $connection=mysqli_connect("localhost","root","","project");
        $up="update reader set reader_password='$newpassword' where reader_id='$id'";
        mysqli_query($connection,$up);
      }
      function edit_profile1()
      {
        $connection=mysqli_connect("localhost","root","","project");
        $id=$_SESSION['id'];
        $select="select * from reader where reader_id='$id'";
        $select1=mysqli_query($connection,$select);
        $select2=mysqli_fetch_array($select1);
        return $select2;
      }
      function update_profile1($id,$name,$email,$address,$city,$state,$mobile)
      {
        $connection=mysqli_connect("localhost","root","","project");
        $id=$_SESSION['id'];
        $update="update reader set reader_name='$name',reader_email='$email',reader_address='$address',reader_city='$city',reader_state='$state',reader_mobile='$mobile' where reader_id='$id'";
        mysqli_query($connection,$update);
      }
      function display_books1()
      {
          $connection=mysqli_connect("localhost","root","","project");
          $select="select * from book limit 6"; 
          $select1=mysqli_query($connection,$select) or die(mysqli_error($connection));
          return $select1;
      }
      function display_bookdetails1($book_id)
      {
          $connection=mysqli_connect("localhost","root","","project");
          $select="select * from book as b, category as c, subcategory as s where b.category_id=c.category_id and b.subcategory_id=s.subcategory_id and b.book_id='$book_id'";
          $select1=mysqli_query($connection,$select) ;
          return $select1;
      }
      function select_category1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from category";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function select_subcategory1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from subcategory";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function select_book1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from book as b, category as c, subcategory as s where b.category_id=c.category_id and b.subcategory_id=s.subcategory_id";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
     function related_books1($category_name,$book_id)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from book as b, category as c where b.category_id=c.category_id and category_name='$category_name' and b.book_id!='$book_id'";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function search_book1($searchword)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from book as b, category as c where b.category_id=c.category_id and book_name like '%$searchword%' or book_author_name like '%$searchword%'";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function insert_bookreview1($bookreview,$reader_id,$book_id)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $insert="insert into book_review(bookreview_details,reader_id,book_id) values ('$bookreview','$reader_id','$book_id')";
        mysqli_query($connection,$insert);
    }
    function select_bookreview1($book_id)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from book_review as b, reader as r where b.reader_id=r.reader_id and b.book_id='$book_id' ";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function select_publisher1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from publisher";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function display_pagination1($from,$to)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from book as b, category as c where b.category_id=c.category_id limit $from,$to";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function add_wishlist1($book_id,$reader_id,$category_id,$subcategory_id)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $insert="insert into wishlist (book_id,reader_id,category_id,subcategory_id) values ('$book_id','$reader_id','$category_id','$subcategory_id')" ;
        mysqli_query($connection,$insert);
    }
    function select_wishlist1($reader_id)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from wishlist as w, book as b, category as c, subcategory as sc where b.book_id=w.book_id and c.category_id=w.category_id and sc.subcategory_id=w.subcategory_id and w.reader_id='$reader_id'";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function select_bookrw()
      {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from book_review";
        $select1=mysqli_query($connection,$select);
        return $select1;
      }
    function select_enquiry1($book_id)
      {
          $connection=mysqli_connect("localhost","root","","project");
          $select="select * from book as b, category as c, subcategory as s where b.category_id=c.category_id and b.subcategory_id=s.subcategory_id and b.book_id='$book_id'"; 
          $select1=mysqli_query($connection,$select);
          return $select1;
      }
      function select_rdenq1($reader_id)  
      {
          $connection=mysqli_connect("localhost","root","","project");
          $select="select * from reader where reader_id='$reader_id'"; 
          $select1=mysqli_query($connection,$select);
          return $select1;
      }
      function insert_enquiry1($bookname,$bookid,$readername,$readerid,$readeremail,$readermobile,$bookmessage)
      {
        $connection=mysqli_connect("localhost","root","","project");
        $insert="insert into book_enquiry(book_name,book_id,enquiry_name,reader_id,enquiry_email,enquiry_phone,enquiry_description) values ('$bookname','$bookid','$readername','$readerid','$readeremail','$readermobile','$bookmessage')";
        mysqli_query($connection,$insert);
      }
      function insert_cart1($book_id,$reader_id,$book_qty,$book_price,$total_price)
      {
        $connection=mysqli_connect("localhost","root","","project");
        $insert="insert into cart (book_id,reader_id,book_quantity,book_price,total_book_price) values('$book_id','$reader_id','$book_qty','$book_price','$total_price')";
        mysqli_query($connection,$insert) or die(mysqli_error($connection));
      }
      function select_cart1($reader_id)
      {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from cart as c, reader as r, book as b where b.book_id=c.book_id and r.reader_id=c.reader_id and c.reader_id='$reader_id'";
        $select1=mysqli_query($connection,$select);
        return $select1;
      }
      function total_count_price_cart($reader_id)
      {
        $connection=mysqli_connect("localhost","root","","project");
        $sum="select sum(total_book_price) from cart where reader_id='$reader_id'";
        $sum1=mysqli_query($connection,$sum);
        return $sum1;
      }
      function remove_wishlist1($wishlist_id)
      {
        $connection=mysqli_connect("localhost","root","","project");
        $delete="delete from wishlist where wishlist_id='$wishlist_id'";
        mysqli_query($connection,$delete);
      }
      function remove_cartproduct1($cart_id)
      {
        $connection=mysqli_connect("localhost","root","","project");
        $delete="delete from cart where cart_id='$cart_id'";
        mysqli_query($connection,$delete);
      }
      function duplicate_cart1($book_id,$reader_id)
      {
        $connection=mysqli_connect("localhost","root","","project");
        $cart="select * from cart where book_id='$book_id' and reader_id='$reader_id'";
        $cart1=mysqli_query($connection,$cart);
        return $cart1;
      }
      function update_qty($nowqty,$nowtotalprice,$cart_id)
      {
        $connection=mysqli_connect("localhost","root","","project");
        $update="update cart set book_quantity='$nowqty', total_book_price='$nowtotalprice' where cart_id='$cart_id'";
        mysqli_query($connection,$update);
      }
      function insert_orders($bookid,$reader_id,$qty,$totalprice)
      {
          $connection=mysqli_connect("localhost","root","","project");
          echo $insert="insert into orders(book_id,reader_id,quantity,total_price) values('$bookid','$reader_id','$qty','$totalprice')";
          mysqli_query($connection,$insert) or die(mysqli_error($connection));         
      }
      function insert_websitereview1($readername,$readermessage,$reader_id,$readeremail,$readerphone)
      {
        $connection=mysqli_connect("localhost","root","","project");
         $insert="insert into website_review(review_name,website_details,reader_id,review_email,review_phone) values('$readername','$readermessage','$reader_id','$readeremail','$readerphone')";
        mysqli_query($connection,$insert) or die(mysqli_error($connection));
      }
      function select_cat1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from category";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function select_subcat1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $sub="select * from subcategory";
        $sub1=mysqli_query($connection,$sub);
        return $sub1;
    }
    function related_category1($category_id)
    {
          $connection=mysqli_connect("localhost","root","","project");
          $relcat="select * from book as b, category as c where b.category_id=c.category_id and b.category_id='$category_id'"; 
          $relcat1=mysqli_query($connection,$relcat);
          return $relcat1;        
    }
    function related_subcategory1($subcategory_id)
    {
          $connection=mysqli_connect("localhost","root","","project");
          $relsubcat="select * from book as b, category as c, subcategory as sc where b.category_id=c.category_id and b.subcategory_id=sc.subcategory_id and b.subcategory_id='$subcategory_id'"; 
          $relsubcat1=mysqli_query($connection,$relsubcat);
          return $relsubcat1;        
    }
    function related_author1($author_name)
    {
          $connection=mysqli_connect("localhost","root","","project");
          $relauthor="select * from book as b, category as c where b.category_id=c.category_id and b.book_author_name='$author_name'"; 
          $relauthor1=mysqli_query($connection,$relauthor);
          return $relauthor1;        
    }
    function select_mem1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $mem="select * from membership ";
        $mem1=mysqli_query($connection,$mem);
        return $mem1;
    }
     function select_submem1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $submem="select * from submembership ";
        $submem1=mysqli_query($connection,$submem);
        return $submem1;
    }
  }
?>
