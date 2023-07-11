<html>
    <head>
        <link rel="stylesheet" href="HOME.css">
        <div class="first">
            <p><img src="logo.png" style="margin-top: 15px;margin-left: 10px;height:130px;width:220px;"></p>
            <a href=""><img src="profile1.png" style="position: relative;left: 1190px;top: -136px;"></a>
            <a href=""><p style="position: relative;left: 1244px;top: -186px;">Account</p></a>
            <img src="line.png" style="position: relative;left: 1342px;top: -240px;">
            <a href="#"><img src="wishlist.png" style="position: relative;left: 1347px;top: -236px;"></a>
            <a href="#"><p style="position: relative;left: 1420px;top: -290px;">Wishlist</p></a>
            <img src="line.png" style="position: relative;left: 1510px;top: -340px;">
            <a href="#"><img src="cart.png" style="position: relative;left: 1515px;top: -338px;"></a>
            <a href="#"><p style="position: relative;left: 1600px;top: -388px;">Cart</p></a>
            <button type="button" name="HOME" style="position:relative;margin-left:760px;top: -360px;" onclick="display()"><a href="#">HOME</a></button>
            <button type="button" name="RENTAL" style="position:relative;margin-left:20px;top: -360px;"onclick="display()"><a href="#">RENTAL</a></button>
            <button type="button" name="TAILOR-MADE" style="position:relative;margin-left:20px;top: -360px;" onclick="display()"><a href="#">TAILOR-MADE</a></button>
            <button type="button" name="OFFERS" style="position:relative;margin-left:20px;top: -360px;" onclick="display()"><a href="#">OFFERS</a></button>
            <button type="button" name="ABOUT US" style="position:relative;margin-left:20px;top: -360px;" onclick="display()"><a href="#">ABOUT US</a></button>
            <button type="button" name="CONTACT US" style="position:relative;margin-left:20px;top: -360px;" onclick="display()"><a href="#">CONTACT US</a></button>
            <button type="button" name="FEEDBACK" style="position:relative;margin-left:20px;top: -360px;" onclick="display()"><a href="#">FEEDBACK</a></button>
        </div>
        <div class="second">
            <br>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 30px;text-align: center;text-shadow: 4px 4px 4px rgba(0,0,0,0.59);">Welcome to FINER THREADS!</p>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 12px;position: relative;left: 540px;top: 16px;">Already a existing user?</p>
            <a href="LOGIN.php"><button type="button" style="background-color: black;color: #D9CDC3;border-radius: 4px;position: relative;top: -25;left:695; cursor: pointer;font-size: 20px;padding: 10px;width: 125px;">LOGIN</button></a>
            <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 12px;position: relative;left: 830px;top: -64;">Create an account to explore!</p>
            <a href="SIGNUP.php"><button type="button" style="background-color: black;color: #D9CDC3;border-radius: 4px;position: relative;top: -108;left:1020; cursor: pointer;font-size: 20px;padding: 10px;width: 125px;">SIGN UP</button></a>
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
                <a href="#"><button type="button" style="background-color: black;color: #D9CDC3;border-radius: 2px;position: relative;top: 20;left: 720px; cursor: pointer;font-size: 20px;" onclick="display()">FOR HIM</button></a>
                <a href="#"><button type="button" style="background-color: black;color: #D9CDC3;border-radius: 2px;position: relative;top: 20;left: 770px; cursor: pointer;font-size: 20px;" onclick="display()">FOR HER</button></a>
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
        function display()
        {
        alert("New User?SIGN UP to continue,else SIGN IN!");
        }
        </script>
    </body>


</html>



