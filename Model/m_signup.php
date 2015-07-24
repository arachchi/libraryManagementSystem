<?php

$email = $_POST['email'];
$pword = $_POST['pword'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uid = $_POST['uid'];

$result = mysql_query("INSERT INTO login (username,password,first_name,last_name,user_id) VALUES('$email','$pword','$fname','$fname','$uid')") or die(mysql_error()); 	
$row = mysql_fetch_assoc($result);

?>