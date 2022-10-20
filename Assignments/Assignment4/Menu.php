<?php

if(count($_POST) > 0){
 require_once 'Names.php';
 $addName = new NamesList();
 $output = $addName->ClearNames();
}

$title = "Assignment 4";
$heading = "Add Names";
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
      
      if(isset($_POST['add'])) {
          $output = $addName->AcceptNames($_POST["name"]);
      }
      if(isset($_POST['clear'])) {
          $output;
      }
  ?>
 

            <form method="POST">
                <button type="submit" name="add" class="btn btn-primary" method="POST" >Add Name</button> 
                <button type="submit" name="clear" class="btn btn-primary" method="POST">Clear Names</button>
            </form>

            <br></br>

            <form action="Names.php" method="POST">
            <label for="names">Enter Name</label>
            <input type="text" class="form-control" id="name" name="name" value="">
            </form>
        
            List of Names
            <textarea style="height: 500px;" class="form-control"
            id="namelist" name="namelist"><?php echo $output ?></textarea>

        
      </main>
			
		<footer>
		</footer>
	</div>
	
</body>
</html>
