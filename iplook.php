<?php
$ip = $_SERVER['REMOTE_ADDR'];


if ($ip == "::1") {
    echo "your ip is". $ip . "<br>your blocked";
} else {
    echo "your not blocked";
}

echo "<br>";

$n = 123;
if (strlen($n) == 3) {
    echo "your right";
} else {
    echo "you try to cheat";
}

?>