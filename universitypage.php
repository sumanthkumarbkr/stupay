<?php
   include('usession.php');
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
                    <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#exampleModalCenter">Add College</button>
                    <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#add_branch">Add Branch</button>
                    
                    <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#exampleModalCenter1">Fees By College</button>
                    <button class="btn btn-success" type="submit"  data-toggle="modal" data-target="#exampleModalCenter2">Add Fees</button>
                    
                    
                    
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
              <form action="college_add.php" method="post">
                  <div class="form-group">
                       <input type="text" class="form-control is-invalid" name="college_id" id="college_id" placeholder="Enter College Id"/>
                       <div class="invalid-feedback">College Id Required</div>
                     </div>
                  <div class="form-group">
                        <label for="college_name" class="col-form-label">College Name</label>
                        <input type="text" class="form-control" name="college_name" id="college_name" placeholder="Enter College Name"/>
                    </div>
                    <div class="form-group col-md-4">
                          <label for="inputState">State</label>

                           <?php
$query = "SELECT * from university ";
$result = mysqli_query($db, $query);
echo "<select name='university_code'>";
echo "<option value='0'>-Select-</option>";
while($row = mysqli_fetch_array($result)) {
    echo "<option value='".$row['u_id']."'>".$row['u_name']."</option>";
}
echo "</select>";
?>
          </div>
                    <div class="form-group">
                        <label for="college_name" class="col-form-label">College password</label>
                        <input type="text" class="form-control" name="college_password" id="college_Password" placeholder="Enter College Password"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Add College</button>
              </form>
             </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
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
                                    <form action="branch_add.php" method="post">
                                        <div class="form-group">
                                             <input type="text" class="form-control" name="branch" id="new_branch" placeholder="Enter Branch"/>
                                           </div>
                                        <button type="submit" class="btn btn-primary">Add Branch</button>
                                    </form>
                                   </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                                           </div>

                                           <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->

                                           <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter1Title" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalCenter1Title">Fees By College</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <form action="university_college_table.php" method="post">
                                                   <div class="form-group col-md-12">
                                                          <label for="inputState">State</label>

                                                         <?php $query = "SELECT * from college ";
                                                          $result = mysqli_query($db, $query);
                                                            echo "<select name='college_code1'>";
                                                            echo "<option value='0'>-Select College Name-</option>";
                                                            while($row = mysqli_fetch_array($result)) {
                                                            echo "<option value='".$row['c_code']."'>".$row['c_name']."</option>";
                                                            }
                                                            echo "</select>";
                                                            ?>
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
                                                           <button type="submit" class="btn btn-primary" name='Submit" onclick='>Fee By College</button>
                                                      </form>
                                                     </div>
                                                    
                                                 
                                                     
                                                    
                                                  </div>
                                                </div>
                                              </div>

                                              <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter2Title" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalCenter2Title">Add Fees</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <form action="fees_add.php" method="post">
                                                          <div class="form-group">
                                                               <input type="text" class="form-control" name="fees_name" id="fees_name" placeholder="Enter Fees Name"/>
                                                             </div>
                                                           <div class="form-group col-md-12">
                                                          <label for="inputState">State</label>

                                                         <?php $query = "SELECT * from branch ";
                                                          $result = mysqli_query($db, $query);
                                                            echo "<select name='branchname'>";
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
                                                            echo "<select name='year'>";
                                                            echo "<option value='0'>-Select year-</option>";
                                                            while($row = mysqli_fetch_array($result)) {
                                                            echo "<option value='".$row['y_id']."'>".$row['y_id']."</option>";
                                                            }
                                                            echo "</select>";
                                                            ?>
                                                          </div>
                                                                <div class="form-group">
                                                                  <label for="amount" class="col-form-label">Amount</label>
                                                                  <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter the amount"/>
                                                              </div>
                                                               <button type="submit" class="btn btn-primary">Add Fees</button>
                                                      </form>
                                                     </div>
                                                    
                                                  </div>
                                                </div>
                                              </div>


                                              <h2><a href = "logout.php">Sign Out</a></h2>
                     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                          
    </body>
    <script>

    </script>

</html>


