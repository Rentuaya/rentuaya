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
        <link rel="stylesheet" href="css/gallery.css">

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
            <!-- Pictures HERE! -->
            <div class="picture">
                <h1>GALLE<span>R</span>Y</h1>
                <h2>Photos</h2>
                <h3>Profile Photos</h3>
                <ul>
                    <li>
                        <img src="img/profile1.jpg" id="profile1" alt="Profile 1">
                    </li>
                    <li>
                        <img src="img/profile2.jpg" id="profile2" alt="Profile 2">
                    </li>
                    <li>
                        <img src="img/profile.jpg" id="profile3" alt="Profile 3">
                    </li>
                </ul>

                <h3>Random Photos</h3>
                <ul>
                    <li>
                        <img src="img/pic1.jpg" id="myImg" alt="Cover Photo">
                    </li>
                    <li>
                        <img src="img/pic2.jpg" id="myImg1" alt="Random Photo">
                    </li>
                    <li>
                        <img src="img/pic3.jpg" id="myImg2" alt="Random Photo">
                    </li>
                    <li>
                        <img src="img/pic4.jpg" id="myImg3" alt="Random Photo">
                    </li>
                    <li>
                        <img src="img/random1.jpeg" id="myImg4" alt="Random Photo">
                    </li>
                    <li>
                        <img src="img/random2.jpeg" id="myImg5" alt="Random Photo">
                    </li>
                    <li>
                        <img src="img/random3.jpeg" id="myImg6" alt="Random Photo">
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="img/random4.jpeg" id="myImg7" alt="Random Photo">
                    </li>
                    <li>
                        <img src="img/random5.jpeg" id="myImg8" alt="Random Photo">
                    </li>
                    <li>
                        <img src="img/random6.jpeg" id="myImg9" alt="Random Photo">
                    </li>
                    <li>
                        <img src="img/random7.jpeg" id="myImg10" alt="Random Photo">
                    </li>
                    <li>
                        <img src="img/random8.jpeg" id="myImg11" alt="Random Photo">
                    </li>
                    <li>
                        <img src="img/random9.jpeg" id="myImg12" alt="Random Photo">
                    </li>
                    <li>
                        <img src="img/random10.jpeg" id="myImg13" alt="Random Photo">
                    </li>
                </ul>

                <h3>PE Photos</h3>
                <ul>
                    <li>
                        <img src="img/PE1.jpeg" id="pe1" alt="PE Photo">
                    </li>
                    <li>
                        <img src="img/PE2.jpeg" id="pe2" alt="PE Photo">
                    </li>
                    <li>
                        <img src="img/PE3.jpeg" id="pe3" alt="PE Photo">
                    </li>
                    <li>
                        <img src="img/PE4.jpeg" id="pe4" alt="PE Photo">
                    </li>
                    <li>
                        <img src="img/PE5.jpeg" id="pe5" alt="PE Photo">
                    </li>
                    <li>
                        <img src="img/PE6.jpeg" id="pe6" alt="PE Photo">
                    </li>
                    <li>
                        <img src="img/PE7.jpeg" id="pe7" alt="PE Photo">
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="img/PE8.jpeg" id="pe8" alt="PE Photo">
                    </li>
                    <li>
                        <img src="img/PE9.jpeg" id="pe9" alt="PE Photo">
                    </li>
                    <li>
                        <img src="img/PE10.jpeg" id="pe10" alt="PE Photo">
                    </li>
                    <li>
                        <img src="img/PE11.jpeg" id="pe11" alt="PE Photo">
                    </li>
                    <li>
                        <img src="img/PE12.jpeg" id="pe12" alt="PE Photo">
                    </li>
                    <li>
                        <img src="img/PE13.jpeg" id="pe13" alt="PE Photo">
                    </li>
                    <li>
                        <img src="img/PE14.jpeg" id="pe14" alt="PE Photo">
                    </li>
                </ul>
                <br><br><br><br><br><br><br>
            </div>
        </div>
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
        <!-- ---------Footer--------- -->
        <footer>
            <p>Copyright &copy; Cedric Rentuaya 2023</p>
        </footer>
    </body>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var prof1 = document.getElementById("profile1");
        var prof2 = document.getElementById("profile2");
        var prof3 = document.getElementById("profile3");

        var img = document.getElementById("myImg");
        var img1 = document.getElementById("myImg1");
        var img2 = document.getElementById("myImg2");
        var img3 = document.getElementById("myImg3");
        var img4 = document.getElementById("myImg4");
        var img5 = document.getElementById("myImg5");
        var img6 = document.getElementById("myImg6");
        var img7 = document.getElementById("myImg7");
        var img8 = document.getElementById("myImg8");
        var img9 = document.getElementById("myImg9");
        var img10 = document.getElementById("myImg10");
        var img11 = document.getElementById("myImg11");
        var img12 = document.getElementById("myImg12");
        var img13 = document.getElementById("myImg13");

        var pe1 = document.getElementById("pe1");
        var pe2 = document.getElementById("pe2");
        var pe3 = document.getElementById("pe3");
        var pe4 = document.getElementById("pe4");
        var pe5 = document.getElementById("pe5");
        var pe6 = document.getElementById("pe6");
        var pe7 = document.getElementById("pe7");
        var pe8 = document.getElementById("pe8");
        var pe9 = document.getElementById("pe9");
        var pe10 = document.getElementById("pe10");
        var pe11 = document.getElementById("pe11");
        var pe12 = document.getElementById("pe12");
        var pe13 = document.getElementById("pe13");
        var pe14 = document.getElementById("pe14");

        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");

        prof1.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        prof2.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        prof3.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img1.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img2.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img3.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img4.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img5.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img6.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img7.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img8.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img9.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img10.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img11.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img12.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        img13.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        
        pe1.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe2.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe3.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe4.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe5.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe6.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe7.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe8.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe9.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe10.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe11.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe12.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe13.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        pe14.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
    </script>
</html>
<?php
    }else{
        header("location: index.php");
        exit();
    }
?>