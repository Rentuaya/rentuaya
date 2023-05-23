<?php
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['username']))
    {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Title -->
        <title>About Me</title>

        <!-- Customized Css Style -->
        <link rel="stylesheet" href="css/contact.css">

    </head>
    <style>
        nav ul li p{
            color: #dadada;
            font-weight: bold;
            text-transform: capitalize;
        }
        nav ul li p span{
            color:#fafa17;
        }
    </style>
    <body>
        <div class="contact">
            <nav>
                <a href="home.php">
                    <img src="img/logo.png" class="logo">
                </a>
                <ul>
                    <li><p>HELLO, <span><?php echo $_SESSION['username']; ?></span></p></li>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a class="logout" href="logout.php">LOGOUT</a></li>
                </ul>
            </nav>
            <!-- ---------Contact ME-------- -->
            <div class="me">
                <h1>Contact <span>ME</span></h1>
                <p>I am Cedric Caña Rentuaya. I'm currently a 2nd year student of 
                    <br>Bachelor of Science in Information Technology at Bicol University.
                    <br>This website currently I am creating and modifying shows the details
                    <br>and information of my life.
                </p>
                <div class="tab-title">
                    <p class="tab-link active-link" onclick="opentab('email')">Email Address</p>
                    <p class="tab-link" onclick="opentab('number')">Number</p>
                    <p class="tab-link" onclick="opentab('fb')">Facebook Account</p>
                </div>
                <!-- Email Address -->
                <div class="tab-content active-tab" id="email">
                    <ul>
                        <li><span>BU Email Address:</span>
                            <br>Current School: College of Science at Bicol University
                        </li>
                        <li><span>Personal Email Address:</span>
                            <br>bhemvhoy@gmail.com
                        </li>
                    </ul>
                </div>
                <!-- Number -->
                <div class="tab-content" id="number">
                    <ul>
                        <li><span>Number:</span>
                            <br>09274654590
                        </li>
                    </ul>
                </div>
                <!-- Facebook -->
                <div class="tab-content" id="fb">
                    <ul>
                        <li><span>Account: </span>
                            <br>Cedric Rentuaya
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ---------Profile Images---------- -->
            <div class="pics">
                <img src="img/bg.jpg" class="background">
                <img src="img/profile.jpg" class="profile">
            </div>
        </div>
        <!-- ---------Footer--------- -->
        <footer>
            <p>Copyright &copy; Cedric Rentuaya 2023</p>
        </footer>
    </body>
    <script>
        var tablinks = document.getElementsByClassName("tab-link");
        var tabcontents = document.getElementsByClassName("tab-content");

        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script>
</html>
<?php
    }else{
        header("location: index.php");
        exit();
    }
?>