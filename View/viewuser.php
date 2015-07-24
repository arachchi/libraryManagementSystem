<?php
include('header.php');
if($_SESSION['username']){
?>
<html>
    <head>
	   <title>Library Management System - Manage Users</title>
    </head>
    <body>        
        <div class="container">
            <div class="row">
                <div class="">
                    <center><h2>view user</h2></center><br>                    
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                        <table class="table table-condensed">
                                <tr>
                                    <th>User Id</th>
                                    <th>User Type</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Status</th>                                    
                                    <th>Address</th>
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                </tr>
                                <!-- On rows -->
                                <?php                                    
                                    include('../Model/m_viewuser.php');
                                    if (mysql_num_rows($result) > 0) {                                        
                                    while($row = mysql_fetch_array($result)) {
                                ?>
                                    <tr class="success">
                                        <td><?php echo $row["user_no"]; ?></td>
                                        <td><?php echo $row["user_type"]; ?></td>
                                        <td><?php echo $row["user_fname"]; ?></td>
                                        <td><?php echo $row["user_lname"]; ?></td>
                                        <td><?php echo $row["user_email"]; ?></td>
                                        <td><?php echo $row["user_status"]; ?></td>
                                        <td><?php echo $row["user_address"]; ?></td>
                                        <td><a href="viewuserdetails.php?id=<?php echo $row["user_id"]; ?>"><button type="button" class="btn btn-default">View</button></a></td>
                                        <td><a href="../Controller/delete_librarian.php?id=<?php echo $row["user_id"]; ?>"><button type="button" class="btn btn-default">Delete</button></a></td>
                                    </tr>                                   
                                <?php
                                    }
                                    }
                                ?>
                            </table>
                        </div>
                    </div>
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
