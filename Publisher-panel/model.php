<?php
session_start();

class model
{
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
    function insert_reg1($name,$email,$password,$state,$city)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $insert="insert into publisher(publisher_name,publisher_email,publisher_password,publisher_state,publisher_city) values('$name','$email','$password','$state','$city')";
        mysqli_query($connection,$insert);
    }
    function user_login1($email,$password)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from publisher where publisher_email='$email' and publisher_password='$password'";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function profile_display1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $id=$_SESSION['pubid'];
        $select="select * from publisher where publisher_id='$id'";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function change_password1($oldpassword,$id)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from publisher where publisher_password='$oldpassword' and publisher_id='$id'";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function update_password($newpassword,$id)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $update="update publisher set publisher_password='$newpassword' where publisher_id='$id'";
        mysqli_query($connection,$update);
    }
    function edit_profile1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $id=$_SESSION['pubid'];
        $select="select * from publisher where publisher_id='$id'";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function update_profile1($name,$email,$state,$city,$pub_id)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $update="update publisher set publisher_name='$name', publisher_email='$email', publisher_state='$state', publisher_city='$city' where publisher_id='$pub_id'";
        mysqli_query($connection,$update);
    }
    function select_category1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from category";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function select_sub_category1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from subcategory";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function insert_publishbook1($b_categoryid,$b_subcategoryid,$b_bookname,$path,$path1,$b_bookdetails,$b_authorname,$b_totalpages,$b_isbn,$b_qty,$b_price,$id)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $id=$_SESSION['pubid'];
        $insert="insert into book(category_id,subcategory_id,book_name,book_cover_page,book_upload,book_description,book_author_name,book_total_page,book_ISBN,book_qty,book_price,publisher_id) values('$b_categoryid','$b_subcategoryid','$b_bookname','$path','$path1','$b_bookdetails','$b_authorname','$b_totalpages','$b_isbn','$b_qty','$b_price','$id')"  ;
        mysqli_query($connection,$insert)or die(mysqli_error($connection));
    }
    function select_publishedbooks1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $id=$_SESSION['pubid'];
        $select="select * from book where publisher_id='$id' ";
        $select1=mysqli_query($connection,$select) or die(mysqli_error($connection));
        return $select1;
    }
    function delete_book1($book_id)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $delete="delete from book where book_id='$book_id'";
        mysqli_query($connection,$delete);
        
    }
    function edit_book1($book_id)
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from book as b, category as c, subcategory as s where b.category_id=c.category_id and b.subcategory_id=s.subcategory_id and b.book_id='$book_id'";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    function book_update1($categoryid,$subcategoryid,$bookname,$path,$path1,$bookdetails,$authorname,$totalpages,$isbn,$qty,$price,$book_id)
    {
        $connection=mysqli_connect("localhost","root","","project");
        
          $update="update book set category_id='$categoryid', subcategory_id='$subcategoryid', book_name='$bookname', book_cover_page='$path', book_upload='$path1',  book_description='$bookdetails', book_author_name='$authorname', book_total_page='$totalpages', book_ISBN='$isbn', book_qty='$qty', book_price='$price' where book_id='$book_id'"; 
            mysqli_query($connection,$update); 
    }
    function select_bookreview1()
    {
        $connection=mysqli_connect("localhost","root","","project");
        $select="select * from book_review as br, book as b where br.book_id=b.book_id";
        $select1=mysqli_query($connection,$select);
        return $select1;
    }
    
}  
?>
