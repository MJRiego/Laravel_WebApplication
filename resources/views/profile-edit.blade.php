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
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/lg.png') }}">
    <title>
        Scholar Sphere System
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
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
            <div class="container">
                <div class="row">

                    <!-- HEADER -->
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="card-header"> </div>
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1"
                                    style="background-image: url('{{ asset('assets/img/bg.png') }}');background-size: cover">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Fill out all needed
                                        information
                                    </h4>
                                    <p class="text-white font-weight-bolder text-center mt-2 mb-0">Enter all needed
                                        information</p>
                                </div>
                            </div>
                            <!-- END HEADER -->
                            <style>
                                .form-label {
                                    opacity: 0;
                                    transition: opacity 0.3s ease-in-out;
                                }

                                .form-label.visible {
                                    opacity: 1;
                                }
                            </style>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5>Personal Information</h5>
                                        @foreach ($members as $member)
                                            <form action="profile-edit?memberID={{ $member->memberID }}" method="POST">
                                                @csrf
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Firstname</label>
                                                    <input type="text" class="form-control" name="firstname"
                                                        id="hide" required value="{{ $member->firstname }}">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Middle Initial</label>
                                                    <input type="text" class="form-control" name="midinitial"
                                                        id="hide" value="{{ $member->midinitial }}">
                                                </div>

                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Lastname</label>
                                                    <input type="text" class="form-control" name="lastname"
                                                        id="hide" required value="{{ $member->lastname }}">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Age</label>
                                                    <input type="number" class="form-control" name="age"
                                                        id="hide" required value="{{ $member->age }}">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label hidden="hide" class="form-label">Sex</label>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <img style="height: 7px; width: 10px; margin-right:10px; margin-top:4px; opacity: 0.7"
                                                                src="{{ asset('assets/img/down.png') }}"
                                                                alt="Arrow Down">
                                                        </span>
                                                    </div>
                                                    <select class="form-control" name="sex">
                                                        <option value="Male"
                                                            @if ($member->sex == 'Male') selected @endif>Male
                                                        </option>
                                                        <option value="Female"
                                                            @if ($member->sex == 'Female') selected @endif>Female
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Birthdate</label>
                                                    <input type="date" class="form-control" name="birthdate" required
                                                        value="{{ $member->birthdate }}">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label hidden="hide" class="form-label">Civil Status</label>
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <img style="height: 7px; width: 10px; margin-right:10px; margin-top:4px; opacity: 0.7"
                                                                src="{{ asset('assets/img/down.png') }}"
                                                                alt="Arrow Down">
                                                        </span>
                                                    </div>
                                                    <select class="form-control" name="civilstatus">
                                                        <option value="Single"
                                                            @if ($member->civilstatus == 'Single') selected @endif>Single
                                                        </option>
                                                        <option value="Married"
                                                            @if ($member->civilstatus == 'Married') selected @endif>Married
                                                        </option>
                                                        <option value="Divorced"
                                                            @if ($member->civilstatus == 'Divorced') selected @endif>Divorced
                                                        </option>
                                                        <option value="Widowed"
                                                            @if ($member->civilstatus == 'Widowed') selected @endif>Widowed
                                                        </option>
                                                    </select>

                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Religion</label>
                                                    <input type="text" class="form-control" name="religion"
                                                        required value="{{ $member->religion }}">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Mobile</label>
                                                    <input type="tel" class="form-control" name="mobile"
                                                        value="{{ $member->mobile }}">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        value="{{ $member->email }}">
                                                </div>
                                                <div class="input-group input-group-outline mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" class="form-control" name="address"
                                                        required value="{{ $member->address }}">
                                                </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card-body">
                                        <!-- <div style="float: right"> -->
                                        <h5>Academic Information</h5>

                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Batch Number</label>
                                            <input type="number" class="form-control" name="batchnum" required
                                                value="{{ $member->batchnum }}">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">School</label>
                                            <input type="text" class="form-control" name="school" required
                                                value="{{ $member->school }}">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">College</label>
                                            <input type="text" class="form-control" name="college" required
                                                value="{{ $member->college }}">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label hidden="hide" class="form-label">Year Level</label>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <img style="height: 7px; width: 10px; margin-right:10px; margin-top:4px; opacity: 0.7"
                                                        src="{{ asset('assets/img/down.png') }}" alt="Arrow Down">
                                                </span>
                                            </div>
                                            <select class="form-control" name="yearlevel">
                                                <option value="1st Year"
                                                    @if ($member->yearlevel == '1st Year') selected @endif>1st Year</option>
                                                <option value="2nd Year"
                                                    @if ($member->yearlevel == '2nd Year') selected @endif>2nd Year</option>
                                                <option value="3rd Year"
                                                    @if ($member->yearlevel == '3rd Year') selected @endif>3rd Year</option>
                                                <option value="4th Year"
                                                    @if ($member->yearlevel == '4th Year') selected @endif>4th Year</option>
                                            </select>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Program</label>
                                            <input type="text" class="form-control" name="program" required
                                                value="{{ $member->program }}">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Major</label>
                                            <input type="text" class="form-control" name="major"
                                                value="{{ $member->major }}">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Acceptance Date</label>
                                            <input type="date" class="form-control" name="acceptdate" required
                                                value="{{ $member->acceptdate }}">
                                        </div>
                                        @endforeach

                                        <div class="text-center">
                                            <a href="">
                                                <input type="submit"
                                                    class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0"
                                                    name="submit" value="Update">
                                            </a>
                                        </div>
                                        </form>
                                    </div>

                                    <script>
                                        const inputs = document.querySelectorAll('.form-control');
                                        const labels = document.querySelectorAll('.form-label');

                                        inputs.forEach((input, index) => {
                                            input.addEventListener('focus', function() {
                                                labels[index].classList.add('visible');
                                            });
                                        });
                                    </script>

                                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                        <p class="mb-2 text-sm mx-auto">
                                            Go back to?
                                            <a href="profile?memberID={{ $member->memberID }}"
                                                class="text-primary text-gradient font-weight-bold">Profile</a>
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
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
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
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>
</body>

</html>
