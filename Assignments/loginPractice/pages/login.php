<?php
require_once 'Routes.php';
$page = new Page();

$output = "";

if(isset($_POST['login'])){
  require_once '/home/j/d/jdimaggio/public_html/CPS_276/Assignments/loginPractice/classes/Validation.php';
  $admin = new Admin();
  $output = $admin->login($_POST);
  echo $output;
  if($output === 'success'){
    header('Location: welcome.php');
  }

}

?>


<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"></head>

  <body>
    <h1>Login</h1>
      
      <form action="" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="jdimaggio@admin.com">
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