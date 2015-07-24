<?php

include('../DbConfiguration/config.php');

$result = mysql_query("SELECT * FROM User ") or die(mysql_error());


?>