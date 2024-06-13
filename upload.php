<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // header("location: login.php");
    // exit();
}

@include 'config.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user_id = $_SESSION['user_id'];
    $p_price = $_POST['img'];
    $p_image = $_FILES['img']['name'];
    $p_image_tmp_name = $_FILES['img']['tmp_name'];
    $p_image_folder = './profile/'.$p_image;
 
    $insert_query = mysqli_query($conn, "INSERT INTO `news`(propic) VALUES('$p_image') WHERE Id= 'p_price'") or die('query failed');
 
    if($insert_query){
       move_uploaded_file($p_image_tmp_name, $p_image_folder);
       $message[] = "Photo uploaded succesfully!";
    }else{
       $message[] = "Photo not uploaded try again!";
    }
 };
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/Polish_20240316_195622709.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/upload.css">
    <link rel="stylesheet" href="./assets/css/profile.css">
    <title>SAM OCHU </title>

    <script type="application/Id+json">
        {
            "@context": "https://schem.org",
            "@type": "organization",
            "name": "SAM OCHU",
            "altenateName": "SAM TECHNOLOGY",
            "url": "https://portfilio.samochu.com",
            "logo": "https://portfilio.samochu.com/assets/img/Polish_20240316_195622709.png",
            "description": "I'm sam ochu Electrician and Website developer from Tanzania.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Tanga-Tanzania",
                "addressRegion": "Tanga",
                "address": "Tanzania"
            },
        
            "contactPoint": {
                "@type": "contactPoint",
                "telephone": "+255699722149",
                "contactType": "Phone"
            },
        
            "sameAs": [
                "https://web.facebook.com/samochuu",
                "https://www.instagram.com/sam.ochu",
                "https://www.tiktok.com/sam_ochu"
            ]
        }
    </script>
</head>
<body id="body">
    <div class="container" id="offline">
        <div class="offline">
            <h2>Offline</h2>
            <p>Sorry you can't access this page offline</p>
        </div>
    </div>
    <header id="header">
        <div class="flexe">
            <div class="logo"><img src="assets/img/Polish_20240316_195622709.png" alt=""></div>
            <div class="contacts">support</div>
            <div class="menu" id="menu"><i class="fa-solid fa-bars"></i></div>
        </div>
        <nav id="nav">
            <div class="content" id="modal">
                <span class="close" id="close">&times;</span>
                <ul>
                    <li><a id="a" href="index.html#hero"><i class="fa-solid fa-home"></i> <br> home</a></li>
                    <li><a id="b" href="profile.html"><i class="fa-solid fa-user"></i> <br> profile</a></li>
                    <li><a id="c" href="setting.html"><i class="fa-solid fa-gear"></i> <br> settings</a></li>
                    <li><a href="logout.php"></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main id="main">
        <section class="containers">
            <div class="upload">
            <from action="upload.php" method="post" enctype="multipart/form-data">
            <img src="./system/profile/demo.jpg" class="loders" id="pro-pic" alt=""><br>
                <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg, image/pdf" class="picha" id="upload">
                <br>
                <button type="submit" name="add_pic" class="upload-btn"><i class="fa fa-upload"></i> Upload</button>
            </from>
            </div>
        </section>
     <script>
        const img = document.querySelector(".loders");
        input = document.querySelector(".picha");

        input.addEventListener("change", () => {
            img.src = URL.createObjectURL(input.files[0]);
        })
    </script>
    </main>
    <footer id="footer">
        <div class="flexers">
            <div class="social">
                <div class=""><h3>social media</h3></div>
                <div class="link">
                    <a href="https://wa.me/255699722149" target="_blank">
                        <div class="whatsapp">
                        <i class="fab fa-whatsapp"></i>
                        </div>
                    </a>
        
                    <a href="https://instagram/sam.ochu" target="_blank">
                        <div class="instagram">
                        <i class="fab fa-instagram"></i>
                        </div>
                    </a>
        
                    <a href="https://web.facebook.com/samochuu" target="_blank">
                        <div class="facebook">
                        <i class="fab fa-facebook"></i>
                        </div>
                    </a>
    
                    <a href="https://web.facebook.com/sam_ochu" target="_blank">
                        <div class="tiktok">
                        <i class="fab fa-tiktok"></i>
                        </div>
                    </a>
                </div>
            </div>
                <div class="subscription">
                    <h3>News letter</h3>
                    <div class="flex">
                        <input type="email" name="email" id="email" placeholder="subcribe to our News">
                        <button class="subcribe">subscribe</button>
                    </div>
                </div>
                <div class="condition">
                    <h3>Condition</h3>
                    <a href="terms.html" target="_blank">Terms and Privacy police</a>
                </div>
        </div>
        <div class="container">
            <div class="day-hour">
                <h2>work days and hours</h2>
                <div class="day-hours">
                    <ul>
                        <li>Monday</li>
                        <li>Tuesday</li>
                        <li>Wesday</li>
                        <li>Thusday</li>
                        <li>Friyday</li>
                        <li>Sataday</li>
                        <li>Sunday</li>
                    </ul>

                    <ul>
                        <li>8:00 am to 9:00 pm</li>
                        <li>8:00 am to 9:00 pm</li>
                        <li>8:00 am to 9:00 pm</li>
                        <li>8:00 am to 9:00 pm</li>
                        <li>8:00 am to 9:00 pm</li>
                        <li class="funga">Closed</li>
                        <li>9:00 am to 9:00 pm</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy">
            <p>2023 - 2024&copy; SAM OCHU | Power by <a href="http://samochu.com" target="_blank" rel="noopener noreferrer">SAM HOST</a></p>
        </div>
    </footer>
    <script src="assets/js/theme.js"></script>
   
    <script src="assets/js/script.js"></script>
    <script src="assets/js/all.min.js"></script>
</body>
</html>