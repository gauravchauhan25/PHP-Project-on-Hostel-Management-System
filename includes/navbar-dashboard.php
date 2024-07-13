<?php
$server = "localhost";
$userename = "root";
$password = "";
$database = "project";
$mysqli = new mysqli($server, $userename, $password, $database);
?>

<link rel="stylesheet" href="css/navbars-offcanvas.css">

<!-- Creation of offcanvas navbar -->
<nav class="navbar navbar-dark bg-dark shadow sticky-top" aria-label="Dark offcanvas navbar">
    <div class="container-fluid">
        <a class="nav-link active" href="#" style="font-size: 23px; color: #ffffff;">Maharaja Surajmal Institute</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel" style="font-size: 19px;">
            <div class="offcanvas-header">

                <?php
                $aid = $_SESSION['id'];
                $udate = date('d-m-Y h:i:s', time());
                $ret = "select * from userregistration where id=?";
                $stmt = $mysqli->prepare($ret);
                $stmt->bind_param('i', $aid);
                $stmt->execute(); //ok
                $res = $stmt->get_result();

                if ($row = $res->fetch_object()) { ?><br>
                    <div class="container marketing">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/ts-avatar.jpg" class="bd-placeholder-img rounded-circle" width="90" height="90">
                                <a class="nav-link active" href="my-profile.php" style="font-size: 23px;">Hi, <?php echo $row->name; ?></a>
                            <?php } ?>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>

                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="www.msijanakpuri.com">
                                            <svg class="bi">
                                                <use xlink:href="#house-fill" />
                                            </svg> Home
                                        </a>
                                    </li>

                                    <li class="nav-item active">
                                        <a class="nav-link active d-flex align-items-center gap-2" href="book_hostel.php" style="font-size: 20px;">
                                            <svg class="bi">
                                                <use xlink:href="#file-earmark" />
                                            </svg>
                                            Book Hostel
                                        </a>
                                    </li>

                                    <a class="nav-link dropdown-toggle active" href="my-profile.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg class="bi">
                                            <use xlink:href="#people" />
                                        </svg>
                                        My Profile
                                    </a>

                                    <ul class="dropdown-menu" style="font-size: 17px;">
                                        <li><a class="dropdown-item" href="room-details.php">Room Details</a></li>
                                        <li><a class="dropdown-item" href="change-password.php">Change Password</a></li>
                                        <li><a class="dropdown-item" href="#">User Log</a></li>
                                    </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" href="about-us.php">About Us</a>
                                    </li>&nbsp;&nbsp;

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                </ul>

                                <div class="d-lg-flex col-lg-3 justify-content-lg">
                                    <a class="btn btn-primary" href="logout.php" role="button" style="font-family: 'Times New Roman', Times, serif; width: 70px; font-size: 16px; ">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</nav>

<!-- Normal Navbar -->
<!-- <header data-bs-theme="dark" style="font-size: 20px; ">
        <nav class="navbar navbar-expand-md bg-body-tertiary navbar-dark fixed-top  bg-dark shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="about-us.php">Maharaja Surajmal Institute</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="www.msijanakpuri.com">
                                <svg class="bi">
                                    <use xlink:href="#house-fill" />
                                </svg> Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">My Profile</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="room-details.php">Room Details</a></li>
                                <li><a class="dropdown-item" href="change-password.php">Change Password</a></li>
                                <li><a class="dropdown-item" href="#">User Log</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="about-us.php">About Us</a>
                        </li>&nbsp;&nbsp;
                    </ul>

                    <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                        <a class="btn btn-primary" href="logout.php" role="button" style="font-family: 'Times New Roman', Times, serif; width: 70px; font-size: 16px; ">Logout</a>
                    </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
     -->


<?php include('logo.php'); ?>

<div class="container-fluid" style="font-size: 17px;">
    <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="dashboard.php" style="font-size: 20px;">
                                <svg class="bi">
                                    <use xlink:href="#house-fill" />
                                </svg>
                                Dashboard
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="book_hostel.php" style="font-size: 20px;">
                                <svg class="bi">
                                    <use xlink:href="#file-earmark" />
                                </svg>
                                Book Hostel
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="room-details.php" style="font-size: 20px;" s>
                                <svg class="bi">
                                    <use xlink:href="#graph-up" />
                                </svg>
                                Room Details
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="my-profile.php" style="font-size: 20px;">
                                <svg class="bi">
                                    <use xlink:href="#people" />
                                </svg>
                                My profile
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2" href="change-password.php" style="font-size: 20px;">
                                <svg class="bi">
                                    <use xlink:href="#file-earmark-text" />
                                </svg>
                                Change password
                            </a>
                        </li>

                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                    </ul>
                </div>
            </div>
        </div>