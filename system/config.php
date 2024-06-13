<?php
$conn = mysqli_connect('localhost', 'root', '', 'freelancer');
if (!$conn) {
    die("connection fail!" . "<br>" . mysqli_connect_error());
}
?>