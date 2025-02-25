class MenuItems{
    naam = "";
    allergeen = "";
    img_path = "";
    categorie = "";
    prijs = 0;

    constructor(naam, allergeen, img_path, categorie, prijs){
        this.naam = naam;
        this.allergeen = allergeen;
        this.img_path = img_path;
        this.categorie = categorie;
        this.prijs = prijs;
    }

    getNaam(){
        return this.naam;
    }

    getAllergeen(){
        return this.allergeen;
    }

    getImg(){
        return this.img_path;
    }

    getCategorie(){
        return this.categorie;
    }

    getPrice(){
        return this.prijs;
    }

    getAll(){
        var all = {
            naam: this.naam,
            allergeen: this.allergeen,
            img_path: this.img_path,
            categorie: this.categorie,
            prijs: this.prijs
        };

        return all;
    }

}