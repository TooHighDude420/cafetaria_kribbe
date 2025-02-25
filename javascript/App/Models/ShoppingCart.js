class ShoppingCart{
    items = [];
    totalPrice = 0;

    // Creating a custom event
    addEvent = new Event('added');
    removeEvent = new Event('removed');

    addToCard(value){
        this.items.push(value);
        // Dispatching the add event
        document.dispatchEvent(this.addEvent);
    }

    removeFromCart(index){
        this.items.splice(index);
        // Dispatching the remove event
        document.dispatchEvent(this.removeEvent);
    }

    countUnique(){
        return new Set(this.items).size;
    }

    getCart(){
        return this.items;
    }
}