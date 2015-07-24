<?php

include('../DbConfiguration/config.php');

$result = mysql_query("SELECT * FROM user ") or die(mysql_error());


?>