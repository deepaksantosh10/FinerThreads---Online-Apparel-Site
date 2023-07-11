// Get Cart from local storage (convert json to string and vice versa)
function getCart() {
    let cart = localStorage.getItem("cart");
    if (!cart) {
      cart = [];
      localStorage.setItem("cart", JSON.stringify(cart));
    } else {
      cart = JSON.parse(cart);
    }
    return cart;
  }
  
  // Update cart in local storage (stringify)
  function setCart(cart) {
    localStorage.setItem("cart", JSON.stringify(cart));
  }

  function addItemToCart(cart, item) {
    for (let i = 0; i < cart.length; i++) {
      let c = cart[i];
      if(c.product == item.product) 
      {if(c.size == item.size)
        {
        c.quantity += 1;
        return;
      }
    }
    }
    cart.push(item);
  }