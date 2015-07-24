<?php
//session_start();
//if($_SESSION['username']){
include('header.php');
if($_SESSION['username']){
?>
<html>
    <head>
        <title>Library Management System - User Profile</title>
      <!--  <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
        <link href="../Assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href="../Assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../Assets/css/maincss.css"> -->
    </head>
    <body>
        <!--<div class="container">
            <div class="header" >       
                <div style="float:left;margin-top:50px;background:#808080 ;color:black">
                    <?php 
                   // echo $_SESSION['username']."<a href='../Controller/logout.php' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:black'>Logout</span>&nbsp;&nbsp;</a>"; 
                ?>
                </div>
                <a href="home.php"><div style="float:right;margin-top:50px;background:#808080 ;color:black">&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;</div></a>
            </div>
        </div>
        <br>  -->
        <div class="container">
            <div class="row" >
                <div class="" >
                    <center><h2>User Profile</h2></center>
                    <br>
                    <div class="row" >
                        <div class="col-md-4" ></div>

                        <div class="col-sm-2">
                            <img src="../Assets/image/avatar.png" alt="..." class="img-circle"><br>
                        </div>
                        <div class="col-md-3">
                            <br>
                            <label for="Ano" class="col-sm-4 control-label">Name :</label>
                            <label for="Ano" class="col-sm-6 control-label"><b>Heshan Jayasinghe</b></label>
                            <label for="Ano" class="col-sm-4 control-label">User type :</label>
                            <label for="Ano" class="col-sm-6 control-label"><b>Student</b></label>
                            <label for="Ano" class="col-sm-4 control-label">Class :</label>
                            <label for="Ano" class="col-sm-6 control-label"><b>9 - A</b></label>
                            <label for="Ano" class="col-sm-4 control-label">status :</label>
                            <label for="Ano" class="col-sm-6 control-label"><b>inactive</b></label>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-sm-6">
                                <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th>book name</th>
                                    <th>return date</th>
                                    <th>given date</th>
                                </tr>
                                <!-- On rows -->
                                <tr class="active">
                                    <td>oliver twist</td>
                                    <td>2015-6-10</td>
                                    <td>2015-6-10</td>
                                </tr>
                                <tr class="active">
                                    <td>oliver twist</td>
                                    <td>2015-6-10</td>
                                    <td>2015-6-10</td>
                                </tr>
                                <tr class="active">
                                    <td>oliver twist</td>
                                    <td>2015-6-10</td>
                                    <td>2015-6-10</td>
                                </tr>
                                <tr class="active">
                                    <td>oliver twist</td>
                                    <td>2015-6-10</td>
                                    <td>2015-6-10</td>
                                </tr>
                                <tr class="active">
                                    <td>oliver twist</td>
                                    <td>2015-6-10</td>
                                    <td>2015-6-10</td>
                                </tr>
                                <tr class="danger">
                                    <td>oliver twist</td>
                                    <td>2015-6-10</td>
                                    <td>not return</td>
                                </tr>
                               
                            </table>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-default">back</button>
                                <button type="button" class="btn btn-default">delete user</button>
                                <button type="button" class="btn btn-default">edit</button>
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
