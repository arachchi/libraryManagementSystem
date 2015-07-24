<?php

$link = @mysql_connect('localhost','root','') or die("not connect");
$db = mysql_select_db("library",$link);

?>