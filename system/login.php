<?php
@include 'config.php';

if (isset($_GET['token'])) {
    $tokeni = $_GET['token'];
}

if (!isset($tokeni)) {
    header("location: ../token");
    exit();
}

function generateToken($length = 52) {
    return bin2hex(random_bytes($length));
}

$token = generateToken();

session_start();

function sanitizeInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // User login successful, store user data in the session
            $_SESSION["id"] = $row["Id"];
            $id = $_SESSION['id'];
            $_SESSION["username"] = $row["username"]; 
            echo "<input type='hidden' value='$id' id='input'>";
            header("Location: ../home?token=$token");
            exit();
        } else {
            // Incorrect password, show error message
            $passerr = "Incorrect password! <br> Msimbo si sahihi!";
        }
    } else {
        // User not found, show error message
        $usererr = "User not found! <br> Mtumiaji hajapatikana!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | error</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<a href="../registration/login">
<?php
if (isset($usererr)) {
    echo "<div class='message'>".$usererr."</div>";
}
 
if (isset($passerr)) {
    echo "<div class='message'>".$passerr."</div>";
}
?>
</a>
<button id="t">t</button>

<script>
const t = document.getElementById("t")
const input = document.getElementById("input")

input.addEventListener("change", function () {
    const id = input.value
    document.cookie = `${id}`
})

t.addEventListener("click", function () {
    const koki = document.cookie
    const m = input.value
    alert(`${m}`)
    alert(`${koki}`)
})
</script>
</body>
</html>