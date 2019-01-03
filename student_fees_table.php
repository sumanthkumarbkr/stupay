
<?php
  include("config.php");
   session_start();
   
   
      $var_value = $_SESSION['varname'];
        $sql = "SELECT * FROM student where USN='$var_value';";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_assoc($result);
     $branch_name = $row['s_branch'];
     $year = $row['s_year'];
      // If result matched $myusername and $mypassword, table row must be 1 row

?>




<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">

       
       

    </head>

    <body>
            <nav class="navbar navbar-dark bg-transparent">
                    <div class="navbar-brand" href="#">
                      <img src="logo2.png" width="192" height="120" alt="">
                    </div>
                   
                    
                    
                    
                  </nav>


                  <div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <h1 style="color: white">PAID</h1>
      <table class="table table-striped table-dark table-hover">
        <thead>
          <tr>
            <th>
              USN
            </th>
            <th>
              Name
            </th>
          
          </tr>
        </thead>
        <tbody>
          <?php

            $sql = "select tf.f_id,f_name FROM types_of_fees tf where f_branch='$branch_name' AND f_year='$year'
AND f_id IN

(select f_id
from fees_paid
WHERE usn='$var_value')";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

          ?>
          <tr>
            <td>
              <?php echo $row['f_id']?>
            </td>
            <td>
              <?php echo $row['f_name']?>
            </td>
           
          </tr>
          <?php
            }
          }
          ?>
          
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <h1 style="color: black">NOT PAID</h1>
      <table class="table table-striped table-dark table-hover">
        <thead>
          <tr>
            <th>
              USN
            </th>
            <th>
              Name
            </th>
            
          </tr>
        </thead>
        <tbody>
        <?php

            $sql = "select tf.f_id,f_name FROM types_of_fees tf where f_branch='$branch_name' AND f_year='$year'
AND f_id NOT IN

(select f_id
from fees_paid
WHERE usn='$var_value');";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

          ?>
          <tr>
            <td>
              <?php echo $row['f_id']?>
            </td>
            <td>
              <?php echo $row['f_name']?>
            </td>
           
          </tr>
          <?php
            }
          }
          ?>        </tbody>
      </table>
    </div>
  </div>
</div>
                      
                   
                     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                          
    </body>

</html>


