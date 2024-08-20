<?php
if (isset($_SESSION['username'])) {
    header("location: home.php");
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
    <title>SAM OCHU </title>

    <script type="application/Id+json">
        {
            "@context": "https://schem.org",
            "@type": "organization",
            "name": "SAM OCHU",
            "altenateName": "SAM TECHNOLOGY",
            "url": "https://porfilio.samochu.com",
            "logo": "https://porfilio.samochu.com/assets/img/Polish_20240316_195622709.png",
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
                "https://www.instagram.com/sam.ochu"
            ]
        }
    </script>
</head>
<body id="body">
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
                    <li><a id="a" href="index.php"><i class="fa-solid fa-home"></i> <br> home</a></li>
                    <li><a id="b" href="profile.php"><i class="fa-solid fa-user"></i> <br> profile</a></li>
                    <li><a id="c" href="setting.php"><i class="fa-solid fa-gear"></i> <br> settings</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> <br> Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main id="main">
        <section id="home">
            <div class="container" id="hero">
                <div class="hero">
                    <div class="welcome container animation">WELCOME</div>
                    <div class="flex">
                        <div class="content">
                            <h2 class="animation">Hello world</h2>
                            <p class="animation">Are you looking for Electrician or Website developer for your project?</p>
                            <p class="animation">Worry out here is best place for you.</p>
                            <p class="animation">I'm Electrician and Website developer.</p>
                            <p class="animation">I'm also working with Mapozi stationary and ICT</p>
                        </div>
                        <img src="assets/img/Polish_20240316_195444935.png" class="an-picss" alt="samochu">
                    </div>
                </div>
            </div>
        </section>

        <section id="introduction">
            <div class="container">
                <div class="introduction effect">
                    <h3>Introduction</h3>
                    <p>I introduce barnd known as <b>SAM TECHNOLOGY</b>.</p>
                    <p>Is online brand deals with Website development.</p>

                    <p>We current work with our fellow Mapozi stationary and ICT At kabuku Tanga.</p>
                    <!-- <P>Mapozi Stationary and ICT</P> -->
                </div>
            </div>
        </section>
        <section id="do">
            <div class="container">
                <div class="what effect">
                    <span>
                        <h3>What I do?</h3>
                    <div class="do">
                        <div class="effect"><span><div class="box" id="box">I do Electrical installation.</div></span></div>
                        <div class="effect"><span><div class="box" id="box1">I do font end Website development</div></span></div>
                        <div class="effect"><span><div class="box" id="box2">I do back end Website development</div></span></div>
                    </div>
                </div>
                    </span>
            </div>
        </section>
        <section id="mapozi">
            <div class="mapozi-container">
                <div class="mapozi">
                    <div class="effect">
                    <span>
                        <h3>A bout Mapozi Stationary and ICT.</h3>
                    <p>Mapozi Stationary and ICT is a ICT man that can help you to fix some technical problem such as software and hardware on both Smartphone and Computer. visit our office if you get any problem.</p>
                    </span>
                    </div>
                    <div class="effect">
                    <span>
                    <div class="kontena">
                    <div class="service">
                        <h4>Mapozi Services</h4>
                        <div class="do">
                            <div class="effect"><span><div class="box" id="m1">Windows installation</div></span></div>
                            <div class="effect"><span><div class="box" id="m2">Software installation</div></span></div>
                            <div class="effect"><span><div class="box" id="m3">Flash and fomart phones</div></span></div>
                            <div class="effect"><span><div class="box" id="m4">Phone and Computer hardware repair</div></span></div>
                            <div class="effect"><span><div class="box" id="m5">prinnting and photocoppy.</div></span></div>
                        </div>
                    </div></div>
                    </div>
                    </span>
                </div>
            </div>
        </section>
        <section id="plan">
            <div class="container">
                <div class="plan effect">
                    <span>
                        <h3>My goal</h3>
                    <div class="flexers">
                        <img src="assets/img/Polish_20240316_195337015.png" alt="sam ochu">
                        <div class="content">
                            <p class="animation"><li>To make big Website system for local freelancers</li></p>
                            <p class="animation"><li>To start domain seller company</li></p>
                        </div>
                    </div>
                    <div class="flexers">
                        <button class="donate">Donate</button>
                        <button class="contribute">contribute</button>
                    </div>
                    </span>
                </div>
            </div>
        </section>
        <section id="info" class="flexers">
                <div class="container">
                    <div class="location effect">
                        <span>
                            <h2>Location</h2>
                            <p>Now I'm located at Kabuku Tanga Tanzania.</p>
                        </span>
                    </div>
                </div>
                <div class="container">
                    <div class="office effect">
                        <span>
                            <h2>Our office</h2>
                            <p>I'm current work with Mapozi ICT at Kabuku.</p>
                        </span>
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
            <p>2023 - 2024&copy; SAM OCHU | Power by <a href="http://samtechnology.koyeb.app/" target="_blank" rel="noopener noreferrer">SAM OCHU</a></p>
        </div>
    </footer>
    <!-- <script src="assets/js/theme.js"></script> -->

    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme.js"></script>

    <script src="assets/js/all.min.js"></script>
</body>
</html>
