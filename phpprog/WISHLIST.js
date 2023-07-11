// Get Wishlist from local storage (convert json to string and vice versa)
function getWishlist() {
    let wishlist = localStorage.getItem("wishlist");
    if (!wishlist) {
      wishlist = [];
      localStorage.setItem("wishlist", JSON.stringify(wishlist));
    } else {
      wishlist = JSON.parse(wishlist);
    }
    return wishlist;
  }
  
  // Update wishlist in local storage (stringify)
  function setWishlist(wishlist) {
    localStorage.setItem("wishlist", JSON.stringify(wishlist));
  }