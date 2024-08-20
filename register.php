<?php
header("location: home.php");
exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="./assets/css/form.css">
</head>
<body id="body">
    <div class="form-container">
        <div class="register-form">
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
                    </label>
                </div>
                <br>
                <div>
                    <label for="email">
                        <p>email <span>*</span></p>
                        <input type="email" name="email" id="email" class="email"><div class="icon"><i class="fa fa-mail-reply"></i></div>
                    </label>
                </div>
                <button class="login-btn" type="submit">Sign up <i class="fa fa-pen"></i></button>
            </form>
            <div class="reg-btn" onclick="window.location.href='login.php'">Sign in <i class="fa fa-unlock"></i></div>
            <div class="settings" onclick="window.location.href='setting.html'">
                <i class="fa-solid fa-gear"></i>
            </div>
        </div>
    </div>
    <!-- <script src="./assets/js/theme.js"></script> -->
    <script src="./assets/js/all.min.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>
</html>
