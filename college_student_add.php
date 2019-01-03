
<?php 



  include('csession.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      
      


      $student_usn = mysqli_real_escape_string($db,$_POST['student_usn']);
      $student_branch = mysqli_real_escape_string($db,$_POST['branch_name1']); 
      $student_year = mysqli_real_escape_string($db,$_POST['year1']); 
      $student_email = mysqli_real_escape_string($db,$_POST['student_email']); 
      $student_name = mysqli_real_escape_string($db,$_POST['student_name']); 
      $student_phone = mysqli_real_escape_string($db,$_POST['student_phone']); 
      $student_password = mysqli_real_escape_string($db,$_POST['student_password']);

 $sql = "INSERT INTO `student` (`usn`, `s_name`, `s_phone`, `s_email`, `s_year`, `s_password`, `s_branch`, `c_code`) VALUES ('$student_usn', '$student_name', '$student_phone', '$student_email', '$student_year', '$student_password', '$student_branch', '$login_session');";
  if ($db->query($sql) === TRUE) {
    header("location: college_page.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;

    echo $login_session;
}





}

?>.