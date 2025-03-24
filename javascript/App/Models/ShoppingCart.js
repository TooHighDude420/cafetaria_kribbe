class ShoppingCart {
    items = [];
    totalPrice = 0.00;
    
    addToCard(value) {
        this.items.push(new MenuItems(value[0], value[1], value[2]));
        this.totalPrice += value[2];
        this.updateCart();
    }

    removeFromCart(name) {
        var index = this.convertToNameArray().indexOf(name);
        console.log(index);
        if (index > -1) {
            this.totalPrice -= this.items[index].prijs;
            this.items.splice(index, 1);
            this.updateCart();
        }
    }

    updateCart() {
        var testData = this.getSet();
        var tester;
        var size = 0;
        var returnString = "<div>";

        for (var x of testData) {
            tester = this.countItemsInArray(this.items, x);
            size = tester.length;
            returnString += "<div class='flex justify-between'><p>" + tester[0].naam + " " + size + "x €" + (size * tester[0].prijs).toFixed(2) + "<img class='size-6' src='img/letter-x.png' onclick='removeFromCart(&quot;"+tester[0].naam+"&quot;)'></p></div>";
        }

        returnString += "</div> <div><p> totaal: €" + this.totalPrice.toFixed(2) + "</p></div>";

        this.saveCart();

        return returnString;
    }

    convertToNameArray() {
        var array = [];

        for (let i = 0; i < this.items.length; i++) {
            array.push(this.items[i].naam);
        }

        return array;
    }

    getSet() {
        return new Set(this.convertToNameArray());
    }

    getCart() {
        return this.items;
    }

    emptyCart() {
        this.items = [];
        this.totalPrice = 0;
    }

    countItemsInArray(Array, search) {
        var test = [];
        test = Array.filter((item) => item.naam == search);
        return test;
    }

    saveCart(){
        sessionStorage.setItem("shoppingCart", JSON.stringify(this.items));
        sessionStorage.setItem("totalPrice", JSON.stringify(this.totalPrice));
    }

    loadCart(){
        this.items = JSON.parse(sessionStorage.getItem("shoppingCart"));
        this.totalPrice = JSON.parse(sessionStorage.getItem("totalPrice"));
    }
}