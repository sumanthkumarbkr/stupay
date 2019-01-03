<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT u_id FROM university WHERE u_id = '$myusername' and u_password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['u_id'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_start();
         $_SESSION['login_user'] = $myusername;
         
         header("location: universitypage.php");
      }else {
         echo "<script type='text/javascript'>alert('AUTENTICATION ERROR : CHECK FOR EMAIL OR PASSWORD');</script>";
      }
   }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css"> -->
    <title>University</title>
</head>
<body>

<div class="agile-login">
		<h1>University Login Page</h1>
		<div class="wrapper">
			<h2>Sign In</h2>
			<div class="w3ls-form">
				<form action="" method="post">
					<label>Username</label>
					<input type="text" name="username" placeholder="Username" required/>
					<label>Password</label>
					<input type="password" name="password" placeholder="Password" required />
					<a href="#" class="pass">Forgot Password ?</a>
					<input type="submit" value="Log In" />
				</form>
			</div>
			
		
		</div>
		<br>
		
	</div>
	


    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/retina-1.1.0.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>