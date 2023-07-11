
function loadProducts() {
    let params = new URL(document.location).searchParams;
    let type = params.get("type");
    let url =  basepath + ( type ==='men' ? '/menproducts.php' : '/womenproducts.php');

    fetch(url)
      .then(res => res.json())
      .then(out =>
        { 
          menProducts = out;  womenProducts = out;
          displayProducts();
        //console.log('Checkout this JSON! ', out);
      })
      .catch(err => { throw err });
   }
   
  // prepares item divs and injects in products div
  function displayProducts() {
    // Get prodcut type (men/women) from url
    let params = new URL(document.location).searchParams;
    let type = params.get("type");
    products = type ==="men" ? menProducts : womenProducts;

    // clone products & sort based on setting (sort = true => ascending)
    products = [...products];
    if (sort == null) {
    } else if (sort) products.sort((a, b) => a.price - b.price);
    else products.sort((a, b) => b.price - a.price);

    // Get product placeholder element
    let prdElm = document.getElementById("products");

    // Convert each product to div string and merge the strings by joining
    prdElm.innerHTML = products
      .map((item) => {
        return displayItem(item);
      })
      .join("");
  }

  //Prepare display for one product item
  function displayItem(item) {
    return `
   <div class="item" id="${item.id}">
    <img class="item-img" src=${item.img} alt="" />
    <p><b>${item.name}</b></p>
    <p>Rs. ${item.price}</p>
   <div> 
        <select id="sel-${item.id}">
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select><br><br>
          <button type="button" class="addtocart" onclick="addItem('${item.id}', '${item.name}', ${item.price}, '${item.img}')">Add to cart</button>
          <button type="button" onclick="addWishlist('${item.id}', '${item.name}', ${item.price}, '${item.img}')" style="position: relative;top:-8px;"><img src="images/wishlist.png" width="34px" height="34px" ></button>
    </div>
   </div>
   `;
  }

  // Sort selection changed => redisplay
  function sortChanged(value) {
    sort = value === "true" ? true : value === "false" ? false : null;
    displayProducts();
  }

  // add product to cart
  function addItem(id, name, price, img) {
    
    let sel = document.getElementById("sel-" + id);
    let size = sel.value;
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
    addItemToCart(c, cartItem);

    console.log(c);
    setCart(c);
  }

  function addWishlist(id, name, price, img) {
    let sel = document.getElementById("sel-" + id);
    let size = sel.value;
    let wishlistItem = {
      product: id,
      name: name,
      price: price,
      quantity: 1,
      size: size,
      img: img,
    };

    // Append wishlist item to wishlist
    let w = getWishlist(); // get from session/local storage
    w.push(wishlistItem);
    console.log(w);
    setWishlist(w);
  }