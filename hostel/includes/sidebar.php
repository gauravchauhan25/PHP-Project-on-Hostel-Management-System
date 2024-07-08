<?PHP if (isset($_SESSION['id'])) { ?>
    <!-- For creation of container box containing dashboard-->
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary bg-dark">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary bg-dark" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" style="font-size: 20px;" href="dashboard.php"><i class="fa fa-files"></i>
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark" />
                                    </svg>
                                    Dashboard
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" style="font-size: 20px;" href="book_hostel.php"><i class="fa fa-users"></i>
                                    <svg class="bi">
                                        <use xlink:href="#user" />
                                    </svg>
                                    Book Hostel
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" style="font-size: 20px;" href="room-details.php"><i class="fa fa-user"></i>
                                    <svg class="bi">
                                        <use xlink:href="" />
                                    </svg>
                                    Room Details
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" style="font-size: 20px;" href="my-profile.php"><i class="fa fa-user"></i>
                                    <svg class="bi">
                                        <use xlink:href="" />
                                    </svg>
                                    My profile
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" style="font-size: 20px;" href="change-password.php"><i class="fa fa-user"></i>
                                    <svg class="bi">
                                        <use xlink:href="" />
                                    </svg>
                                    Change Password
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
        </div>
    </div>
<?php } else { ?>

    <!-- For creation of container box containing dashboard-->
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary bg-dark">
                <div class="offcanvas-md offcanvas-end bg-body-tertiary bg-dark" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" style="font-size: 20px;" href="hostel.php"><i class="fa fa-files"></i>
                                    <svg class="bi">
                                        <use xlink:href="#file-earmark" />
                                    </svg>
                                    User Registration
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" style="font-size: 20px;" href="log-in.php"><i class="fa fa-users"></i>
                                    <svg class="bi">
                                        <use xlink:href="#user" />
                                    </svg>
                                    User Login
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2" style="font-size: 20px;" href="admin.php"><i class="fa fa-user"></i>
                                    <svg class="bi">
                                        <use xlink:href="" />
                                    </svg>
                                    Admin Login
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
                            <li>&nbsp;</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>