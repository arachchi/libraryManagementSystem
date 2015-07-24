<?php
include('../DbConfiguration/config.php');

$uid = $_GET['id'];

$result = mysql_query("DELETE FROM User WHERE user_id=".$uid) or die(mysql_error());
$row = mysql_fetch_assoc($result);

?>