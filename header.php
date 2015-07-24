<?php session_start(); ?>
<html>
<head>
	<title>Libry Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="Assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="Assets/css/bootstrap.them.css" rel="stylesheet">
	<link href="Assets/css/bootstrap.css" rel="stylesheet">
	<link href="Assets/css/main.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
	<script type="text/javascript" src="Assets/js/bootstrap.js"></script>    
	<script type="text/javascript" src="Assets/js/bootstrap.min.js"></script>
</head>
<body>    
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
		   <a href="index.php">
			<h2 class="logo-text">
				<b ><img src="Assets/image/logo.jpg" alt="Mountain View" style="width:35px;height:45px;"></b> <b>Library Management System</b><span></span> 
			</h2>
		   </a>
		</div>
		<div class="navbar-header" style="float:right">		   
			<h2 class="logo-text">
				<img src="Assets/image/calendar.png" alt="Mountain View" style="width:25px;height:25px;">&nbsp;&nbsp;<span class="timetext"><?php echo date('Y-m-d');  ?>&nbsp;&nbsp;&nbsp;</span>
				<?php 
				if(isset($_SESSION['username'])){
					echo '<h5>'.$_SESSION['username']."<a href='Controller/logout.php' >&nbsp;&nbsp;&nbsp;&nbsp;(Logout)&nbsp;&nbsp;&nbsp;&nbsp;</a></h5>"; 				
				}
				?>
			</h2>
		</div>
	</nav>
</body>
</html>