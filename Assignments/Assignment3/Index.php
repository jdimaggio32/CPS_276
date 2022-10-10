<?php
$title = "Assignment 3";
$heading = "Calculator";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
	<meta charset="UTF-8">
	<title>&lt;<?php echo $title ?>&gt;</title>
	<style>
		* {margin: 0; padding: 0;}
		body {font: 120%/1.5 sans-serif;}
		#wrapper {width: 1000px; margin: 0 auto; border: 1px solid black;}
		header {background: blue; height: 75px; padding: 20px;}
		header h1 {color: white;}
		main {padding: 10px;}
		main h2 {margin: 15px 0;}
		main p {margin-bottom: 15px;}
		footer {background: #eee; padding: 10px 0; text-align: center}
		footer p {font-size: .8em;}
	</style>
</head>
<body>
	<div id="wrapper">
		<header>
			<h1><?php echo $heading ?></h1>
		</header>
		    <main> 

 <?php
require_once "Calculator.php";
$Calculator = new Calculator();

    try{
        echo $Calculator->calc("/", 10, 0);
        echo $Calculator->calc("*", 10, 2);
        echo $Calculator->calc("/", 10, 2); 
        echo $Calculator->calc("-", 10, 2); 
        echo $Calculator->calc("+", 10, 2);
        echo $Calculator->calc("*", 10);
        echo $Calculator->calc(10);
    }
        catch (ArgumentCountError $e){
            echo "You must enter a string and two numbers" . "<br>";
            }
?>
			
		    </main>
		<footer>
		</footer>
	</div>
	
</body>
</html>
