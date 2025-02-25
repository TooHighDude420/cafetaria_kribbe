var cart = new ShoppingCart();
cart.addToCard(new MenuItems('naam', 'allergeen', 'path', 'categorie', 10));
cart.removeFromCart(0);
var testRes = cart.getCart();

// Listening for the custom event
document.addEventListener('added', () => {
  console.log('Custom added triggered');
});

document.addEventListener('removed', () => {
    console.log('Custom removed triggered');
});

function addToCart(value){
    cart.addToCard(value);
}

function removeFromCart(index){
    cart.removeFromCart(index);
}

function updateCart(){
    
}
