<?php include('includes/db-connect.php'); ?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <head>
    <title>Dashboard</title>

    <script src="js/color-modes.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sign-in.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/dashboard.css">

    <style>
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
    </style>
  </head>


<body style="font-family: 'Times New Roman', Times, serif;">

  <?php include('includes/logo.php'); ?>

  <!-- Navbar and dashboard -->
  <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-lg me-0 px-3 text-white font" href="#">Hostel Management System</a>

    <ul class="navbar-nav flex-row d-md-none">
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="bi">
            <use xlink:href="#list" />
          </svg>
        </button>
      </li>
    </ul>
<!-- 
    <div id="navbarSearch" class="navbar-search w-100 collapse">
      <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div> -->
  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">

          <div class="offcanvas-header">
            <h2 class="offcanvas-title font" id="sidebarMenuLabel">Hostel Management System</h5>

              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
          </div>
          
            <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto sidebar">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 color active" href="dashboard.php">
                  <span class="material-icons-sharp"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0d6efd">
                      <path d="M120-520v-320h320v320H120Zm0 400v-320h320v320H120Zm400-400v-320h320v320H520Zm0 400v-320h320v320H520ZM200-600h160v-160H200v160Zm400 0h160v-160H600v160Zm0 400h160v-160H600v160Zm-400 0h160v-160H200v160Zm400-400Zm0 240Zm-240 0Zm0-240Z" />
                    </svg></span>
                  Dashboard
                </a>

              </li>

              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 color" href="book_hostel.php">
                  <span class="material-icons-sharp"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0d6efd">
                      <path d="M560-564v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-600q-38 0-73 9.5T560-564Zm0 220v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-380q-38 0-73 9t-67 27Zm0-110v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-490q-38 0-73 9.5T560-454ZM260-320q47 0 91.5 10.5T440-278v-394q-41-24-87-36t-93-12q-36 0-71.5 7T120-692v396q35-12 69.5-18t70.5-6Zm260 42q44-21 88.5-31.5T700-320q36 0 70.5 6t69.5 18v-396q-33-14-68.5-21t-71.5-7q-47 0-93 12t-87 36v394Zm-40 118q-48-38-104-59t-116-21q-42 0-82.5 11T100-198q-21 11-40.5-1T40-234v-482q0-11 5.5-21T62-752q46-24 96-36t102-12q58 0 113.5 15T480-740q51-30 106.5-45T700-800q52 0 102 12t96 36q11 5 16.5 15t5.5 21v482q0 23-19.5 35t-40.5 1q-37-20-77.5-31T700-240q-60 0-116 21t-104 59ZM280-494Z" />
                    </svg></span>
                  Book Hostel
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 color" href="room-details.php">
                  <span class="material-icons-sharp"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0d6efd">
                      <path d="M120-120v-80h80v-640h400v40h160v240h-80v-160h-80v240h-80v-280H280v560h200v80H120Zm560 40-12-60q-12-5-22.5-11T625-165l-58 20-40-69 45-40q-2-15-2-25.5t2-25.5l-45-40 40-69 58 20q10-8 20.5-14.5T668-420l12-60h80l12 60q12 5 22.5 11t20.5 14l58-20 40 69-45 40q2 15 2 25.5t-2 25.5l45 40-40 69-58-19q-10 8-20.5 14T772-140l-12 60h-80Zm40-120q33 0 56.5-23.5T800-280q0-33-23.5-56.5T720-360q-33 0-56.5 23.5T640-280q0 33 23.5 56.5T720-200ZM440-440q-17 0-28.5-11.5T400-480q0-17 11.5-28.5T440-520q17 0 28.5 11.5T480-480q0 17-11.5 28.5T440-440ZM280-200v-560 560Z" />
                    </svg></span>
                  Room Details
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 color" href="change-password.php">
                  <span class="material-icons-sharp"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0d6efd">
                      <path d="M520-120q-74 0-138.5-27.5T268-223l57-57q38 37 88 58.5T520-200q116 0 198-82t82-198q0-116-82-198t-198-82q-116 0-198 82t-82 198v7l73-73 57 56-170 170L30-490l57-56 73 74v-8q0-75 28.5-140.5t77-114q48.5-48.5 114-77T520-840q75 0 140.5 28.5t114 77q48.5 48.5 77 114T880-480q0 150-105 255T520-120Zm-80-200q-17 0-28.5-11.5T400-360v-120q0-17 11.5-28.5T440-520v-40q0-33 23.5-56.5T520-640q33 0 56.5 23.5T600-560v40q17 0 28.5 11.5T640-480v120q0 17-11.5 28.5T600-320H440Zm40-200h80v-40q0-17-11.5-28.5T520-600q-17 0-28.5 11.5T480-560v40Z" />
                    </svg></span>
                  Change Password
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 color" href="my-profile.php">
                <span class="material-icons-sharp"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0d6efd"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg></span>
                  My profile
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 color" href="about-us.php">
                  <span class="material-icons-sharp"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0d6efd"><path d="M440-280h80v-240h-80v240Zm40-320q17 0 28.5-11.5T520-640q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640q0 17 11.5 28.5T480-600Zm0 520q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg></span>
                  About Us
                </a>
              </li>

              
              <li class="nav-item logout">
                <a class="nav-link d-flex align-items-center gap-2 color" href="logout.php">
                  <span class="material-icons-sharp"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#0d6efd">
                      <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z" />
                    </svg></span>
                  Log Out
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>


      <!--For creating dashboard info  -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="panel panel-default">
                        <div class="panel-body bk-primary text-light">
                          <div class="stat-panel text-center">
                            <div class="stat-panel-number h1 ">My Profile</div>
                          </div>
                        </div>

                        <a href="my-profile.php" class="block-anchor panel-footer text-center">Full Detail <i class="fa fa-arrow-right"></i></a>

                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="panel panel-default">
                        <div class="panel-body bk-success text-light">
                          <div class="stat-panel text-center">

                            <div class="stat-panel-number h1 ">My Room</div>

                          </div>
                        </div>
                        <a href="room-details.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <canvas class="my-4 w-100" id="myChart" width="900" height="250"></canvas>

        <?php include('includes/theme.php'); ?>


</body>
<script src="js/bootstrap.bundle.min.js"></script>

</html>