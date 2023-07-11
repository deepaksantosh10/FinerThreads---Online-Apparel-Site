<?php
session_start();
if(isset($_SESSION['ID']) && isset($_SESSION['Email'])){
?>
<html>
    <head>
        <link rel="stylesheet" href="HOME.css">
        <div class="first">
            <p><img src="logo.png" style="margin-top: 15px;margin-left: 10px;height:130px;width:220px;"></p>
            <a href="ACCOUNT.php"><img src="profile1.png" style="position: relative;left: 1030px;top: -137px;"></a>
            <a href="ACCOUNT.php"><p style="position: relative;left: 1078px;top: -186px;">Account</p></a>
            <img src="line.png" style="position: relative;left: 1170px;top: -240px;">
            <a href="WISHLIST.php"><img src="wishlist.png" style="position: relative;left: 1175px;top: -236px;"></a>
            <a href="WISHLIST.php"><p style="position: relative;left: 1250px;top: -285px;">Wishlist</p></a>
            <img src="line.png" style="position: relative;left: 1340px;top: -337px;">
            <a href="cart.html"><img src="cart.png" style="position: relative;left: 1350px;top: -335px;"></a>
            <a href="cart.html"><p style="position: relative;left: 1432px;top: -380px;">Cart</p></a>
            <img src="line.png" style="position: relative;left: 1490px;top: -437px;">
            <a href="LOGOUT.php"><img src="logout.png" style="width:40px;height:40px;position: relative;left: 1505px;top: -435px;"></a>
            <a href="LOGOUT.php"><p style="position: relative;left: 1580px;top: -484px;">LOGOUT</p></a>
            <button type="button" name="HOME" style="position:relative;margin-left:880px;top: -450px;"><a href="HOME.php">HOME</a></button>
            <button type="button" name="TAILOR-MADE" style="position:relative;margin-left:20px;top: -450px;"><a href="TAILORMADE.php">TAILOR-MADE</a></button>
            <button type="button" name="OFFERS" style="position:relative;margin-left:20px;top: -450px;"><a href="OFFER.php">OFFERS</a></button>
            <button type="button" name="ABOUT US" style="position:relative;margin-left:20px;top: -450px;"><a href="ABOUTUS.php">ABOUT US</a></button>
            <button type="button" name="CONTACT US" style="position:relative;margin-left:20px;top: -450px;"><a href="CONTACT.php">CONTACT US</a></button>
            <button type="button" name="FEEDBACK" style="position:relative;margin-left:20px;top: -450px;"><a href="FEEDBACK.php">FEEDBACK</a></button>
        </div>
        <div class="second">
            <br>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 20px;text-align: center;text-shadow: 4px 4px 4px rgba(0,0,0,0.59);">Hi <?php echo $_SESSION['Firstname'];?>,</p>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 30px;text-align: center;text-shadow: 4px 4px 4px rgba(0,0,0,0.59);">Welcome to FINER THREADS</p>
            <a href="PRODUCTS.html?type=men"><button type="button" style="background-color: black;color: #D9CDC3;border-radius: 2px;position: relative;top: 20;left: 730px; cursor: pointer;font-size: 20px;">FOR HIM</button></a>
            <a href="PRODUCTS.html?type=women"><button type="button" style="background-color: black;color: #D9CDC3;border-radius: 2px;position: relative;top: 20;left: 760px; cursor: pointer;font-size: 20px;">FOR HER</button></a>
            <br><br><br><br><br><br><br>
            <div class="slideshow-container" style="position: relative;top:-10px;">
                <div class="mySlides fade">
                <img src="SLIDE1.jpeg" style="width:1000px;height:500px;">
                </div>
                <div class="mySlides fade">
                <img src="SLIDE2.jpeg" style="width:1000px;height:500px;">
                </div>
                <div class="mySlides fade">
                  <img src="SLIDE3.jpeg" style="width:1000px;height:500px;">
                </div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                </div>
                <br>
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
                <hr style="color:black;size: 20px;width: 75%;">
                
        </div>
        <div class="third">
                <p style="color: #D9CDC3;position: relative;left: 600px;top: 13px;font-size:20px;">KEEP IN TOUCH</p>
                <a href=""><img src="instagram.png" style="position: relative;left: 800px;top: -34px;"></a>
                <a href=""><img src="twitter.png" style="position: relative;left: 840px;top: -34px;"></a>
                <a href=""><img src="youtube.png" style="position: relative;left: 880px;top: -34px;"></a>
                <a href=""><img src="facebook.png" style="position: relative;left: 920px;top: -34px;"></a>
        </div>
    </head>
    <body>

        <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) 
        {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) 
        {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) 
        {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) 
          {
            slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) 
          {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>
    </body>
</html>
<?php

}

?>




