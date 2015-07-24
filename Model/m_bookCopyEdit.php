<?php

include('../DbConfiguration/config.php');

$book_id = $_GET['book_id'];

$result = mysql_query("SELECT * FROM Book,author WHERE book_id = ".$book_id." AND Book.author_id=author.author_id;") or die(mysql_error());

?>