<?php include('includes/db-connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>User Registration!</title>

      
       <script src="js/color-modes.js"></script>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
      <link href="bootstrap.min.css" rel="stylesheet">

      <link rel="stylesheet" href="css/hostel-register.css">
      <link href="css/sign-in.css" rel="stylesheet">
</head>

<body>
      <header>
            <h2 class="logo">Maharaja Surajmal Institute</h2>
            <nav class="navigation">
                  <a href="index.php">Home</a>
                  <a href="about-us.php" target="_blank">About</a>
                  <a href="contact-us.php">Contact</a>

                  <!-- <button class="btnLogin-popup" href="index.php">Log In</button> -->
            </nav>
      </header>


      <div class="wrapper">
            <div class="form-box login">
                  <div class="container-fluid" style="text-align: center;">
                        <img src="img/msi.png" alt="MSI" width="130" height="130">
                  </div><br />
                  
                  <form method="post" action="register.php">
                        <div class="mb-3">
                              <label for="regno" class="form-label">Enrollment No.</label>
                              <input type="number" name="regno" class="form-control transparent-input" id="regno" required>
                        </div>

                        <div class="mb-3">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" name="name" class="form-control transparent-input" id="name">
                        </div>

                        <div class="mb-3">
                              <label for="email" class="form-label">Email Id</label>
                              <input type="text" name="email" class="form-control transparent-input" id="email" required>
                        </div>

                        <div class="mb-3">
                              <label for="password">Password</label>
                              <input type="password" name="password" class="form-control transparent-input" id="password" required>
                        </div>

                        <legend>Gender</legend>
                        <div class="form-check">
                              <input type="radio" name="gender" value="male" class="form-check-input transparent-input" id="male">
                              <label class="form-check-label" for="female">Male</label>
                        </div>

                        <div class="mb-3 form-check">
                              <input type="radio" name="gender" value="female" class="form-check-input transparent-input" id="female">
                              <label class="form-check-label" for="female">Female</label>
                        </div>


                        <!-- <div >
                              <label class="form-check-label" >Upload</label>
                        </div>

                        <div class="mb-3 form-check">
                              <input type="file" class="form-control transparent-input" name="photo" id="photo">
                        </div> -->

                        <div class="mb-3">
                              <label for="course" class="form-label">Course</label>
                              <select class="forms-select form-select-sm transparent-input" name="course" style="padding: 10px;">
                                    <option value="">Select Course</option>
                                    <?php $query = "SELECT * FROM courses";
                                    $stmt2 = $mysqli->prepare($query);
                                    $stmt2->execute();
                                    $res = $stmt2->get_result();
                                    while ($row = $res->fetch_object()) {
                                    ?>
                                          <option value="<?php echo $row->course_fn; ?>"><?php echo $row->course_fn; ?>&nbsp;&nbsp;(<?php echo $row->course_sn; ?>)</option>
                                    <?php } ?>
                              </select>
                        </div>

                        <div class="input-group">
                              <span class="input-groups-text transparent-input">Permanent Address</span>
                              <textarea class="form-control transparent-input" name="address" id="address" required></textarea>
                        </div><br>


                        <div class="mb-3">
                              <label for="mobile" class="form-label">Mobile Number</label>
                              <input type="number" name="mobile" class="form-control transparent-input" id="mobile">
                        </div>

                        <div class="mb-3" style="font-size: 17px;">
                              <div class="form-check">
                                    <input class="form-check-input transparent-input" type="checkbox" id="invalidCheck3" required>
                                    <label class="form-check-label" for="invalidCheck3">
                                          Agree to terms and conditions
                                    </label>
                              </div>
                        </div><br>

                        <div class="col-12">
                              <button class="loginBtn" type="reset" style="width: 30%;">Reset form</button>&nbsp;&nbsp;
                              <button class="loginBtn" type="submit" style="width: 30%;">Submit form</button><br /><br />
                        </div>
                  </form>
            </div>
      </div>

      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

</body>

<script src="js/bootstrap.bundle.min.js"></script>
</html>