<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT c_code FROM COLLEGE WHERE c_code = '$myusername' and c_password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['c_code'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         session_start();
         $_SESSION['login_user'] = $myusername;
         
         header("location: college_page.php");
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
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="collegelogin.css">
    <!-- <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css"> -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css' />
    <title>College</title>
</head>
<body>


     <div class="header-w3l">
		<h1> College Login Form</h1>
	</div>

<div class="main-content-agile">
	<div class="sub-main-w3">	
		<form action="" method="post">
			<input placeholder="Username or E-mail" name="username" class="user" type="text" required=""><br>
			<input  placeholder="Password" name="password" class="pass" type="password" required=""><br>
			<input type="submit" value="">
		</form>
	</div>
</div>

<div class="footer">
	<!-- <p>&copy;  Design by STUBYTE</p> -->
</div>
<!--//footer-->


    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/retina-1.1.0.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>