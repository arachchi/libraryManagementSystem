<?php
include('header.php');
$loginError="";
 if(isset($_GET['error'])){
            $loginError = $_GET['error'];
			}
if(empty($_SESSION['username'])){	
?>
<html>
<head>	    
</head>
<body>
<br>
<!-- Ligin Page -->    
<div class="col-login-5 login-box">
    <form class="form-horizontal" action="Controller/login.php" method="post">       
        <h2 class="login-box-text">
           <span><img src="assets/image/logo.jpg" alt="Mountain View" style="width:35px;height:45px;"></span> <b></b><span>&nbsp;Devi Balika Vidyalaya </span> 
		</h2>
		<div class="form-group">
			<label for="inputEmail3" class="control-label">Username :</label>
			<div class="col-sm-10 input-group">
			  <span class="glyphicon glyphicon-user input-group-addon"></span>
			  <input type="text" class="form-control" name="uname" id="inputEmail3" placeholder="Username">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="control-label">Password :</label>
			<div class="col-sm-10 input-group">
				 <span class="glyphicon glyphicon-lock input-group-addon"></span>
			  <input type="password" class="form-control" name="pword" id="inputPassword3" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			<div class="">
			  <div class="checkbox">
				<label>
				  <input type="checkbox"> Remember me
				</label>
			  </div>
			</div>
		</div> 		       
		<div class="form-group">
			<div class="">
			  <button type="submit" class="btn btn-danger" name="login_button">Login</button>
			  <label style="color: #c9302c;" for="inputError" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;<?php
				 echo $loginError ; 
				?>
				</label>
			</div>
		</div>
</body>
</html>
<?php
}else{
	header('Location: View/home.php');
}
?>