<?php
include('../DbConfiguration/config.php');

$uid = $_GET['id'];

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$userid = $_POST['uid'];
$useraddress = $_POST['address'];


$result = mysql_query("UPDATE user SET user_no ='$userid' , user_fname ='$fname' , user_lname ='$lname' , user_address ='$useraddress'  WHERE user_id='$uid'") or die(mysql_error()); 	


?>
