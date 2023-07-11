<html>
  <head>
    <title>Finer Threads</title>
    <link rel="stylesheet" href="PRODUCTS.css" />
    <link rel ="stylesheet" href="PRODUCT1.css">
    <style></style>
    <script src="cart.js"></script>
    <script src="wishlist.js"></script>
    <script src="woman-products.js"></script>
    <script src="men-products.js"></script>
    <script src="products.js"></script>
  </head>

  <body>
    <div class="first">
    <p><img src="logo.png" style="margin-top: 15px;margin-left: 10px;height:130px;width:220px;"></p>
            <a href="ACCOUNT.php"><img src="profile1.png" style="position: relative;left: 1190px;top: -136px;"></a>
            <a href="ACCOUNT.php"><p style="position: relative;left: 1244px;top: -186px;">Account</p></a>
            <img src="line.png" style="position: relative;left: 1342px;top: -240px;">
            <a href="WISHLIST.php"><img src="wishlist.png" style="position: relative;left: 1347px;top: -236px;"></a>
            <a href="WISHLIST.php"><p style="position: relative;left: 1420px;top: -290px;">Wishlist</p></a>
            <img src="line.png" style="position: relative;left: 1510px;top: -340px;">
            <a href="cart.html"><img src="cart.png" style="position: relative;left: 1515px;top: -338px;"></a>
            <a href="cart.html"><p style="position: relative;left: 1600px;top: -388px;">Cart</p></a>
            <button type="button" name="HOME" style="position:relative;margin-left:880px;top: -360px;"><a href="HOME.php">HOME</a></button>
            <button type="button" name="TAILOR-MADE" style="position:relative;margin-left:20px;top: -360px;"><a href="TAILORMADE.php">TAILOR-MADE</a></button>
            <button type="button" name="OFFERS" style="position:relative;margin-left:20px;top: -360px;"><a href="OFFER.php">OFFERS</a></button>
            <button type="button" name="ABOUT US" style="position:relative;margin-left:20px;top: -360px;"><a href="ABOUTUS.php">ABOUT US</a></button>
            <button type="button" name="CONTACT US" style="position:relative;margin-left:20px;top: -360px;"><a href="CONTACT.php">CONTACT US</a></button>
            <button type="button" name="FEEDBACK" style="position:relative;margin-left:20px;top: -360px;"><a href="FEEDBACK.php">FEEDBACK</a></button>
    <br />
    <h3></h3>
    <div style="align-content: left">
      <select style="text-align: right" onchange="sortChanged(this.value)">
        <option style="font-weight: bold" value="">Sort By</option>
        <option value="true">Price Low to High</option>
        <option value="false">Price High to Low</option>
      </select>
    </div>
    <!-- Placeholder for injecting product divs -->
    <div id="products" class="products"></div>
    <div class="third">
      <p style="color: #D9CDC3;position: relative;left: 600px;top: 13px;font-size:20px;">KEEP IN TOUCH</p>
      <a href=""><img src="instagram.png" style="position: relative;left: 800px;top: -34px;"></a>
      <a href=""><img src="twitter.png" style="position: relative;left: 840px;top: -34px;"></a>
      <a href=""><img src="youtube.png" style="position: relative;left: 880px;top: -34px;"></a>
      <a href=""><img src="facebook.png" style="position: relative;left: 920px;top: -34px;"></a>
    </div>
  </body>


  <script defer>
    let sort = null; // true -> ascending
    let basepath = 'http://localhost/phpprog/';
    loadProducts();
    displayProducts();
  </script>
</html>