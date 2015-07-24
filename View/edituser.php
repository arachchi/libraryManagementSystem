<?php
include('header.php');
if($_SESSION['username']){
?>
<html>
    <head>
    </head>
    <body>  
        <?php
            include('../Model/m_view_userdetails.php');
            if (mysql_num_rows($result) > 0) {                                        
                while($row = mysql_fetch_array($result)) {                               

                ?> 
        <div class="container">
          <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
             
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title"><?php echo $row['user_fname'].'&nbsp;'.$row['user_lname']   ; ?></h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../assets/image/avater.png" class="img-circle img-responsive"> </div>                    
                    <form action="../Controller/save_librarian.php?id=<?php echo $row['user_id']; ?>" method="post">
                    <div class=" col-md-9 col-lg-9 ">                      
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>First Name</td>
                            <td><input Type="text" name="firstname" value="<?php echo $row['user_fname']; ?>"/></td>
                          </tr>
                          <tr>
                            <td>Last Name</td>
                            <td><input Type="text" name="lastname" value="<?php echo $row['user_lname']; ?>"/></td>
                          </tr>
                          <tr>
                            <td>Reg No</td>
                            <td><input Type="text" name="uid" value="<?php echo $row['user_no']; ?>"/></td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><input Type="text" name="email" value="<?php echo $row['user_email']; ?>" disabled/></td>
                          </tr>  
                          <tr>
                            <td>User Type</td>
                            <td><input Type="text" name="role" value="<?php echo $row['user_type']; ?>" disabled/></td>
                          </tr> 
                          <tr>
                            <td>Address</td>
                            <td><input Type="text" name="address" value="<?php echo $row['user_address']; ?>"/></td>
                          </tr>                       
                        </tbody>
                      </table>
                      
                      <input type="submit" class="btn btn-primary" style="color:black;" value="save&nbsp;&nbsp;&nbsp;"/>
                      <a href="../Controller/delete_librarian.php?id=<?php echo $row["user_id"]; ?>" class="btn btn-primary" style="color:black;">Delete</a>
                    </div>
                    </form>
                  </div>
                </div>
                    <div class="panel-footer">
                        You can edit or delete user here.
                    </span>
                </div>                
              </div>
            </div>
          </div>
        </div>
        <?php
            }
        }
        ?>
    </body>
</html>
<?php
}else{
    header('Location: ../index.php');
}
?>
