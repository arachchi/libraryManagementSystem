<?php

include('../DbConfiguration/config.php');

$uid = $_GET['id'];

$result = mysql_query("SELECT * FROM User WHERE user_id = ".$uid) or die(mysql_error());


?>