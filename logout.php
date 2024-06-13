<?php
session_start();
session_destroy();
session_abort();
header("location: login.php");
exit("you are now logout!");
?>