<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $var_value = $_SESSION['varname'];
      echo $var_value;

      $fees = mysqli_real_escape_string($db,$_POST['fees1']);
      $sql = "SELECT * FROM student where usn='$var_value';";

if ($db->query($sql) === TRUE) {
   echo " ";
} else {
    echo " ";
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
		<h1>Payment</h1>
		<div class="wrapper">
			<h2>Payment $</h2>
			<div class="w3ls-form">
				<form  action="save.php" method="post">
					<label>Account Holder Name</label>
					<input type="text" name="name" placeholder="Account Holder Name" />
					<label>Account Number</label>
                    <input type="text" name="acc_number" placeholder="Account Number"  />
                    <label>CVV</label>
                    <input type="text" name="acc_cvv" placeholder="CVV"  />
                    
                    <label>Expiry Date</label>
                    <input type="text" name="exp_date" placeholder="Expiry Date"  />
                    <label>Amount</label>
					<input type="text" name="amount" placeholder="Enter the amount"  />
					
					<input type="submit" value="Proceed To Pay" />
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