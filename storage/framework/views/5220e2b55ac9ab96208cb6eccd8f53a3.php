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
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/img/apple-icon.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/lg.png')); ?>">
    <title>
        Scholar Sphere System
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="<?php echo e(asset('assets/css/nucleo-icons.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/nucleo-svg.css')); ?>" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo e(asset('assets/css/material-dashboard.css?v=3.0.0')); ?>" rel="stylesheet" />
</head>
<style>
    input[type="date"]:in-range::-webkit-datetime-edit-year-field,
    input[type="date"]:in-range::-webkit-datetime-edit-month-field,
    input[type="date"]:in-range::-webkit-datetime-edit-day-field,
    input[type="date"]:in-range::-webkit-datetime-edit-text {
        color: transparent;
    }
</style>


<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <main class="main-content  mt-0">
            <div class="container-fluid">
                <div class="row">

                    <!-- HEADER -->
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header"> </div>
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1"
                                    style="background-image: url('<?php echo e(asset('assets/img/bg.png')); ?>');background-size: cover">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Fill out all needed
                                        information
                                    </h4>
                                    <p class="text-white font-weight-bolder text-center mt-2 mb-0">Enter all needed
                                        information</p>
                                </div>
                                <div class="pop" style="width: 500px; margin: 15px auto 0; text-align: center;">
                                    <?php if(session('success')): ?>
                                        <div class="alert alert-success" style="color:#c2ffd7">
                                            <?php echo e(session('success')); ?> &nbsp;&nbsp; <i class="fas fa-check"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>

                            <!-- END HEADER -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5>Personal Information</h5>
                                        <form role="form" method="POST" action="members-add">
                                            <?php echo csrf_field(); ?>

                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Firstname</label>
                                                <input type="text" class="form-control" name="firstname" required>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Middle Initial</label>
                                                <input type="text" class="form-control" name="midinitial">
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Lastname</label>
                                                <input type="text" class="form-control" name="lastname" required>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Age</label>
                                                <input type="number" class="form-control" name="age" required>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label hidden="hide" class="form-label">Sex</label>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <img style="height: 7px; width: 10px; margin-right:10px; margin-top:4px; opacity: 0.7"
                                                            src="<?php echo e(asset('assets/img/down.png')); ?>" alt="Arrow Down">
                                                    </span>
                                                </div>
                                                <select class="form-control" name="sex">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Birthdate</label>
                                                <input type="date" class="form-control" name="birthdate" required>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label hidden="hide" class="form-label">Civil Status</label>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <img style="height: 7px; width: 10px; margin-right:10px; margin-top:4px; opacity: 0.7"
                                                            src="<?php echo e(asset('assets/img/down.png')); ?>" alt="Arrow Down">
                                                    </span>
                                                </div>
                                                <select class="form-control" name="civilstatus">
                                                    <option value="Single">Single</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Divorced">Divorced</option>
                                                    <option value="Widowed">Widowed</option>
                                                </select>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Religion</label>
                                                <input type="text" class="form-control" name="religion" required>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Mobile</label>
                                                <input type="tel" class="form-control" name="mobile" required>
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email">
                                            </div>
                                            <div class="input-group input-group-outline mb-3">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control" name="address" required>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="card-body">
                                        <!-- <div style="float: right"> -->
                                        <h5>Academic Information</h5>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Batch Number</label>
                                            <input type="number" class="form-control" name="batchnum" required>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">School</label>
                                            <input type="text" class="form-control" name="school" required>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">College</label>
                                            <input type="text" class="form-control" name="college" required>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label hidden="hide" class="form-label">Year Level</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <img style="height: 7px; width: 10px; margin-right:10px; margin-top:4px; opacity: 0.7"
                                                        src="<?php echo e(asset('assets/img/down.png')); ?>" alt="Arrow Down">
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
                                            <input type="text" class="form-control" name="program" required>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Major</label>
                                            <input type="text" class="form-control" name="major">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Acceptance Date</label>
                                            <input type="date" class="form-control" name="acceptdate" required>
                                        </div>

                                        <div class="text-center">
                                            <a href="members-add">
                                                <button type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"
                                                    name="submit">Submit</button>
                                            </a>
                                        </div>
                                        </form>
                                    </div>

                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-2 text-sm mx-auto">
                                            Go back to?
                                            <a href="members"
                                                class="text-primary text-gradient font-weight-bold">Members</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>


    </main>
    <!--   Core JS Files   -->
    <script src="<?php echo e(asset('assets/js/core/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/core/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
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
    <script src="<?php echo e(asset('assets/js/material-dashboard.min.js?v=3.0.0')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\Mark\webapp\resources\views/members-add.blade.php ENDPATH**/ ?>