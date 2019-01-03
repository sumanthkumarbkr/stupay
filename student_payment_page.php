<?php
   include('ssession.php');
  
   $_SESSION['varname1'] = $login_session;
   
   
   ?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Payment</title>

        <!-- CSS -->        
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">

       
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

       

    </head>

    <body>
            <nav class="navbar navbar-dark bg-transparent">
                    <div class="navbar-brand" href="#">
                      <img src="logo2.png" width="192" height="120" alt="">
                    </div>
                    <!-- <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#exampleModalCenter">Add College</button>
                    <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#add_branch">Add Branch</button>
                    
                    <button class="btn btn-success" type="submit" data-toggle="modal" data-target="#exampleModalCenter1">Fees By College</button>
                    <button class="btn btn-success" type="submit"  data-toggle="modal" data-target="#exampleModalCenter2">Add Fees</button> -->
                    <button class="btn btn-success btn-primary btn-lg" type="submit"><a href="logout.php">LOGOUT</a> </button>
                 </nav>
                  
                      



                 <div class="container">
                        <div class="row"  >
                            <div class="col-sm-6" type="submit" data-toggle="modal" data-target="#exampleModalCenter">
                                <div class="card bg-success" id="reqHelp">
                                    <div class="card-body ">
                                        <p class="card-text">
                                            <center><i class="fas fa-money-bill fa-5x"></i></center>
                                        </p>
                                        <h5 class="card-title">
                                            <center>Pay Fees</center>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card" data-toggle="modal" data-target="#exampleModal" id="donate_card">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <center><i class="fas fa-eye fa-5x"></i></center>
                                        </p>
                                        <h5 class="card-title">
                                          <a href="student_fees_table.php">
                                            <center>View</center></a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title"    id="exampleModalCenterTitle">Make payment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="payment.php" method="post">
                  <div class="form-group">
                  
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
                            <div class="form-group">
                            <button type="submit" class="btn btn-secondary btn-lg btn-block" >Proceed</button>
             
            </div>
              </form>
             </div>
           
          </div>
        </div>
      </div>
                     </div>


                   

                                           <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->

                                          

                     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

                     
    </body>

</html>


