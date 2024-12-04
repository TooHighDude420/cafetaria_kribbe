
var cart = [];
var i = 0;
const cartContainer  = document.getElementById("cartcontainer");


function getCart(){
    alert("cart");
    return cart;
}

function resetCart() {
    cart = [];
}

function addToCart(name, disc, cost){
    cart.push([name, disc, cost]);
    var temp = Object.assign(document.createElement("div"), {className: "block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow"});
    var title = Object.assign(document.createElement("h5"), {className: "mb-2 text-2xl font-bold tracking-tight text-gray-900"});
    var discription = Object.assign(document.createElement("p"), {className: "font-normal text-gray-700"});
    var price = Object.assign(document.createElement("p"), {className: "font-normal text-gray-700"});

    temp.id = "cart-item-" + i;
    temp.setAttribute("onclick", "removeFromCart('cart-item-"+ i +"')")

    title.innerHTML = name;
    discription.innerHTML = disc;
    price.innerHTML = "$" + cost;

    cartContainer.append(temp);
    temp.append(title);
    title.append(discription);
    discription.append(price);
    i++;
}

function removeFromCart(id, name, dis, cost){
    var elToDel = document.getElementById(id);
    var index = cart.indexOf(name);
    cart.splice(index, 1);
    elToDel.remove();
}

// function popCart(){
//     for (var i = 0; i < cart.length; i++){
//         var temp = Object.assign(document.createElement("div"), {className: "block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow"});
//         var title = Object.assign(document.createElement("h5"), {className: "mb-2 text-2xl font-bold tracking-tight text-gray-900"});
//         var discription = Object.assign(document.createElement("p"), {className: "font-normal text-gray-700"});
//         var price = Object.assign(document.createElement("p"), {className: "font-normal text-gray-700"});

//         temp.id = "cart-item-" + i;
//         title.innerHTML = cart[i][0];
//         discription.innerHTML = cart[i][1];
//         price.innerHTML = "$" + cart[i][2];

//         cartContainer.append(temp);
//         temp.append(title);
//         title.append(discription);
//         discription.append(price);
//     }
// }