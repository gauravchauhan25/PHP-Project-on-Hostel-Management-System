<?php include('includes/db-connect.php'); ?>

<?php
session_start();

if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $stmt = $mysqli->prepare("SELECT email,password,id FROM userregistration WHERE email=? and password=? ");
  $stmt->bind_param('ss', $email, $password);
  $stmt->execute();
  $stmt->bind_result($email, $password, $id);
  $rs = $stmt->fetch();
  $stmt->close();

  $_SESSION['id'] = $id;
  $_SESSION['login'] = $email;

  $uip = $_SERVER['REMOTE_ADDR'];
  $ldate = date('d/m/Y h:i:s', time());


  if ($rs) {
    $uid = $_SESSION['id'];
    $uemail = $_SESSION['login'];

    $log = "insert into userLog(userId,userEmail) values('$uid','$uemail')";
    $mysqli->query($log);

    if ($log) {
      header("location:dashboard.php");
    }
  } else {
    echo "<script>alert('Invalid Username/Email or password! Please try again!');</script>";
  }
}
?>

<?php include('signin.php') ?>