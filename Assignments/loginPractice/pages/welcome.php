<?php

require_once 'Routes.php';
require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/loginPractice/classes/Validation.php'; 
require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/loginPractice/classes/Pdo_methods.php';

$title = "title";

$page = new Page();

//get the session and then query the database to find out if the user is an admin or staff then make if statement0z
session_start();


    echo $page->navAdmin();



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
			<h1>Welcome</h1>
		</header>
            
        Welcome 
        <?php 
        echo $_SESSION['name'];



        ?>
        
		<footer>
		</footer>
	</div>
	
</body>
</html>