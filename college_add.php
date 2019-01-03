

<?php 



   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $college_id = mysqli_real_escape_string($db,$_POST['college_id']);
      $college_name = mysqli_real_escape_string($db,$_POST['college_name']); 
      $college_password = mysqli_real_escape_string($db,$_POST['college_password']); 
      $university_code = mysqli_real_escape_string($db,$_POST['university_code']); 
 $sql = "INSERT INTO college (c_code, c_name, c_password,u_id)VALUES ('$college_id', '$college_name', '$college_password','$university_code');";
      
if ($db->query($sql) === TRUE) {
    header("location: universitypage.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}




}

?>.