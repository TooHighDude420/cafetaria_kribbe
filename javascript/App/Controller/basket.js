const shoppingList = document.getElementById("cartcontainer");

var cart = new ShoppingCart();

if (sessionStorage.getItem('shoppingCart') != null) {
    cart.loadCart();
    updateCart();
}


function addToCart(value) {
    cart.addToCard(value);
    this.updateCart();
}

function removeFromCart(index) {
    cart.removeFromCart(index);
    this.updateCart();
}

function updateCart() {
    shoppingList.innerHTML = cart.updateCart();
}
