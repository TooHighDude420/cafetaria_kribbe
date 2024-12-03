
var cart = [];

function getCart(){
    return cart;
}

function resetCart() {
    for (var i = 0 ; i < cart.length + 1 > 0; i++) {
        cart.pop();
    }
}

function addToCart(name, cost){
    cart.push([name, cost]);
}
