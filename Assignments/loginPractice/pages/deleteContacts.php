<?php

require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/loginPractice/classes/Pdo_methods.php';
require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/loginPractice/classes/Validation.php';
require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/loginPractice/pages/Routes.php';


$page = new Page();
echo $page->navAdmin();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
	<meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<title>&lt;<?php echo $title ?>&gt;</title>
    
<body>

<h1>Delete Contact(s)</h1>
<form action="" method="post">
<div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="submit" class="btn btn-danger" name="delete" value="Delete">
          </div>
        </div>
      </div>
      </form>





<?php	

$ad = new Admin();
$output = $ad->contactsTable();
echo $output;

    ?>
	
	
</body>
</html>
