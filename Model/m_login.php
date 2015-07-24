<?php
include('../DbConfiguration/config.php');
$uname = $_POST['uname'];
$pword = $_POST['pword'];
$result1 = mysql_query("SELECT * FROM user WHERE user_no = '$uname'") or die(mysql_error()); 
$row1 = mysql_fetch_assoc($result1);
$result = mysql_query("SELECT * FROM user WHERE password='$pword' AND user_no = '$uname'") or die(mysql_error()); 	
$row = mysql_fetch_assoc($result);
?>