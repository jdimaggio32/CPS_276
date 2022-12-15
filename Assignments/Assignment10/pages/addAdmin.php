<?php
//<a href='https://russet-v8.wccnet.edu/~jdimaggio/CPS_276/Assignments/Assignment9/displayNotes.php'>Display Notes</a>
$title = "Assignment 10";
$heading = "Add Admin";
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
            
        
        <form method="POST">
                
            <label for="names">Name (letters only)</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Jim DiMaggio">

            <br>

            <label for="names">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="jdimaggio@test.com">

            <br>

            <label for="names">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="*******">

            <br>

            <label for="names">Status</label>
            <input type="text" class="form-control" id="status" name="status" placeholder="Staff">

            <br>

            <button type="submit" name="sub" class="btn btn-primary" method="POST">Submit</button>

        </form>
        
		<footer>
		</footer>
	</div>
	
</body>
</html>