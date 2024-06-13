<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAM | SIGN IN</title>
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/sign.css">
</head>
<body>
    <div class="sign-up-container">
        <form action="" method="post">
            <div class="upya">
                <div class=""></div>
                <h3>Sign in form</h3>
                <div class="">
                <a href="signup.php">Sign up</a>
                </div>
            </div>
            
            <div class="wrap">
                <label for="username">Username</label><br>
                <div class="input-box">
                    <input type="text" name="username" id="username"><i class="fa fa-user"></i>
                </div>
            </div>

            <div class="wrap">
                <label for="password">Password</label><br>
                <div class="input-box">
                    <input type="text" name="password" id="password"><span id="show"><i class="fa fa-lock"></i></span>
                </div>
            </div>
            
            <div class="action">
                <div class="remember">
                    <span>Remember me</span>
                    <input type="checkbox" name="remember" id="remember">
                </div>
                <div class="forget">
                    <a href="reset.php">Forget password</a>
                </div>
            </div>

            <button type="submit" class="btn1">Sing in</button>
            <div class=""></div>
        </form>
    </div>
    <script src="assets/js/theme.js"></script>
    <script src="./assets/js/all.min.js"></script>
</body>
</html>