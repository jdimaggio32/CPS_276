<?php
require_once 'Routes.php';
require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/loginPractice/classes/StickyForm.php';


$page = new Page();
echo $page->navAdmin();
echo $page->security();

$output = "";


if(isset($_POST['addAdmin'])){
  require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/loginPractice/classes/Validation.php';
  $admin = new StickyForm();
  //$admin-> validateForm("", $_POST);
  $output = $admin->addAdmin($_POST);
}
?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"></head>
  <body>
    
    
  <h1>Add Admin</h1> 
      
      <p><?php echo $output ?></p>

      <form method="post" action="">


      <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name (letters only)</label>
              <input type="text" class="form-control" name="name" value="Scott Shaper">
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="sshaper@test.edu">
            </div>
          </div>
        </div>



        


        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" value="password">
            </div>
          </div>
        </div>


        <div class="col-md-6">
    <label for="inputState" class="form-label">Status</label>
    <select id="inputState" name="status" class="form-select">
      <option selected>Admin</option>
      <option>Staff</option>
    </select>
  </div>

  <br></br>


        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="submit" class="btn btn-primary" name="addAdmin" value="Submit" >
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>