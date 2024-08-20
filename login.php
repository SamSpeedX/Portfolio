<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'post') {
    $username = $_POST['username'];
    $password = $_POST['password'];

   if ($username == $_SESSION['username']) {
      header("location: home.php");
      exit();
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="./assets/css/form.css">
</head>
<body id="body">
    <div class="form-container">
        <div class="login-form">
            <form action="login.php" method="post" id="form">
                <h4><p>mandatory mark <span>*</span></p></h4>
                <div class="holder1">
                    <label for="username">
                        <p>username <span>*</span></p>
                        <input type="text" name="username" id="username" class="username"><div class="icon"><i class="fa fa-user"></i></div>
                    </label>
                </div>
                <br>
                <div>
                    <label for="password">
                        <p>password <span>*</span></p>
                        <input type="password" name="password" id="password" class="password"><div class="icon"><i class="fa fa-lock"></i></div>
                        <p class="forget">forget password</p>
                    </label>
                </div>
                <button class="login-btn" type="submit">Sign in <i class="fa fa-key"></i></button>
            </form>
            
            <div class="reg-btn" onclick="window.location.href='register.php'">Sign up</div>
            </div>
            <div class="settings" onclick="window.location.href='setting.html'">
                <i class="fa-solid fa-gear"></i>
            </div>
    </div>
    <script src="./assets/js/theme.js"></script>
    <script src="./assets/js/all.min.js"></script>
    
</body>
</html>
