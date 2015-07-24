<?php
//session_start();
//if($_SESSION['username']){
include('header.php');
if($_SESSION['username']){
?>
<html>
    <head>
        <title>Library Management System -View Books</title>
        <!--<meta charset="UTF-8">
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
            <div class="row">
                <div class="">
                    <center><h2>Catalogue Management </h2></center>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <input type="text" placeholder="Search.."><!--book name/author/id-->
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-default">Search</button>
                        </div>
                        <div class="col-md-2">
                           <select class="form-control" name="BookCatogry" >
						    <option value="" selected disabled>select by Category</option>
                                    <option>Mathematics</option>
                                    <option>English Grammer</option>
                                    <option>Java</option>
                                    <option>ASP.NET</option>
                                    <option>C++</option>
                                </select>
                        </div>
                        <div class="col-md-2">
							      <select class="form-control" name="BookType"  >
								  <option value="" selected disabled>select by Type</option>
                                    <option>Sinhala</option>
                                    <option>English</option>
                                    <option>Spanish</option>
                                    <option>French</option>
                                    <option>Japan</option>
                                </select>
                        </div>
						 <div class="col-md-2">
						 <a class="btn btn-primary" target="_blank" href="../View/viewbookreport.php">Report</a>
						  </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <table class="table table-condensed">
                                <!--  <tr>
                                      <th>Select</th>
                                      <th>use ID</th>
                                      <th>name</th>
                                      <th>status</th>
                                  </tr>
                                   On rows -->
								    <?php                                    
                                    include('../Model/m_viewbooks.php');
                                    if (mysql_num_rows($result) > 0) {                                        
                                    while($row = mysql_fetch_array($result)) {
									//echo $row[7];
                                ?>
                                <tr class="active">
                                    <td class="col-md-1"><img src="../Assets/image/olivertwist.jpg" alt="..." class="img-circle"></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;<h5><b><?php echo $row["book_name"]; ?></b></h5>
                                        &nbsp;<b><?php echo $row["author_name"]; ?></b>
                                    </td>
                                
                                    <td><br><br>Rack no:<?php echo $row["book_rack"]; ?></td>
                                    <td>ISBN:<?php echo $row["book_isbn"]; ?></td>
									
									<td><?php echo $row["book_category"]; ?></td>
									<td><?php echo $row["book_type"]; ?></td>
									<td><a href="editbookcopy.php?book_id=<?php echo $row["book_id"]; ?>"><button type="button" class="btn btn-default">Edit & Book Copies</button></a></td>
									<td><button type="button" class="btn btn-primary">Review</button></td>
                                </tr>
								    <?php
                                    }
                                    }
                                ?>
                              <!--  <tr class="active">
                                    <td class="col-md-1"><img src="../Assets/image/olivertwist.jpg" alt="..." class="img-circle"></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;<h5><b>Oliver twist</b></h5>
                                        &nbsp;<b>Charles Dickens</b>
                                    </td>
                                
                                    <td><br><br>Rack no:203</td>
                                    <td>available</td>
                                    <td><button type="button" class="btn btn-primary">reserve</button></td>
                                </tr>
                                <tr class="active">
                                    <td class="col-md-1"><img src="../Assets/image/olivertwist.jpg" alt="..." class="img-circle"></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;<h5><b>Oliver twist</b></h5>
                                        &nbsp;<b>Charles Dickens</b>
                                    </td>
                                
                                    <td><br><br>Rack no:203</td>
                                    <td>available</td>
                                    <td><button type="button" class="btn btn-primary">reserve</button></td>
                                </tr>
                                <tr class="active">
                                    <td class="col-md-1"><img src="../Assets/image/olivertwist.jpg" alt="..." class="img-circle"></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;<h5><b>Oliver twist</b></h5>
                                        &nbsp;<b>Charles Dickens</b>
                                    </td>
                                
                                    <td><br><br>Rack no:203</td>
                                    <td>available</td>
                                    <td><button type="button" class="btn btn-primary">reserve</button></td>
                                </tr>
                                <tr class="active">
                                    <td class="col-md-1"><img src="../Assets/image/olivertwist.jpg" alt="..." class="img-circle"></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;<h5><b>Oliver twist</b></h5>
                                        &nbsp;<b>Charles Dickens</b>
                                    </td>
                                
                                    <td><br><br>Rack no:203</td>
                                    <td>available</td>
                                    <td><button type="button" class="btn btn-primary">reserve</button></td>
                                </tr>
                                <tr class="danger">
                                    <td class="col-md-1"><img src="../Assets/image/olivertwist.jpg" alt="..." class="img-circle"></td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;<h5><b>Oliver twist</b></h5>
                                        &nbsp;<b>Charles Dickens</b>
                                    </td>
                                
                                    <td><br><br>Rack no:203</td>
                                    <td>not-available</td>
                                    <td><button type="button" class="btn btn-default">reserve</button></td>
                                </tr>   -->

                            </table>
                        </div>
                    </div>
                   <!-- <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <button type="button" class="btn btn-default"> edit</button>
                            <button type="button" class="btn btn-default"> remove</button>
                        </div>
                    </div>  -->
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
