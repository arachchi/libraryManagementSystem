<?php

$book_name = $_POST['BookName'];
$BookAuthor = $_POST['BookAuthor'];
$book_isbn = $_POST['ISBNNo'];
$book_type = $_POST['BookType'];
$book_category = $_POST['BookCatogry'];
$book_rack = $_POST['RackNo'];
//$book_picture = $_POST['bookInputFile'];
$book_description = $_POST['bookDiscription'];
$insert_error="";
$result = mysql_query("INSERT INTO Book (book_name,book_isbn,book_type,book_category,book_rack,book_description,author_id) VALUES('$book_name','$book_isbn','$book_type','$book_category','$book_rack','$book_description','$BookAuthor')") or die($insert_error=mysql_error());
//$row = mysql_fetch_assoc($result);
$row=mysql_insert_id();
?>