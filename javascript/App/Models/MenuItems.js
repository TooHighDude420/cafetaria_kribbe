class MenuItems{
    naam = "";
    allergeen = "";
    prijs = 0;

    constructor(naam, allergeen, prijs){
        this.naam = naam;
        this.allergeen = allergeen;
        this.prijs = prijs;
    }

    getNaam(){
        return this.naam;
    }

    getAllergeen(){
        return this.allergeen;
    }

    getPrice(){
        return this.prijs;
    }

    getAll(){
        var all = {
            naam: this.naam,
            allergeen: this.allergeen,
            prijs: this.prijs
        };

        return all;
    }

}