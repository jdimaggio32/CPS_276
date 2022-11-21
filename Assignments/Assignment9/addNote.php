<?php

require_once 'update.php';
$dt = new Date_time();
//$notes = $dt->checkSubmit();

$title = "Assignment 9";
$heading = "Add Note";

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
            
            <a href='https://russet-v8.wccnet.edu/~jdimaggio/CPS_276/Assignments/Assignment9/displayNotes.php'>Display Notes</a>


            <br></br>

            <?php
            $notes = $dt->checkSubmit();
            ?>

            <br></br>

            <form method="POST">
                
            
            <label for="names">Date and Time</label>
            <input type="datetime-local" class="form-control" id="dateTime" name="dateTime">

            <br></br>

            <label for="names">Note</label>
            <textarea type="text" class="form-control" id="note" name="note" rows="8" value=""></textarea>

            <br></br>

            <button type="submit" name="sub" class="btn btn-primary" method="POST">Add Note</button>

            </form>
        
		<footer>
		</footer>
	</div>
	
</body>
</html>
