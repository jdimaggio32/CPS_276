<?php
//in the practice page this requires the admin page
require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/Assignment10/classes/Validation.php';
require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/Assignment10/pages/routes.php';
$page = new Page();
echo $page->head("Encrypted Login - Login Page");
//echo password_hash('password', PASSWORD_DEFAULT);

$output = "";

if(isset($_POST['login'])){
 
  //this also requires Admin in the other file
  require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/Assignment10/classes/Validation.php';
  $admin = new Admin();
  $output = $admin->login($_POST);
  echo $output;
 if($output === 'success'){
  header('Location: /home/j/d/jdimaggio/public_html/CPS_276/Assignments/Assignment10/pages/welcome.php');
  }
  

}

?>
  <body>
    <div class="container">
      <h1>Login</h1>
      <p><?php echo $output ?></p>
      
      <form action="index.php" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="username">Email</label>
            <input type="text" class="form-control" name="username" value="jdimaggio@wccnet.edu">
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
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="submit" class="btn btn-primary" name="login" value="Login">
          </div>
        </div>
      </div>
      </form>



    </div>

  </body>
</html>