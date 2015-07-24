<?php
//session_start();
//if($_SESSION['username']){
include('header.php');
if($_SESSION['username']){
?>  
<html>
    <head>
        <title>Library Management System - Add Book</title>
       <!-- <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
        <link href="../Assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href="../Assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../Assets/css/maincss.css"> -->
    </head>
    <body>
      <!--  <div class="container">
            <div class="header" >       
                <div style="float:left;margin-top:50px;background:#808080 ;color:black">
                    <?php 
                   // echo $_SESSION['username']."<a href='../Controller/logout.php' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='color:black'>Logout</span>&nbsp;&nbsp;</a>"; 
                ?>
                </div>
                <a href="home.php"><div style="float:right;margin-top:50px;background:#808080 ;color:black">&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;</div></a>
            </div>
        </div>    
        <br> -->
        <div class="container">
            <div class="row">
                <div class="">
                    <center><h2>Add book</h2></center>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label for="id" class="col-sm-4 control-label">Book id</label>
                            <input type="text" placeholder="Book id">
                            <button type="button" class="btn btn-primary">generate</button><br>
                            <label for="id" class="col-sm-4 control-label">Book Name</label>
                            <input type="text" placeholder="Book name">
                            <label for="id" class="col-sm-4 control-label">Author</label>
                            <input type="text" placeholder="Author">
                            <label for="id" class="col-sm-4 control-label">ISBN No</label>
                            <input type="text" placeholder="ISBN No">
                            <label for="type" class="col-sm-4 control-label">Book Type</label>
                            <label for="id" class="col-sm-4 control-label">Book category</label>
                            <label for="id" class="col-sm-4 control-label">price</label>
                            <input type="text" placeholder="price">
                            <label for="id" class="col-sm-4 control-label">Rack No</label>
                            <input type="text" placeholder="Rack No">
                            
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="row">
                            <div class="col-md-4">
                            <br>
                            <img src="../Assets/image/olivertwist.jpg" alt="..." class="img-circle"><br>
                            </div>
                            <div class="col-md-1">
                                <br><br><br>
                            <button type="button" class="btn btn-primary">add pic</button><br>
                            </div>
                                </div>
                            <br>
                            <label for="description" class="col-sm-4 control-label">Description</label>
                            <textarea class="form-control" rows="9" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <button type="button" class="btn btn-default"> back </button>
                            <button type="button" class="btn btn-default"> remove </button>
                            <button type="button" class="btn btn-default"> save</button>
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