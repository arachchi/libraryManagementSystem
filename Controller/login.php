<?php

session_start();

if (isset($_POST['login_button'])) {
	include('../Model/m_login.php');	
	if($row){
		$_SESSION['username'] = $row['user_no'];
		$_SESSION['role'] = $row['user_type'];
		header('Location: ../View/home.php');
	}else{
	
	 if($row1){
       header('Location: ../index.php?error=*Please Enter Correct Password');
	 }else {
	  header('Location: ../index.php?error=*Please Enter Valid Username and Password');
	 }	
	}
	
} else {
	
}
?>