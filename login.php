<!DOCTYPE html>
<html>
  <head>
	  <meta charset="utf-8">
	  <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">

  <!--  <?php 
          	$error='';
          	if(isset($_POST['log']))
            {
          		$username = trim($_POST['email']);
          		$password = trim($_POST['password']);

              if (!empty($username) && !empty($password)) {
                  $sql="SELECT * FROM `admininfo` WHERE `username`='$username' AND `password`='$password'";
                  $res=mysqli_query($con,$sql);
                  $data=mysqli_fetch_assoc($res);
                  echo $data['username'];
                  if (strcasecmp($username, $data['username'])==0 && strcasecmp($password, $data['password'])==0) 
                  {
                    $_SESSION['username']=$data['username'];
                    $_SESSION['id']=$data['id'];
                    header('Location: backend/main_admincv.php');
                  }
                  else
                   {
                    $error="INVALID USER ID OR PASSWORD";
                   }
                 }
              $error="INVALID USER ID OR PASSWORD";
          	}
          ?>  -->

  </head>
   
  <body>
    <!------------- Login -------------->
    <div class="login-cbox">
      <form class="" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      	 
        <div class="container">
          <label for="">F-Courier</label><br>
          <span style="color: blue"><?php echo($error) ?></span>
      	 	<input type="text" name="email" placeholder="Email" value="">
      	 	<input type="password" name="password" placeholder="Password" value="">
      	 	<a href="#">Forgot Password ?</a>
      	 	<button type="submit" class="btn" name="log"><a href="#">Login</a></button>
        </div>

      </form>    
    </div>  
    <!----------- End Login ------------>

  </body>
</html>