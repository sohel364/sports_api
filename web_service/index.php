<?php
  $flag = isset($_REQUEST['Flag']) ? $_REQUEST['Flag'] : null;
  $msg = "";
  if($flag != null){
    $msg = ($flag == "incorrect") ? "Didn't match username and password." : "Make sure you fill both username and password.";
    $msg = ($flag == "login") ? "Please Login to see dashboard." : $msg;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Web Service</title>
    <link rel="shortcut icon" href="images/icon-image.ico">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="module form-module">
      <div class="form">
        <h2>Login to your dashboard</h2>
        <form action="login.php" method="POST">
          <input type="text" name="username" placeholder="Username"/>
          <input type="password" name="password" placeholder="Password"/>
          <input type="submit" class="login-btn" value="Login">
        </form>

        <?php 
          if($msg != ""){
            echo '<p class="text-danger">'.$msg.'</p>';
          }
        ?>

      </div>
      <div class="cta"><a href="#">Forgot your password?</a></div>
    </div>
    <script src='js/jquery-1.10.2.min.js'></script>
  </body>
</html>
