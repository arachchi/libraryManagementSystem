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
		    <?php
            include('../Model/m_bookCopyEdit.php');
            if (mysql_num_rows($result) > 0) {                                        
                while($row = mysql_fetch_array($result)) {                               

                ?> 
       <div class="row">
	    <form class="form-horizontal" action="../Controller/save_book.php"  method="POST">
                <div class="col-md-6">
                   
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Book Id</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" style="width:100%" id="BookId" placeholder="Book Id">
                            </div>
                           <!-- <div class="col-sm-2">
                                <button type="submit" class="btn btn-success">Generate</button>
                            </div>  -->
                        </div>  
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Book Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" style="width:100%" name="BookName" id="BookName" placeholder="Book Name"
								value="<?php echo $row['book_name']; ?>">
								
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Author</label>
                                 <div class="col-sm-9">
                                <select class="form-control" name="BookAuthor"  id="BookAuthor">
									        <?php                                    
                                    include('../Model/m_fetchAuthors.php');
                                    if (mysql_num_rows($result1) > 0) {                                        
                                    while($row1 = mysql_fetch_array($result1)) {
                                ?>
                        
                                        <option value="<?php echo $row1["author_id"]; ?>"  <?php if ($row1["author_id"] == $row["author_id"]) echo ' selected="selected"'; ?> ><?php echo $row1["author_name"]; ?></option>                                 
                                <?php
                                    }
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">ISBN No</label>
                            <div class="col-sm-9">
                                <input type="text" name="ISBNNo"  class="form-control" style="width:100%" id="ISBNNo" placeholder="ISBN No" 
								value="<?php echo $row['book_isbn']; ?>">
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="inputPassword3" id="BookType"  class="col-sm-3 control-label">Book Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="BookType"  >
                                    <option <?php if ("Sinhala" == $row["book_type"]) echo ' selected="selected"'; ?>>Sinhala</option>
                                    <option <?php if ("English" == $row["book_type"]) echo ' selected="selected"'; ?>>English</option>
                                    <option <?php if ("Spanish" == $row["book_type"]) echo ' selected="selected"'; ?>>Spanish</option>
                                    <option <?php if ("French" == $row["book_type"]) echo ' selected="selected"'; ?>>French</option>
                                    <option <?php if ("Japan" == $row["book_type"]) echo ' selected="selected"'; ?>>Japan</option>
                                </select>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="inputPassword3"  name="BookCatogry" class="col-sm-3 control-label">Book Category</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="BookCatogry" >
                                    <option <?php if ("Mathematics" == $row["book_category"]) echo ' selected="selected"'; ?> >Mathematics</option>
                                    <option <?php if ("English Grammer" == $row["book_category"]) echo ' selected="selected"'; ?>>English Grammer</option>
                                    <option <?php if ("Java" == $row["book_category"]) echo ' selected="selected"'; ?>>Java</option>
                                    <option <?php if ("ASP.NET" == $row["book_category"]) echo ' selected="selected"'; ?>>ASP.NET</option>
                                    <option <?php if ("C++" == $row["book_category"]) echo ' selected="selected"'; ?>>C++</option>
                                </select>
                            </div>
                        </div> 
                        <!--<div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Price</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"style="width:100%" id="price" placeholder="Price">
                            </div>
                        </div> -->
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Rack No</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"style="width:100%" name="RackNo" id="RackNo" placeholder="Rack No"
								value="<?php echo $row['book_rack']; ?>">
                            </div>
                        </div>   
                        <div class="form-group">
                         <label for="inputPassword3" class="col-sm-3 control-label">Add Picture</label>
                         <div class="col-sm-9">
                        <input type="file" name="bookInputFile"  id="bookInputFile" class="form-control">
                         </div>
                      </div>						
                       <!-- <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> lending section
                                    </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <label>
                                        <input type="checkbox"> reference section
                                    </label>
                                </div>
                            </div>
                        </div>  -->


                        <div class="collapse" id="collapseExample">
                            <div class="well">
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">No of copies</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" style="width:100%" id="ISBNNocc" placeholder="No of copies">
                                    </div>
                                </div> 

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                
                               <!-- <a class="btn btn-success" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Add Copy
                                </a> -->
                                <button type="submit"  name="btnSaveBook" id="btnSaveBook" class="btn btn-success btn-sm">
                                    <span class="glyphicon glyphicon-floppy-disk"></span>Save</button>
                            </div>
                        </div>
                    
                </div>
                <div class="col-md-6">
                    <img src="../Assets/image/olivertwist.jpg" alt="image" class="img-circle">

                    <br><br>
                    <h3>Description</h3>
                    <textarea class="form-control" rows="5"  name="bookDiscription" id="bookDiscription"  style="width:100%"placeholder="Description" >
					<?php echo $row['book_description']; ?>
					</textarea>
                    <br>
              
                </div>
				</form>
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