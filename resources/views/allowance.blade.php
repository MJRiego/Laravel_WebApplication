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

<body class="g-sidenav-show  bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="dashboard" target="_blank">
                <img src="{{ asset('assets/img/lg.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Scholar Sphere System</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="dashboard">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="members">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">people</i>
                        </div>
                        <span class="nav-link-text ms-1">Members</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="grades-page">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Grades</span>
                    </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link text-white " href="reqs-page">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">assignment</i>
                        </div>
                        <span class="nav-link-text ms-1">Requirements</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="allowance-page">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                        </div>
                        <span class="nav-link-text ms-1">Allowance</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn bg-gradient-primary mt-4 w-100"
                    href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree"
                    type="button">Upgrade to
                    pro</a>
            </div>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <h5>Allowance</h5>

                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Type here...</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->





        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-lg-8">


                    <div class="col-md-12 mb-lg-0 mb-4">
                        <div class="card mt-4" style="width: 750px">
                            <div class="card-header pb-2 p-3"
                                style="background-image: url('{{ asset('assets/img/bg.png') }}'); background-size: cover">
                                <div class="row">
                                    <div class="col-6 align-items-center">

                                        <div class="col-6 text-end" style="position: absolute; margin-left: 340px">
                                            <a class="btn bg-gradient-dark mb-0"
                                                href="allowance-add?memberID={{ $members->memberID }} "><i
                                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New
                                                Allowance</a>
                                        </div>


                                        <h5 class="mb-0" style="color:white">
                                            {{ $members->firstname }}
                                            {{ $members->midinitial }}
                                            {{ $members->lastname }}
                                        </h5>
                                        <p class="mb-0 font-weight-normal text-m" style="color: white">
                                            {{ $members->program }}
                                            {{ $members->yearlevel }}
                                        </p>

                                    </div>
                                </div>
                                <br>

                                <form method="post" action="{{ url('/allowance?memberID=' . $members->memberID) }}">
                                    @csrf
                                    <label for="status" class="  font-weight-bolder "
                                        style="margin-left:15px; color: white">Year
                                        level:</label>
                                    <select name="year">

                                        <option value="" class=" text-m ">All Year Level</option>
                                        <option value="1st Year" @if ($year == '1st Year') selected @endif
                                            class=" text-secondary text-m ">1st Year</option>
                                        <option value="2nd Year" @if ($year == '2nd Year') selected @endif
                                            class=" text-secondary text-m ">2nd Year</option>
                                        <option value="3rd Year" @if ($year == '3rd Year') selected @endif
                                            class=" text-secondary text-m ">3rd Year</option>
                                        <option value="4th Year" @if ($year == '4th Year') selected @endif
                                            class=" text-secondary text-m ">4th Year</option>
                                    </select>
                                    <label for="status" class=" font-weight-bolder "
                                        style="margin-left: 20px; color: white">Semester:</label>
                                    <select name="sem">
                                        <option value="">All Semester</option>
                                        <option value="1st Sem" @if ($sem == '1st Sem') selected @endif
                                            class=" text-secondary text-m ">1st Sem</option>
                                        <option value="2nd Sem" @if ($sem == '2nd Sem') selected @endif
                                            class=" text-secondary text-m">2nd Sem</option>
                                    </select>
                                    <button class="btn bg-gradient-dark mb-0"
                                        style="padding:4px 8px; margin-left: 15px;" type="submit">Go</button>
                                </form>

                            </div>
                            <style>
                                .header-year,
                                .header-sem {
                                    width: 100px;
                                }

                                select {
                                    padding: 2px 4px;
                                    border: 0px;
                                    border-radius: 4px;
                                    background-color: #f9d6e2;
                                    color: black;
                                    text-align: center;
                                }

                                #stat select {
                                    -webkit-appearance: none;
                                    -moz-appearance: none;
                                    appearance: none;
                                    background-repeat: no-repeat;
                                    padding: 2px 4px;
                                    border: 0px;
                                    border-radius: 6px;
                                    background-color: #fd75a4;
                                    color: black;
                                    font-weight: bold;
                                    box-shadow: 0 2px 4px rgba(0, 0, 0.0, 0.1);
                                    transition: transform 0.1s ease;
                                    text-align: center;

                                }

                                select[name=stat]:hover {
                                    transform: scale(1.02);
                                }
                            </style>
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-xs font-weight-bolder  header-year">
                                            Year Level </th>
                                        <th class="text-center text-uppercase  text-xs font-weight-bolder  header-sem"
                                            style="padding-left:85px">Semester</th>
                                        <th style="padding-left:100px"
                                            class="text-uppercase text-secondary text-xs font-weight-bolder "> Months
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder ">
                                            Date Recieve</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder ">
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder ">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allowancesShow as $allowance)
                                        @if ($allowance->memberID == $members->memberID)
                                            <tr>
                                                <td>
                                                    <h5 class="d-flex align-items-center font-weight-bold text-sm"
                                                        style="padding-left: 20px">
                                                        {{ $allowance->yearlevel }}
                                                    </h5>
                                                </td>
                                                <td>
                                                    <h5 class="d-flex align-items-center font-weight-bold text-sm"
                                                        style="padding-left: 80px">
                                                        {{ $allowance->semester }}
                                                    </h5>
                                                </td>
                                                <td style="padding-left:90px">
                                                    <h6 class="mb-0 text-sm">
                                                        {{ $allowance->month }}
                                                    </h6>
                                                </td>

                                                <input type="hidden" name="memberID" value="">
                                                <input type="hidden" name="allowanceID" value="">
                                                <td class="align-middle text-center">
                                                    {{ $allowance->date_received }}
                                                </td>

                                                <td class="align-middle">
                                                    <a href="allowance-edit?memberID={{ $members->memberID }}&allowanceID={{ $allowance->allowanceID }} "
                                                        name="edit" class="font-weight-bold text-xs"
                                                        style="color: rgb(0, 116, 44);">
                                                        Edit
                                                    </a>
                                                </td>
                                                <form
                                                    action="{{ route('allowance.delete', ['memberID' => $allowance->memberID, 'allowanceID' => $allowance->allowanceID]) }}"
                                                    method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <td class="align-middle">
                                                        <button name="delete"
                                                            class="btn btn-link font-weight-bold text-s p-0 border-0 bg-transparent"
                                                            style="text-transform: capitalize; margin-top: 20px;">
                                                            Delete &nbsp;
                                                        </button>
                                                    </td>
                                                </form>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


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
