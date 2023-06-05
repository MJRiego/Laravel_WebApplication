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
  input[type="date"]:in-range::-webkit-datetime-edit-text {
    color: transparent;
  }
</style>

<?php
require_once('config/config.php');
require_once('config/db.php');

if (isset($_GET['memberID'])) {
  $memberID = $_GET['memberID'];
}

// Check if form is submitted
if (isset($_POST['update'])) {
  // Get member information from form
  $memberID = mysqli_real_escape_string($conn, $_GET['memberID']);
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $midinitial = mysqli_real_escape_string($conn, $_POST['midinitial']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $age = mysqli_real_escape_string($conn, $_POST['age']);
  $sex = mysqli_real_escape_string($conn, $_POST['sex']);
  $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
  $civil_status = mysqli_real_escape_string($conn, $_POST['civil_status']);
  $citizenship = mysqli_real_escape_string($conn, $_POST['citizenship']);
  $religion = mysqli_real_escape_string($conn, $_POST['religion']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $batchnum = mysqli_real_escape_string($conn, $_POST['batchnum']);
  $school = mysqli_real_escape_string($conn, $_POST['school']);
  $college = mysqli_real_escape_string($conn, $_POST['college']);
  $yearlevel = mysqli_real_escape_string($conn, $_POST['yearlevel']);
  $program = mysqli_real_escape_string($conn, $_POST['program']);
  $major = mysqli_real_escape_string($conn, $_POST['major']);
  $acceptdate = mysqli_real_escape_string($conn, $_POST['acceptdate']);

  // Create update query
  $query = "UPDATE members,personal_info SET members.firstname = '$firstname', members.midinitial='$midinitial',members.lastname= '$lastname',
personal_info.age='$age', personal_info.sex='$sex', personal_info.birthdate='$birthdate ', personal_info.civil_status='$civil_status', 
personal_info.citizenship = '$citizenship', personal_info.religion = '$religion', personal_info.mobile = ' $mobile', personal_info.email = '$email',
 personal_info.address = '$address', members.batchnum = '$batchnum', members.school = '$school', members.college = '$college',
 members.yearlevel = '$yearlevel', members.program = '$program ', members.major = '$major', members.acceptdate = '$acceptdate'
  WHERE members.memberID=$memberID AND personal_info.memberID=$memberID";
  $result = mysqli_query($conn, $query);


  if (!$result) {
    die('Error updating task: ' . mysqli_error($conn));
  } else {
    if (mysqli_query($conn, $query)) {
      echo "<script>window.location.href='profile.php?memberID=$memberID';</script>";
    } else {
      echo 'ERROR: ' . mysqli_error($conn);
    }
  }

}

if (isset($_GET['memberID'])) {
  $memberID = $_GET['memberID'];
}
// create query
$query = "SELECT * FROM members
INNER JOIN
personal_info ON members.memberID = personal_info.memberID
WHERE members.memberID =" . $memberID;


// get the result 
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) == 1) {
  $data = mysqli_fetch_array($result);
  $firstname = $data['firstname'];
  $midinitial = $data['midinitial'];
  $lastname = $data['lastname'];
  $age = $data['age'];
  $sex = $data['sex'];
  $birthdate = $data['birthdate'];
  $civil_status = $data['civil_status'];
  $citizenship = $data['citizenship'];
  $religion = $data['religion'];
  $mobile = $data['mobile'];
  $email = $data['email'];
  $address = $data['address'];
  $batchnum = $data['batchnum'];
  $school = $data['school'];
  $college = $data['college'];
  $yearlevel = $data['yearlevel'];
  $program = $data['program'];
  $major = $data['major'];
  $acceptdate = $data['acceptdate'];
}

mysqli_free_result($result);

mysqli_close($conn);


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

              <div class="card-body">
                <h5>Personal Information</h5>
                <form role="form" style="width:450px" method="POST"
                  action="<?php echo $_SERVER['PHP_SELF'] . '?memberID=' . $memberID; ?>">
                  <style>
                    .form-label {
                      opacity: 0;
                      transition: opacity 0.3s ease-in-out;
                    }

                    .form-label.visible {
                      opacity: 1;
                    }
                  </style>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="firstname" id="hide"
                      value="<?php echo $data['firstname']; ?>">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Middle Initial</label>
                    <input type="text" class="form-control" name="midinitial" id="hide"
                      value="<?php echo $data['midinitial']; ?>">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="lastname" id="hide"
                      value="<?php echo $data['lastname']; ?>">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Age</label>
                    <input type="text" class="form-control" name="age" id="hide" value="<?php echo $data['age']; ?>">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Sex</label>
                    <input type="text" class="form-control" name="sex" value="<?php echo $data['sex']; ?>">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Birthday</label>
                    <input type="date" class="form-control" name="birthdate" value="<?php echo $data['birthdate']; ?>">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Civil Status</label>
                    <input type="text" class="form-control" name="civil_status"
                      value="<?php echo $data['civil_status']; ?>">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Citizenship</label>
                    <input type="text" class="form-control" name="citizenship"
                      value="<?php echo $data['citizenship']; ?>">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Religion</label>
                    <input type="text" class="form-control" name="religion" value="<?php echo $data['religion']; ?>">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Mobile</label>
                    <input type="tel" class="form-control" name="mobile" value="<?php echo $data['mobile']; ?>">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $data['email']; ?>">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $data['address']; ?>">
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
                <input type="tel" class="form-control" name="batchnum" value="<?php echo $data['batchnum']; ?>">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">School</label>
                <input type="text" class="form-control" name="school" value="<?php echo $data['school']; ?>">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">College</label>
                <input type="text" class="form-control" name="college" value="<?php echo $data['college']; ?>">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Year Level</label>
                <input type="text" class="form-control" name="yearlevel" value="<?php echo $data['yearlevel']; ?>">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Program</label>
                <input type="text" class="form-control" name="program" value="<?php echo $data['program']; ?>">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Major</label>
                <input type="text" class="form-control" name="major" value="<?php echo $data['major'];?>">
              </div>
              <div class="input-group input-group-outline mb-3">
                <label class="form-label">Acceptance Date</label>
                <input type="date" class="form-control" name="acceptdate" value="<?php echo $data['acceptdate']; ?>">
              </div>

              <div class="text-center">
                <a href="">
                  <input type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"
                    name="update" value="Update">
                </a>
              </div>
              <script>
                const inputs = document.querySelectorAll('.form-control');
                const labels = document.querySelectorAll('.form-label');

                inputs.forEach((input, index) => {
                  input.addEventListener('focus', function () {
                    labels[index].classList.add('visible');
                  });
                });
              </script>
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