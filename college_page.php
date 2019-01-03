<?php
   include('csession.php');
   ?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <!-- CSS -->        
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">

       
       

    </head>

    <body>
            <nav class="navbar navbar-dark bg-transparent">
                    <div class="navbar-brand" href="#">
                      <img src="logo2.png" width="192" height="120" alt="">
                    </div>
                    <button class="btn btn-success btn-primary btn-lg" type="submit" data-toggle="modal" data-target="#exampleModalCenter">Add Students</button>
                    <button class="btn btn-success btn-primary btn-lg" type="submit" data-toggle="modal" data-target="#add_branch">Fee Details</button>
                    <button class="btn btn-success btn-primary btn-lg" type="submit"><a href="logout.php">LOGOUT</a> </button>
                    
                    
                    
                    
                    
                    
                  </nav>
                  
                      
                     <div id="add_college">
                        
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Add College</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="college_student_add.php" method="post">
                  <div class="form-group">
                       <input type="text" class="form-control is-invalid" name="student_usn" id="student_usn" placeholder="Enter the USN"/>
                       <!-- <div class="invalid-feedback">College Id Required</div> -->
                     </div>
                     <div class="form-group">
                      <input type="text" class="form-control " name="student_name" id="student_name" placeholder="Enter the student name"/>
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control " name="student_email" id="student_email" placeholder="Enter the email"/>
                  </div>
                
                                                           <div class="form-group col-md-12">
                                                          <label for="inputState">State</label>

                                                         <?php $query = "SELECT * from branch ";
                                                          $result = mysqli_query($db, $query);
                                                            echo "<select name='branch_name1'>";
                                                            echo "<option value='0'>-Select Branch-</option>";
                                                            while($row = mysqli_fetch_array($result)) {
                                                            echo "<option value='".$row['b_id']."'>".$row['b_name']."</option>";
                                                            }
                                                            echo "</select>";
                                                            ?>
                                                          </div>
                   
                 <?php $query = "SELECT * from year ";
                                                          $result = mysqli_query($db, $query);
                                                            echo "<select name='year1'>";
                                                            echo "<option value='0'>-Select year-</option>";
                                                            while($row = mysqli_fetch_array($result)) {
                                                            echo "<option value='".$row['y_id']."'>".$row['y_id']."</option>";
                                                            }
                                                            echo "</select>";
                                                            ?>
                                                          </div>
              <div class="form-group">
                <input type="text" class="form-control " name="student_phone" id="student_phone" placeholder="Enter the phone number"/>
            </div>
            <div class="form-group">
              <input type="password" class="form-control " name="student_password" id="student_password" placeholder="Enter the student password"/>
          </div>
           <button type="submit" class="btn btn-primary">Add College</button>
              </form>
             </div>
          
          </div>
        </div>
      </div>
                     </div>


                     <div id="branch">
                        
      
                            <!-- Modal -->
                            <div class="modal fade" id="add_branch" tabindex="-1" role="dialog" aria-labelledby="add_branchTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="add_branchTitle">Add Branch</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="college_branch_table.php" method="post">
                                        <div class="form-group col-md-12">
                                                          <label for="inputState">State</label>

                                                         <?php $query = "SELECT * from branch ";
                                                          $result = mysqli_query($db, $query);
                                                            echo "<select name='branch_name1'>";
                                                            echo "<option value='0'>-Select Branch-</option>";
                                                            while($row = mysqli_fetch_array($result)) {
                                                            echo "<option value='".$row['b_id']."'>".$row['b_name']."</option>";
                                                            }
                                                            echo "</select>";
                                                            ?>
                                                          </div>
                                                          <div class="form-group col-md-12">
                                                          <label for="inputState">State</label>

                                                         <?php $query = "SELECT * from year ";
                                                          $result = mysqli_query($db, $query);
                                                            echo "<select name='year1'>";
                                                            echo "<option value='0'>-Select year-</option>";
                                                            while($row = mysqli_fetch_array($result)) {
                                                            echo "<option value='".$row['y_id']."'>".$row['y_id']."</option>";
                                                            }
                                                            echo "</select>";
                                                            ?>
                                                          </div>
                                                          <div class="form-group col-md-12">
                                                          <label for="inputState">State</label>

                                                         <?php $query = "SELECT f_id,f_name from types_of_fees ";
                                                          $result = mysqli_query($db, $query);
                                                            echo "<select name='fees1'>";
                                                            echo "<option value='0'>-Select type of fees-</option>";
                                                            while($row = mysqli_fetch_array($result)) {
                                                            echo "<option value='".$row['f_id']."'>".$row['f_name']."</option>";
                                                            }
                                                            echo "</select>";
                                                            ?>
                                                          </div>
                                        <button type="submit" class="btn btn-primary">Search</button>

                                    </form>
                                   </div>
                                </div>
                              </div>
                            </div>
                                           </div>

                                          
                     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                          
    </body>

</html>


