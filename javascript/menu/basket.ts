class Cart{
    private cart: Array<[string, number]>;
    
    getCart(){
        return this.cart;
    }

    resetCart() {
        while(this.cart.length + 1 > 0){
            this.cart.pop();
        }
    }

    addToCart(name: string, cost: number){
        this.cart.push([name, cost]);
    }
}