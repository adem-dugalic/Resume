<?php
require 'dbconfig/config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>IUS test system</title>
	<link rel="stylesheet" type="text/css" href="css/indexstyle.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
  <div class="header">
    <img src="img/Iuslogo2.png" class="logo">
    <h1>International University of Sarajevo</h1></div>
<form class="container" action="index.php" method="post">
  <div class="box"></div>
  <div class="container-forms">
    <div class="container-info">
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Have an account?
            </p>
            <div class="btn">
              Log in
            </div>
          </div>
        </div>
      </div>
      <div class="info-item">
        <div class="table">
          <div class="table-cell">
            <p>
              Don't have an account? 
            </p>
            <div class="btn">
              Sign up
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-form">
      <div class="form-item log-in">
        <div class="table">
          <div class="table-cell">
            <input name="username" placeholder="Username" type="text" /><input name="password" placeholder="Password" type="Password" />
              <div class="cup"><button name="login" id="mozda"><div class="btn">Log in</div></button></div>
          </div>
        </div>
      </div>
      <div class="form-item sign-up">
        <div class="table">
          <div class="table-cell">
            <input name="username1" placeholder="Username" type="text" /><input name="password1" placeholder="Password" type="Password" /><input name="cpassword" placeholder="Confirm Password" type="Password" />
            <div class="cup"><button name="register"><div class="btn">Sign up</div></button></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>

<img src="img/devius.png" class="rabbit">
</form>
	<?php
		//log in
    if(isset($_POST['login'])){

			if($_POST['username']==""||$_POST['password']==""){
				header('location: login.php');
			}else{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = "select * from user WHERE username= '$username' AND password='$password'";
			$query_run = mysqli_query($con,$query);

			if(mysqli_num_rows($query_run)>0){
				$_SESSION['username'] = $username;
        $_SESSION['active'] = "active";

				header('location: homepage.php');

				
			}else{
				echo '<script type="text/javascript"> alert("Invalid username or password") </script> ';
			}
		}
	}
  // Register
  if(isset($_POST['register'])){

    $username1 = $_POST['username1'];
    $password1 = $_POST['password1'];
    $cpassword = $_POST['cpassword'];

    if($password1 == $cpassword){

      $query = "select * from user WHERE username= '$username1' ";

      $query_run = mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)>0){
        header('location: login.php');
      }else{
        $query = "insert into user values ('$username1','$password1') ";
        $query_run = mysqli_query($con,$query);
        if($query_run){
          echo '<script type="text/javascript"> alert("Registration complete go to login page") </script> ';
        }else{
          echo '<script type="text/javascript"> alert("Error") </script> ';
        }
      }
    }else{
      echo '<script type="text/javascript"> alert("Error, no match") </script> ';
    }
  }

	?>
	

</body>
</html>