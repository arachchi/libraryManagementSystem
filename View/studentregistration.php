<html>
    <?php    
include('header.php');
?>
    <body>

        <!-- nav bar -->
<nav class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
   <a href="#">
    <h2 class="logo-text">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <b ><img src="logo.jpg" alt="Mountain View" style="width:35px;height:45px;"></b> <b>Library </b><span>&nbsp;Devi Balika Vidyalaya </span> 
    </h2>
    </a>
</div>
<div>
<ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li> <!-- class="active" -->
        <li><a href="#">Contuct Us</a></li>
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Java <b class="caret"></b>
                </a>
            <ul class="dropdown-menu">
                <li><a href="#">jmeter</a></li>
                <li><a href="#">EJB</a></li>
                <li><a href="#">Jasper Report</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
            </ul>
        </li>
        <li><a href="#">Login</a></li>
</ul>
</div>
</nav>
        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" align="center">Registration
                    
                </h1>
                
            </div>
        </div>
            <div class="row">
          
               <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Admission NO</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="AdmissionNO" style="width:60%" placeholder="Admission NO">
                        </div>
                      </div>
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Generate</button>
                            
                            </div>
                        </div>
                
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">User Type</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                                <option>Librarian</option>
                                <option>Student</option>
                                <option>Staff Member</option>
                                
                            </select>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="FirstName" placeholder="First Name">
                        </div>
                      </div>
                     <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="LastName" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Default password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="Defaultpassword" placeholder="Default password">
                        </div>
                      </div> 
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Confirm password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="Confirmpassword" placeholder="Confirm password">
                        </div>
                      </div>
                     <div class="form-group">
                         <label for="inputPassword3" class="col-sm-2 control-label">Add Picture</label>
                         <div class="col-sm-10">
                        <input type="file" id="exampleInputFile" class="form-control">
                         </div>
                      </div>
                        <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Add Picture</button>
                            
                            </div>
                        </div>            
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Remember Me
                            </label>
                             
                             
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Save</button>&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-default">Cancel</button>
                        </div>
                      </div>
</form>
                 
           
                </div>
        </div>
            
        
            
        </div>
        
    </body>
</html>