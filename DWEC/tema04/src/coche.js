class Coche {

}
console.log(new Coche())
console.log("-----");

class Coche2 {
    constructor(marca) {
        this.marca = marca
    }
    otro
    runrun() {
        return `El coche ${this.marca} hace runrun`
    }
}
c2 = new Coche2('BMW')
console.log(c2)
console.log(c2.runrun())

class CocheElectrico extends Coche2 {

    constructor(marca, tipo_bateria) {
        super(marca)
        this.tipo_bateria = tipo_bateria
    }
    runrun() {
        return `El coche ${this.marca} hace runrun y la batería es ${this.tipo_bateria}`
    }
}
console.log("-----");

c3 = new CocheElectrico('BMW', 'Nuclear')
console.log(c3)
console.log(c3.runrun())
