<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/lg.png">
  <title>
    Scholar Sphere System
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>
<style>
  input[type="date"]:in-range::-webkit-datetime-edit-year-field, 
  input[type="date"]:in-range::-webkit-datetime-edit-month-field, 
  input[type="date"]:in-range::-webkit-datetime-edit-day-field, 
  input[type="date"]:in-range::-webkit-datetime-edit-text 
  { 	color: transparent; }
  </style>

<?php

require('config/config.php');
require('config/db.php');

if(isset($_POST['submit'])){
    $firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
    $midinitial=mysqli_real_escape_string($conn,$_POST['midinitial']);
    $lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);
    $sex=mysqli_real_escape_string($conn,$_POST['sex']);
    $birthdate=mysqli_real_escape_string($conn,$_POST['birthdate']);
    $civil_status=mysqli_real_escape_string($conn,$_POST['civil_status']);
    $citizenship=mysqli_real_escape_string($conn,$_POST['citizenship']);
    $religion=mysqli_real_escape_string($conn,$_POST['religion']);
    $mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $address=mysqli_real_escape_string($conn,$_POST['address']);
    $batchnum=mysqli_real_escape_string($conn,$_POST['batchnum']);
    $school=mysqli_real_escape_string($conn,$_POST['school']);
    $college=mysqli_real_escape_string($conn,$_POST['college']);
    $yearlevel=mysqli_real_escape_string($conn,$_POST['yearlevel']);
    $program=mysqli_real_escape_string($conn,$_POST['program']);
    $major=mysqli_real_escape_string($conn,$_POST['major']);
    $acceptdate=mysqli_real_escape_string($conn,$_POST['acceptdate']);


    // Create insert query
    $query = "INSERT INTO members (batchnum, firstname, midinitial, lastname, school, college, yearlevel, program, major, acceptdate) 
          VALUES ('$batchnum', '$firstname', '$midinitial', '$lastname', '$school', '$college', '$yearlevel', '$program', '$major', '$acceptdate');

          SET @last_id = LAST_INSERT_ID();

          INSERT INTO personal_info (memberID, age, sex, birthdate, civil_status, citizenship, religion, mobile, email, address) 
          VALUES (@last_id, '$age', '$sex', '$birthdate', '$civil_status', '$citizenship', '$religion', '$mobile', '$email', '$address');

          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'COR', '1st Year', '1st Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'COR', '1st Year', '2nd Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'COR', '2nd Year', '1st Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'COR', '2nd Year', '2nd Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'COR', '3rd Year', '1st Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'COR', '3rd Year', '2nd Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'COR', '4th Year', '1st Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'COR', '4th Year', '2nd Sem', 'Not Applicable');
          
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'ROG', '1st Year', '1st Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'ROG', '1st Year', '2nd Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'ROG', '2nd Year', '1st Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'ROG', '2nd Year', '2nd Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'ROG', '3rd Year', '1st Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'ROG', '3rd Year', '2nd Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'ROG', '4th Year', '1st Sem', 'Not Applicable');
          INSERT INTO requirements (memberID, files, yearlevel, semester, status) VALUES (@last_id, 'ROG', '4th Year', '2nd Sem', 'Not Applicable');

          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '1st Year', '1st Sem', 'First Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '1st Year', '1st Sem', 'Second Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '1st Year', '1st Sem', 'Third Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '1st Year', '1st Sem', 'Fourth Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '1st Year', '1st Sem', 'Fifth Month', 'Not Applicable');

          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '1st Year', '2nd Sem', 'First Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '1st Year', '2nd Sem', 'Second Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '1st Year', '2nd Sem', 'Third Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '1st Year', '2nd Sem', 'Fourth Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '1st Year', '2nd Sem', 'Fifth Month', 'Not Applicable');

          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '2nd Year', '1st Sem', 'First Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '2nd Year', '1st Sem', 'Second Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '2nd Year', '1st Sem', 'Third Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '2nd Year', '1st Sem', 'Fourth Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '2nd Year', '1st Sem', 'Fifth Month', 'Not Applicable');

          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '2nd Year', '2nd Sem', 'First Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '2nd Year', '2nd Sem', 'Second Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '2nd Year', '2nd Sem', 'Third Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '2nd Year', '2nd Sem', 'Fourth Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '2nd Year', '2nd Sem', 'Fifth Month', 'Not Applicable');

          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '3rd Year', '1st Sem', 'First Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '3rd Year', '1st Sem', 'Second Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '3rd Year', '1st Sem', 'Third Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '3rd Year', '1st Sem', 'Fourth Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '3rd Year', '1st Sem', 'Fifth Month', 'Not Applicable');

          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '3rd Year', '2nd Sem', 'First Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '3rd Year', '2nd Sem', 'Second Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '3rd Year', '2nd Sem', 'Third Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '3rd Year', '2nd Sem', 'Fourth Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '3rd Year', '2nd Sem', 'Fifth Month', 'Not Applicable');

          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '4th Year', '1st Sem', 'First Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '4th Year', '1st Sem', 'Second Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '4th Year', '1st Sem', 'Third Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '4th Year', '1st Sem', 'Fourth Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '4th Year', '1st Sem', 'Fifth Month', 'Not Applicable');

          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '4th Year', '2nd Sem', 'First Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '4th Year', '2nd Sem', 'Second Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '4th Year', '2nd Sem', 'Third Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '4th Year', '2nd Sem', 'Fourth Month', 'Not Applicable');
          INSERT INTO allowances (memberID, yearlevel, semester, month, date_received, status) VALUES (@last_id, '4th Year', '2nd Sem', 'Fifth Month', 'Not Applicable');
          ";
        

if(mysqli_multi_query($conn, $query)){
    header('Location: '.ROOT_URL.'members.php');
      } else {
          echo 'ERROR: '. mysqli_error($conn);
      }
}

?>
<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    
      
        <main class="main-content  mt-0">
            <div class="container">
              <div class="row">

                <!-- HEADER -->
                <div class="col-md-6">
                  <div class="card card-plain" style="width:1000px">
                    <div class="card-header">
                    </div>                    
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                      <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Fill out all needed information
                        </h4>
                        <p class="text-white font-weight-bolder text-center mt-2 mb-0">Enter all needed information</p>
                      </div>
                    </div>
                  <!-- END HEADER -->

                    <div class="card-body" >
                      <h5>Personal Information</h5>
                      <form role="form" style="width:450px" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                      <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Firstname</label>
                          <input type="text" class="form-control" name="firstname">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Middle Initial</label>
                          <input type="text" class="form-control" name="midinitial">
                        </div>
                        <div class="input-group input-group-outline mb-3"> 
                          <label class="form-label">Lastname</label>
                          <input type="text" class="form-control" name="lastname">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Age</label>
                          <input type="text" class="form-control" name="age">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                        <label hidden= "hide" class="form-label">Sex</label>
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <img style="height: 7px; width: 10px; margin-right:10px; margin-top:4px; opacity: 0.7" src="../assets/img/down.png" alt="Arrow Down">
                      </span>
                    </div>
                    <select class="form-control" name="sex">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Birthday</label>
                          <input type="date" class="form-control" name="birthdate">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                        <label hidden= "hide" class="form-label">Civil Status</label>
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <img style="height: 7px; width: 10px; margin-right:10px; margin-top:4px; opacity: 0.7" src="../assets/img/down.png" alt="Arrow Down">
                      </span>
                    </div>
                    <select class="form-control" name="civil_status">
                      <option value="Single">Single</option>
                      <option value="Married">Married</option>
                      <option value="Divorced">Divorced</option>
                      <option value="Widowed">Widowed</option>
                    </select>
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Citizenship</label>
                          <input type="text" class="form-control" name="citizenship">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Religion</label>
                          <input type="text" class="form-control" name="religion">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Mobile</label>
                          <input type="tel" class="form-control" name="mobile">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control" name="email">
                        </div>
                        <div class="input-group input-group-outline mb-3">
                          <label class="form-label">Address</label>
                          <input type="text" class="form-control" name="address">
                        </div>
                      </div>
</div>
</div>


<div class="col-md-6" style="margin-top: 138px">
        
          <div class="card-body">
                        <!-- <div style="float: right"> -->
                        <h5>Academic Information</h5>
                        
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Batch Number</label>
                            <input type="tel" class="form-control" name="batchnum">
                          </div>
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label">School</label>
                            <input type="text" class="form-control" name="school">
                          </div>
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label">College</label>
                            <input type="text" class="form-control" name="college">
                          </div>
                          <div class="input-group input-group-outline mb-3">
                          <label hidden= "hide" class="form-label">Year Level</label>
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <img style="height: 7px; width: 10px; margin-right:10px; margin-top:4px; opacity: 0.7" src="../assets/img/down.png" alt="Arrow Down">
                      </span>
                    </div>
                    <select class="form-control" name="yearlevel">
                      <option value="1st Year">1st Year</option>
                      <option value="2nd Year">2nd Year</option>
                      <option value="3rd Year">3rd Year</option>
                      <option value="4th Year">4th Year</option>
                    </select>
                          </div>
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Program</label>
                            <input type="text" class="form-control" name="program">
                          </div>
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Major</label>
                            <input type="text" class="form-control" name="major">
                          </div>
                          <div class="input-group input-group-outline mb-3">
                            <label class="form-label">Acceptance Date</label>
                            <input type="date" class="form-control" name="acceptdate">
                          </div>
             
                            <div class="text-center">
                            <a href="../pages/add-member.php">
                              <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" name="submit">Submit</button>
                            </a>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                      <p class="mb-2 text-sm mx-auto">
                        Go back to?
                        <a href="../pages/dashboard.php" class="text-primary text-gradient font-weight-bold">Dashboard</a>
                      </p>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
        <!--   Core JS Files   -->
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script>
          var win = navigator.platform.indexOf('Win') > -1;
          if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
              damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
          }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>