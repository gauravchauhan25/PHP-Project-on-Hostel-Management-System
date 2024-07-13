<?php include('includes/db-connect.php'); ?>

<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $stmt = $mysqli->prepare("SELECT email, contactNo, password FROM userregistration WHERE (email=? && contactNo=?) ");

    $stmt->bind_param('ss', $email, $contact);
    $stmt->execute();

    $stmt->bind_result( $userename, $email, $password);
    $rs = $stmt->fetch();

    if ($rs) {
        $pwd = $password;
    } else {
        echo "<script>alert('Invalid Email/Contact no or password');</script>";
    }
}
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forgot Password</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">

    <style>
        .button-btn {
            background-color: #1e6cbb;
            font-size: 15px;
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body style="font-family: 'Times New Roman', Times, serif;">

    <div class="wrapper">
        <div class="form-box login">
            <form action="" class="mt" method="post">
                <div class="container-fluid" style="text-align: center;">
                    <img src="img/msi.png" alt="MSI" width="130" height="130"><br>
                </div>

                <?php if (isset($_POST['login'])) { ?>
                    <span style="color: red; text-align: center; font-size: 18px;">Your Password is <?php echo $pwd; ?></sapn>
                    <?php }  ?>

                    <h2>Forgot Password</h2>
                    <div class="input-box">
                        <input type="email" name="email" id="email" required>
                        <label>Email address</label>
                    </div>

                    <div class="input-box">
                        <input type="text" name="contact" id="password" required>
                        <label>Contact No.</label>
                    </div>

                    <p class="register">Don't have a account?
                        <a href="hostel.php" style="text-decoration: none; color: blue;">Register</a>
                    </p>

                    <div>
                        <input type="submit" name="login" class="loginBtn" value="Forgot Password!"><br><br><br><br>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>