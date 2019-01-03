
<?php 



   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
       $sql = "SELECT max(f_id)'f_id' FROM types_of_fees LIMIT 1;";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_assoc($result);
     $a= $row['f_id'];
      $a=$a+1;
      


      $fees_name = mysqli_real_escape_string($db,$_POST['fees_name']);
      $branch = mysqli_real_escape_string($db,$_POST['branchname']); 
      $cyear = mysqli_real_escape_string($db,$_POST['year']); 
      $amount = mysqli_real_escape_string($db,$_POST['amount']); 
 $sql = "INSERT INTO types_of_fees (`f_id`, `f_name`, `f_amount`, `f_branch`, `f_year`) VALUES ('$a', '$fees_name', '$amount', '$branch', '$cyear');";
  if ($db->query($sql) === TRUE) {
    header("location: universitypage.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}





}

?>.