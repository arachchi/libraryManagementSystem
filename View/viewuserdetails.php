<?php
include('header.php');
if($_SESSION['username']){
?>
<html>
    <head>
    </head>
    <body>  
        <?php
            include('../Model/m_editBookCopy.php');
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
                    <div class=" col-md-9 col-lg-9 "> 
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>Name</td>
                            <td><?php echo $row['user_fname'].'&nbsp;'.$row['user_lname'] ; ?></td>
                          </tr>
                          <tr>
                            <td>Reg No</td>
                            <td><?php echo $row['user_no']; ?></td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><?php echo $row['user_email']; ?></td>
                          </tr>  
                          <tr>
                            <td>User Type</td>
                            <td><?php echo $row['user_type']; ?></td>
                          </tr>                       
                          <tr>
                            <td>Status</td>
                            <td><?php echo $row['user_status']; ?></td>
                          </tr>
                          <tr>
                            <td>Address</td>
                            <td><?php echo $row['user_address']; ?></td>
                          </tr>                       
                        </tbody>
                      </table>                      
                      <a href="edituser.php?id=<?php echo $row["user_id"]; ?>" class="btn btn-primary" style="color:black;">Edit</a>
                    </div>
                  </div>
                </div>
                    <div class="panel-footer">
                        You can save edited user here.
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
