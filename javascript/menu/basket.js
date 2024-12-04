
var cart = [];
const cartContainer = document.getElementById("cartcontainer")

function getCart(){
    return cart;
}

function resetCart() {
    cart = [];
}

function addToCart(name, cost){
    cart.push([name, cost]);
}

function popCart(){
    for (var i = 0; i < cart.length; i++){
        
    }
}