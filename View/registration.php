<?php
session_start();
if($_SESSION['username']){
?>
<html>
    <head>
        <title>Library Management System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
        <link href="../Assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href="../Assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../Assets/css/maincss.css">
    </head>
    <body>
        <div class="container">
            <div class="header" >       
                <div style="float:left;margin-top:50px;background:#808080 ;color:black">
                    <?php 
                    echo $_SESSION['username']."<a href='../Controller/logout.php' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:black'>Logout</span>&nbsp;&nbsp;</a>"; 
                ?>
                </div>
                <a href="home.php"><div style="float:right;margin-top:50px;background:#808080 ;color:black">&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;</div></a>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="">
                    <center><h2>user Registration</h2></center>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <img src="image/people-1.png" alt="..." class="img-circle"><br>
                            <br>
                        </div>
                        <div class="col-md-4">
                            <br><br><br>                            
                            <button type="button" class="btn btn-primary">Add picture</button> 
                        </div>
                    </div>
                    <div class="row">
                            
                        <div class="col-md-1"></div>
                        <div class="col-md-4">                                
                            <label for="Ano" class="col-sm-4 control-label">Admission NO</label>
                            <input type="text" placeholder="Admission No">
                            <button type="button" class="btn btn-primary">generate</button>
                            <br>

                            <label for="utype" class="col-md-4">user type</label>
                            <select class="form-control">
                                <option>librarian</option>
                                <option>Student</option>
                                <option>staff member</option>
                            </select>
                            <label for="fname" class="col-sm-4 control-label" >first name</label>
                            <input type="text" placeholder="first name"/>
                            <label for="lname" class="col-sm-4 control-label">last name</label>
                            <input type="text" placeholder="last name"/> 
                            <label for="iPassword" class="col-sm-5 control-label">Default password</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Default Password">
                            <label for="cPassword" class="col-sm-5 control-label">confirm password</label>
                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="confirm Password">
                            <button type="button" class="btn btn-default">cancel</button>
                            <button type="button" class="btn btn-success">save</button>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </body>
    </html>
    <?php
    }else{
        header('Location: index.php');
    }
    ?>
</html>
