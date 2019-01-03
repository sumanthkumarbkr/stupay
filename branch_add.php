<?php 



   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $sql = "SELECT max(b_id)'b_id' FROM branch LIMIT 1;";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_assoc($result);
     $a= $row['b_id'];
      $a=$a+1;

      $branch = mysqli_real_escape_string($db,$_POST['branch']);


     
 $sql = "INSERT INTO branch (b_id,b_name)VALUES ('$a','$branch');";
    
if ($db->query($sql) === TRUE) {
   header("location: universitypage.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}




}

?>.