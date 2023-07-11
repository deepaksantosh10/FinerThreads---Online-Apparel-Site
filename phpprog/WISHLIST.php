<html>
  <head>
    <link rel="stylesheet" href="product.css" />
    <link rel="stylesheet" href="app.css" />
    <link rel="stylesheet" href="wishlist.css" />

    <script src="wishlist.js"></script>
    <script src="cart.js"></script>
    <script src="woman-products.js"></script>
    <script src="men-products.js"></script>
  </head>
  <body>
  <div class="first">
  <p><img src="logo.png" style="margin-top: 15px;margin-left: 10px;height:130px;width:220px;"></p>
            <a href="ACCOUNT.php"><img src="profile1.png" style="position: relative;left: 1030px;top: -137px;"></a>
            <a href="ACCOUNT.php"><p style="position: relative;left: 1078px;top: -186px;">Account</p></a>
            <img src="line.png" style="position: relative;left: 1170px;top: -242px;">
            <a href="WISHLIST.php"><img src="wishlist.png" style="position: relative;left: 1175px;top: -238px;"></a>
            <a href="WISHLIST.php"><p style="position: relative;left: 1250px;top: -290px;">Wishlist</p></a>
            <img src="line.png" style="position: relative;left: 1340px;top: -342px;">
            <a href="cart.html"><img src="cart.png" style="position: relative;left: 1350px;top: -338px;"></a>
            <a href="cart.html"><p style="position: relative;left: 1432px;top: -388px;">Cart</p></a>
            <img src="line.png" style="position: relative;left: 1490px;top: -450px;">
            <a href="LOGOUT.php"><img src="logout.png" style="width:40px;height:40px;position: relative;left: 1500px;top: -440px;"></a>
            <a href="LOGOUT.php"><p style="position: relative;left: 1578px;top: -495px;">LOGOUT</p></a>
            <button type="button" name="HOME" style="position:relative;margin-left:880px;top: -460px;"><a href="HOME.php">HOME</a></button>
            <button type="button" name="TAILOR-MADE" style="position:relative;margin-left:20px;top: -460px;"><a href="TAILORMADE.php">TAILOR-MADE</a></button>
            <button type="button" name="OFFERS" style="position:relative;margin-left:20px;top: -460px;"><a href="OFFER.php">OFFERS</a></button>
            <button type="button" name="ABOUT US" style="position:relative;margin-left:20px;top: -460px;"><a href="ABOUTUS.php">ABOUT US</a></button>
            <button type="button" name="CONTACT US" style="position:relative;margin-left:20px;top: -460px;"><a href="CONTACT.php">CONTACT US</a></button>
            <button type="button" name="FEEDBACK" style="position:relative;margin-left:20px;top: -460px;"><a href="FEEDBACK.php">FEEDBACK</a></button>
    </div>
        
        <p style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;font-size: 30px;text-align: center;text-shadow: 4px 4px 4px rgba(0,0,0,0.59);">WISHLIST</p>
    <div>
    <center>
      <table class="cart">
        <thead>
          <tr>
            <th></th>
            <th class="tbhead" style="position: relative;left:-80px;">Product Details</th>
            <th class="tbhead" style="position: relative;left:-20px;">Price</th>
          </tr>
        </thead>
        <tbody id="wishlist"></tbody>
      </table>
      </center>
      <div id="sum" class="result"></div>
    </div>
    <div class="third">
          <p style="color: #D9CDC3;position: relative;left: 600px;top: 13px;font-size:20px;">KEEP IN TOUCH</p>
          <a href=""><img src="instagram.png" style="position: relative;left: 800px;top: -34px;"></a>
          <a href=""><img src="twitter.png" style="position: relative;left: 840px;top: -34px;"></a>
          <a href=""><img src="youtube.png" style="position: relative;left: 880px;top: -34px;"></a>
          <a href=""><img src="facebook.png" style="position: relative;left: 920px;top: -34px;"></a>
    </div>
  </body>
  <script>
    function displayWishlist() {
      // Get cart placeholder (tbody)
      let wishlistElm = document.getElementById("wishlist");
      let wishlist = getWishlist();
      wishlistElm.innerHTML = wishlist
        .map((item) => {
          return displayWishlistItem(item);
        })
        .join("");
    }

    function displayWishlistItem(item) {
      return `
              <tr>
                <td><img src='${item.img}' style='width:200px; height:200px;border: 2px solid black;margin: 5px;'></td>

                <td>
                    <div>
                      <div class="item-name"> ${item.name}</div>
                      <br>
                      <div>Size:${item.size} &emsp; Qty:${item.quantity}</div><br>
                      <div><button onclick="deleteItem('${item.product}')" style="position:relative; top: 5px;left: 2px;border: 1px solid black;">Remove</button></div><br> 
                      <div><button type="button" onclick="addItem('${item.product}', '${item.name}', ${item.price}, '${item.size}', '${item.img}')" style="position:relative; top: 5px;left: 2px;border:1px solid black;">Add to cart</button></div>
                      </div>
                </td>

                <td class="item-price">${item.price}</td>

              </tr>
           `;
    }

    // add product to cart
    function addItem(id, name, price, size, img) {
      // let sel = document.getElementById("sel-" + id);
      // let size = sel.value;
      let cartItem = {
        product: id,
        name: name,
        price: price,
        quantity: 1,
        size: size,
        img: img,
      };

      // Append cart item to cart
      let c = getCart(); // get from session/local storage
      c.push(cartItem);
      console.log(c);
      setCart(c);
    }

    function deleteItem(id) {
      let wishlist = getWishlist();

      //Remove wishlist item matching specified id
      wishlist = wishlist.filter((e) => e.product !== id);

      setWishlist(wishlist);
      displayWishlist();
    }
    displayWishlist();
  </script>
</html>
