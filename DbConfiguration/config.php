<?php

$link = @mysql_connect('localhost','root','payments') or die("not connect");
$db = mysql_select_db("library",$link);

?>