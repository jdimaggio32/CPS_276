<?php
if(count($_POST) > 0){
 require_once 'fileUploadProc.php';
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	  <title>File Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	 
  </head>

  <body>
      <h1>File Upload</h1>
      <a target='_blank' href='https://russet-v8.wccnet.edu/~jdimaggio/CPS_276/Assignments/Assignment7/listFilesProc.php'>Show File List</a>
      <br></br>
    <form method="POST">
      <label for="filename">File Name</label><input type="text" id="filename" name="filename" class="form-control"><br>
      <input type="file" id="file" name="file" class="btn-file" method="POST">
      <br></br> 
      <input action="fileUploadProc.php"  type="submit" name="upload" class="btn btn-primary" method="POST" enctype="multipart/form-data" value="Upload File"></button>
      
    </form>
    <script src="public/js/main.js"></script>
  </body>

</html>

