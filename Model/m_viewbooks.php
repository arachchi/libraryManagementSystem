<?php

include('../DbConfiguration/config.php');

$result = mysql_query("SELECT Book.*,author.* FROM Book,author WHERE Book.author_id=author.author_id;") or die(mysql_error());


?>