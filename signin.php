<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Log In</title>
      
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
      <header>
            <h2 class="logo">Maharaja Surajmal Institute</h2>
            <nav class="navigation">
                  <a href="#">Home</a>
                  <a href="about-us.php" target="_blank">About</a>
                  <a href="contact-us.php" target="_blank">Contact</a>

                  <button class="btnLogin-popup" href="signin.php">Log In</button>
            </nav>
      </header>


      
      <div class="wrapper">
            <div class="form-box login">                  
                  <form action="log-in.php" method="post">
                        <div class="container-fluid" style="text-align: center;">
                              <img src="img/msi.png" alt="MSI" width="130" height="130"><br />
                        </div>
                        
                        <h2>Please log in</h2>

                        <div class="input-box" >
                              <span class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                              </span>
                              <input type="email" name="email" id="email" required>
                              <label>Email address</label>
                        </div>

                        <div class="input-box">
                              <span class="icon">
                                    
                              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000009"><path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z"/></svg>
                              </span>
                              <input type="password" name="password"  id="password" required>
                              <label>Password</label>
                        </div>

                        <p class="register">Don't have a account?
                              <a href="hostel.php" style="text-decoration: none;" >Register</a>
                        </p><br>

                        <button class="loginBtn" type="submit" action="submit()">Log
                              in</button><br><br>

                        <div class="remember-forgot">
                              <a href="forgot_password.php">Forgot Password?</a>
                        </div>
                        <br><br>
                  </form>
            </div>
      </div>

      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      
</body>

</html>