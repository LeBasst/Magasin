class Vehicule {
    constructor(brand,model,color){
        this.brand = brand;
        this.model = model;
        this.color = color;
    }
    getBrand = function() {
        return this.model + "trop bien";
    }
}

let car1 = new Vehicule("Lexus");
let car2 = new Vehicule("McLaren");

console.log(car1.getModel());