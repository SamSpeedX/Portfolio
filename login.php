<?php
// @include_once 'system/config.php';
// $host = "localhost";
// $name = "root";
// $pass = "";
// $db = "sam";

// $sam = mysqli_connect('$host', '$name', '$pass', '$db');
// if (!$sam) {
//     die("fail". "<br>". mysqli_connect_error());
// }

// if ($_SERVER['REQUEST_METHOD'] === "POST") {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $sql = "SELECT * FROM users WHERE username = '$username'";
//     $result = $sam->query($sql);

//     if ($result->num_rows === 1) {
//         $row = $result->fetch_assoc();
//         if (password_verify($password, $row["password"])) {
//             // User login successful, store user data in the session
//             $_SESSION["id"] = $row["Id"];
//             $id = $_SESSION['id'];
//             $_SESSION["username"] = $row["username"]; 
//             // echo "<input type='hidden' value='$id' id='input'>";
//             header("Location: ../home.php");
//             exit();
//         } else {
//             // Incorrect password, show error message
//             $passerr = "Incorrect password! <br> Msimbo si sahihi!";
//         }
//     } else {
//         // User not found, show error message
//         $usererr = "User not found! <br> Mtumiaji hajapatikana!";
//     }
// }
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'post') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['user_id'] = $password;
    $_SESSION['username'] = $username;

    header("location: home.php");
    exit();
}
$_SESSION['username'] = "sam ochu";
$_SESSION['user_id'] = "1";
$_SESSION['email'] = "samochu@sam.com";

header("location: home.php");
exit();
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