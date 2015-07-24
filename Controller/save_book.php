<?php
include('../DbConfiguration/config.php');

if (isset($_POST['btnSaveBook'])) {
	include('../Model/m_add_book.php');	
	if($row){
	header('Location: ../View/home.php');
	}else {
	header('Location: ../View/home.php?bookError='+$insert_error);
	}
	//echo"Book";
		
} else {
	echo"Other";
}
?>