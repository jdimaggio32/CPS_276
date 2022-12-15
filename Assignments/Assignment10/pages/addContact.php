<?php
//<a href='https://russet-v8.wccnet.edu/~jdimaggio/CPS_276/Assignments/Assignment9/displayNotes.php'>Display Notes</a>
$title = "Assignment 10";
$heading = "Add Contact";
?>

<!DOCTYPE html>
<html lang="en">

    <head>
	    <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
        <a href='https://russet-v8.wccnet.edu/~jdimaggio/CPS_276/Assignments/Assignment10/pages/addContact.php'>Add Contact</a>
        <a href='https://russet-v8.wccnet.edu/~jdimaggio/CPS_276/Assignments/Assignment10/pages/deleteContacts.php'>Delete Contact(s)</a>
        <a href='https://russet-v8.wccnet.edu/~jdimaggio/CPS_276/Assignments/Assignment10/logout.php'>Logout </a>
        
        <title>&lt;<?php echo $title ?>&gt;</title>
    </head>

    <body>
	    <div id="wrapper">
		<header>
			<h1><?php echo $heading ?></h1>
		</header>
            
        

        <form method="POST">
                
            <label for="names">Name (letters only)</label>
            <input type="text" class="form-control" id="folderName" name="folderName" placeholder="Jim DiMaggio">

            <br>

            <label for="names">Address (just number and street)</label>
            <input type="text" class="form-control" id="folderName" name="folderName" placeholder="123 Someplace">

            <br>

            <label for="names">City</label>
            <input type="text" class="form-control" id="folderName" name="folderName" placeholder="Anywhere">

            <br>

            <label for="names">State</label>
            <input type="text" class="form-control" id="folderName" name="folderName" placeholder="Michigan">

            <br>

            <label for="names">Phone</label>
            <input type="text" class="form-control" id="folderName" name="folderName" placeholder="999.999.999">

            <br>

            <label for="names">Email Address</label>
            <input type="text" class="form-control" id="folderName" name="folderName" placeholder="jdimaggio@test.com">

            <br>

            <label for="names">Date of Birth</label>
            <input type="text" class="form-control" id="folderName" name="folderName" placeholder="07/02/1993">

            <br>

            <p>Please check all contact types you would like (optional)</p>
            <label><input type="checkbox" name="contactTypes" value="newsletter" >Newsletter</label>
            <label><input type="checkbox" name="contactTypes" value="emailUpdates">Email Updates</label>
            <label><input type="checkbox" name="contactTypes" value="textUpdates"> Text Updates</label>

            <br><br>

            <p>Please slect an age range (you must select one)</p>
            <label><input type="radio" name="ageRange" value="10" >10-18</label>
            <label><input type="radio" name="ageRange" value="19">19-30</label>
            <label><input type="radio" name="ageRange" value="30">30-50</label>
            <label><input type="radio" name="ageRange" value="51">51+</label>

            <br><br>

            <button type="submit" name="sub" class="btn btn-primary" method="POST">Submit</button>

        </form>
        
		<footer>
		</footer>
	</div>
	
</body>
</html>