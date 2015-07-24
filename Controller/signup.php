<?php
include('../DbConfiguration/config.php');
session_start();

if (isset($_POST['reg_button'])) {
	include('../Model/m_signup.php');	
	header('Location: ../index.php');
		
} else {
	
}
?>