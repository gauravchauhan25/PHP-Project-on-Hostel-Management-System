<?php include('includes/db-connect.php'); ?>

<?php
session_start();

if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $msg = $_POST['feedback'];

      $stmt = $mysqli->prepare("SELECT email  FROM feedback WHERE email=? ");
      $stmt->bind_param('s', $email);
      $stmt->execute();
      $stmt->bind_result($email);
      $rs = $stmt->fetch();


      if ($rs) {
            echo "<script>alert('You have already submitted your feedback!');</script>";
      } else {
            // echo $name;
            // echo $email;
            // echo $msg;
            $log = "insert into feedback(name, email, message) values(?,?,?)";
            $stmt = $mysqli->prepare($log);
            $rc = $stmt->bind_param('sss', $name, $email, $msg);
            $stmt->execute();

            if ($log) {
                  echo "<script>alert('Thank You for submitting your feedback!');</script>";
                  // header('location: index.php');
            }
      }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact Us</title>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

      <link rel="stylesheet" href="css/about-style.css">
      <link rel="stylesheet" href="css/contact-us.css">

</head>

<body>
      <section class="contact">
            <div class="content">
                  <h2>Contact Us</h2>
                  <p>Please fill the following feedback form for how you like our facilities and campus!</p>
                  <p>Also you can contact us at the following credentials!</p>
            </div>

            <div class="container">
                  <div class="contactInfo">
                        <div class="box">
                              <div class="icon">
                                    <b><i class="fa-solid fa-location-dot"></i></b>
                              </div>
                              <div class="text">
                                    <h4>Address</h4>
                                    <p>Maharaja Surajmal Institute <br> C-4, Janakpuri <br> Delhi - 110058, India</p><br><br>
                              </div>
                        </div>

                        <div class="box">
                              <div class="icon">
                                    <b><i class="fa-solid fa-envelope"></i></b>
                              </div>
                              <div class="text">
                                    <h3>Email</h3>
                                    <p>contact@msijanakpuri.com</p><br><br><br>
                              </div>
                        </div>

                        <div class="box">
                              <div class="icon">
                                    <b><i class="fa-solid fa-phone"></i></b>
                              </div>
                              <div class="text">
                                    <h3>Phone</h3>
                                    <p>+91 011-45656183</p>
                              </div>
                        </div>

                        <h2 class="txt">Connect with us</h2>
                        <ul class="sci">
                              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul><br>
                  </div>

                  <div class="contactForm">
                        <form action="" method="post">
                              <h2>Send Message</h2>
                              <div class="inputBox">
                                    <input type="text" name="name" required>
                                    <span>Name</span>
                              </div>

                              <div class="inputBox">
                                    <input type="email" name="email" required>
                                    <span>Email Address</span>
                              </div>

                              <div class="inputBox">
                                    <textarea name="feedback" required></textarea>
                                    <span>Type your message</span>
                              </div>

                              <div class="inputBox">
                                    <input type="submit" name="submit" value="Send">
                              </div>
                        </form>
                  </div>
            </div>
      </section>

</body>
</html>