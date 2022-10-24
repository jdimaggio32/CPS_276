<?php


$title = "Assignment 5";
$heading = "File and Directory Assignment";
$specifics = "Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only.\n";

require_once 'Directories.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
	<meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<title>&lt;<?php echo $title ?>&gt;</title>
    
	
</head>
<body>
	<div id="wrapper">
		<header>
			<h1><?php echo $heading ?></h1>
		</header>
		    <main> 
            
            <?php
            echo $specifics;
            ?>
            
                <br><br>
            <?php

      if(isset($_POST['sub'])) {
        
        $dir = new Directories();
        $dir->create($_POST["folderName"],$_POST["fileContent"]);
        
    }
  ?>

<br></br>

            <form method="POST">
                
            <label for="names">Folder Name</label>
            <input type="text" class="form-control" id="folderName" name="folderName" value="">

            <br></br>

            <label for="names">File Content</label>
            <textarea type="text" class="form-control" id="fileContent" name="fileContent" rows="5" value=""></textarea>

            <br></br>

            <button type="submit" name="sub" class="btn btn-primary" method="POST">Submit</button>

            </form>
        
        
      </main>
			
		<footer>
		</footer>
	</div>
	
</body>
</html>
