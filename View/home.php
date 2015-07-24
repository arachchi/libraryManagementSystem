<?php
include('header.php');
if($_SESSION['username']){
?>
<html>
<head>
	
</head>
<body>

<br><br>
<div class="container">
	<div class="row">
		<div class="col-lg-2">
          
        </div>
        <div class="col-lg-8 homemenu">
        	<h2><center>Librarian Home</center></h2>
            <a href="viewuser.php"><div class="col-lg-12" style="background-color:#D8D8D8 ;height:60px;"><center><br>View User</center></div></a>
			<a href="addbook.php"><div class="col-lg-12" style="background-color:#E0E0E0 ;height:60px;"><center><br>Add Books</center></div></a>
			<a href="lending.php"><div class="col-lg-12" style="background-color:#E8E8E8 ;height:60px;"><center><br>Lenging Books</center></div></a>
			<a href="profile.php"><div class="col-lg-12" style="background-color:#F0F0F0 ;height:60px;"><center><br>Profile</center></div></a>
			<a href="viewbook.php"><div class="col-lg-12" style="background-color:#F8F8F8 ;height:60px;"><center><br>View Books</center></div></a>
        </div> 
        <div class="col-lg-2">
          
        </div>       
	</div>
</div>

</body>
</html>
<?php
}else{
	header('Location: ../index.php');
}
?>