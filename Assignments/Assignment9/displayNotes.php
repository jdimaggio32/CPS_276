<?php

require_once 'classes/Crud.php';
$crud = new Crud();


$title = "Assignment 9";
$heading = "Display Note";
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
            
            <a href='https://russet-v8.wccnet.edu/~jdimaggio/CPS_276/Assignments/Assignment9/addNote.php'>Add Note</a>

           

            <br></br>

            <form method="POST">
                
            <label for="begDate">Beginning Date</label>
            <input type="date" class="form-control" id="begDate" name="begDate">

            <br></br>

            <label for="endDate">Ending Date</label>
            <input type="date" class="form-control" id="endDate" name="endDate">

            <br></br>

            <button type="submit" name="getNotes" class="btn btn-primary" method="POST">Get Notes</button>

            </form>

            <br></br>

            <?php

if(isset($_POST['getNotes'])) {

//need to put these 2 values into the sql query
$beg = ($_POST['begDate']);
$end = ($_POST['endDate']);

#convert to timestamp
$begTime = strtotime("$beg");
$endTime = strtotime("$end");

$begTimeStamp = date('Y-m-d  H:i:s', $begTime);
$endTimeStamp = date('Y-m-d  H:i:s', $endTime);


$output = $crud->getNotes($begTimeStamp,$endTimeStamp);


echo $output;
}
?>

            <br></br>

            </form>
        
     

		<footer>
		</footer>
	</div>
	
</body>
</html>
