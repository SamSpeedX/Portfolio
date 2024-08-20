<?php
$ip = $_SERVER['REMOTE_ADDR'];

session_start();

if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
    exit;
}
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
            <div class="contacts" onclick="window.location.href='support.html'">support</div>
            <div class="menu" id="menu"><i class="fa-solid fa-bars"></i></div>
        </div>
        <nav id="nav">
            <div class="content" id="modal">
                <span class="close" id="close">&times;</span>
                <ul>
                    <li><a id="a" href="home.php"><i class="fa-solid fa-home"></i> <br> home</a></li>
                    <li><a id="b" href="profile.php"><i class="fa-solid fa-user"></i> <br> profile</a></li>
                    <li><a id="c" href="setting.html"><i class="fa-solid fa-gear"></i> <br> settings</a></li>
                    <li><a href="logout.php" id="logout"><i class="fa fa-sign-out"></i> <br> Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main id="main">
        <section id="container">
            <div class="containers">
                <div class="profile">
                    <img src="./assets/img/Polish_20240316_195337015.png" class="logo" alt="profile-pic">
                    <div class="edit" onclick="window.location.href='upload.php'"><i class="fa fa-pen"></i></div>
                    <div class="jina" id="user"><?php echo $_SESSION['username']; ?></div>
                    <div class="email"><?php echo $_SESSION['email']; ?></div>
                    <div class="ip">IP: <?php echo $ip; ?></div>
                    <div class="action-btns">
                        <button class="reset" onclick="window.location.href='reset.php'">reset password <i class="fa fa-edit"></i></button>
                        <button class="logout" onclick="window.location.href='logout.php'">logout <i class="fa fa-sign-out"></i></button>
                    </div>
                </div>
            </div>
        </section>
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
    <!-- <script src="assets/js/profile.js"></script> -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme.js"></script>

    <script src="assets/js/all.min.js"></script>
</body>
</html>
