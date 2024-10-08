<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAM OCHU | SETTING</title>
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/setting.css">
    <link rel="stylesheet" href="./assets/css/all.min.css">
</head>
<body id="body">
    <div class="kati">
        <div>
            <div class="flex">
                <div class="back" id="back">Back</div>
                <div class="back" id="reset">reset</div>
            </div>
            <div class="theme" id="theme">
                <h3>Choose theme</h3>
                <div class="modal">
                    <div class="light" id="light">Light</div>
                    <div class="dark" id="dark">Dark</div>
                </div>
                <h3>Text size</h3>
                <div class="font-modal">
                    <select name="" id="font">
                        <option value="1">normal</option>
                        <option value="0.8">small</option>
                        <option value="1.5">big</option>
                    </select>
                    <br><br>
                    <button id="save">save</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/setting.js"></script>
    <script src="./assets/js/all.min.js"></script>
</body>
</html>
