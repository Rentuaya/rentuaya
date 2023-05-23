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
        <title>Personal Portfolio Website</title>

        <!-- Customized Css Style -->
        <link rel="stylesheet" href="css/home.css">

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
        <!-- ---------The Content----------- -->
        <div class="design">
            <!-- --------Navigators-------- -->
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
            <!-- ---------Some Text-------- -->
            <div class="txt">
                <h1>I'm Cedric <span>Rentuaya</span></h1>
                <p>This is my official Portfolio Website to show
                    <br>the details/information about myself.
                </p>
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
</html>
<?php
    }else{
        header("location: index.php");
        exit();
    }
?>