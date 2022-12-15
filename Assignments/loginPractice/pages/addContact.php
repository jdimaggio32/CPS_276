<?php
require_once 'Routes.php';
require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/loginPractice/classes/StickyForm.php';


$page = new Page();
echo $page->navAdmin();
echo $page->security();


if(isset($_POST['sub'])){
    require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/loginPractice/classes/Validation.php';
    $contact = new StickyForm();
    //$admin-> validateForm("", $_POST);
    $output = $contact->addContact($_POST);
  }

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
			<h1><?php echo "Add Contact" ?></h1>
		</header>
            
        

        <form method="POST" action="">
                
            <label for="names">Name (letters only)</label>
            <input type="text" class="form-control"  name="name" value="Jim DiMaggio">

            <br>

            <label for="names">Address (just number and street)</label>
            <input type="text" class="form-control"  name="address" value="123 Someplace">

            <br>

            <label for="names">City</label>
            <input type="text" class="form-control"  name="city" value="Anywhere">

            <br>

            <label for="names">State</label>
            <input type="text" class="form-control" name="state" value="Michigan">

            <br>

            <label for="names">Phone</label>
            <input type="text" class="form-control"  name="phone" value="999.999.999">

            <br>

            <label for="names">Email Address</label>
            <input type="text" class="form-control"  name="email" value="jdimaggio@test.com">

            <br>

            <label for="names">Date of Birth</label>
            <input type="text" class="form-control"  name="dob" value="07/02/1993">

            <br>

            <p>Please check all contact types you would like (optional)</p>
            <label><input type="checkbox" name="contacts" value="newsletter" >Newsletter</label>
            <label><input type="checkbox" name="contacts" value="emailUpdates">Email Updates</label>
            <label><input type="checkbox" name="contacts" value="textUpdates"> Text Updates</label>

            <br><br>

            <p>Please slect an age range (you must select one)</p>
            <label><input type="radio" name="age" value="10-18" >10-18</label>
            <label><input type="radio" name="age" value="19-30">19-30</label>
            <label><input type="radio" name="age" value="30-50">30-50</label>
            <label><input type="radio" name="age" value="51+">51+</label>

            <br><br>

            <button type="submit" name="sub" class="btn btn-primary" method="POST">Submit</button>

        </form>
        
		<footer>
		</footer>
	</div>
	
</body>
</html> 