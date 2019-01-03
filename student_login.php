<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT USN FROM student WHERE usn = '$myusername' and s_password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['usn'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         session_start();
         $_SESSION['login_user'] = $myusername;
         
         header("welcome to page");
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
    <!-- <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="student_login.css">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
    <title>Student Login</title>
</head>
<body>

<!-- <div class="agile-login">
		<h1>Student  Login Page</h1>
		<div class="wrapper">
			<h2>Sign In</h2>
			<div class="w3ls-form">
				<form action="universitypage.html" method="post">
					<label>Username</label>
					<input type="text" name="student_usn" placeholder="Enter USN" />
					<label>Password</label>
					<input type="password" name="password" placeholder="Password" />
					<a href="#" class="pass">Forgot Password ?</a>
					<input type="submit" value="Log In" />
				</form>
			</div>
			
		
		</div>
		<br>
		
    </div> -->
    <h1>Student Login</h1>
    <div class="w3ls-login box box--big">
            <!-- form starts here -->
       
            <form action="#" method="post">
                <div class="agile-field-txt">
                    <label>
                        <i class="fa fa-user" aria-hidden="true"></i> USN </label>
                    <input type="text" name="username" placeholder="Enter your USN " required="" />
                </div>
                <div class="agile-field-txt">
                    <label>
                        <i class="fa fa-envelope" aria-hidden="true"></i> Password </label>
                    <input type="password" name="password" placeholder="Enter your password " required="" id="myInput" />
                 
                </div>
                <!-- script for show password -->
                <script>
                    function myFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
                <!-- //script ends here -->
                <div class="w3ls-bot">
                    <div class="switch-agileits">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                            keep me signed in
                        </label>
                    </div>
                    <div class="form-end">
                        <input type="submit" value="LOGIN">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
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