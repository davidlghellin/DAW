let coches = ['Seat', 'Audi', 'BMW', 'Toyota'];


let coches2 = new Array();
coches2[0] = 'Seat';
coches2[1] = 'Audi';
coches2[2] = 'BMW';
coches2[3] = 'Toyota';

// Arrays asociativos
let edades = new Array();
edades['Juan'] = 20;
edades['Ana'] = 18;
edades['Pedro'] = 25;
console.log(edades);
console.log("-----");

let numeros = [1, 5, 3, 9, 6, 4];

for (let i = 0; i < numeros.length; i++) {
    console.log(numeros[i]);
}
console.log("-----");

// for-in for each de java
for (let i in numeros) {
    console.log(numeros[i]);
}
console.log("-----");

numeros.forEach(numero => console.log(numero));
console.log("-----");

// funcional, tenemos map reduce y filter
let cuadrados = numeros.map(numero => { return numero * numero });
console.log(cuadrados);

console.log(numeros);
console.log(numeros.filter(numero => numero % 2 === 0));

const words = ['Python', 'Javascript', 'Go', 'Java', 'PHP', 'Ruby'];
const result = words.filter(word => word.length < 5);
console.log(result);

const total = [1, 2, 3, 4, 5].reduce((previous, current) => previous + current, 0);
console.log(total) // 15
console.log("-----");

// Añadir a un array, como vimos en la creción de un array vacio

numeros[6] = 15;
console.log(numeros);

delete numeros[6];
console.log(numeros.length);    // Muestra por consola: 7
console.log(numeros);
console.log(numeros[6]);


numeros[8] = 15;
console.log(numeros);
console.log("-----");


// arrays paralelos
let personajes = ['Bob Esponja', 'Calamardo', 'Patricio'];
let color = ['amarillo', 'beige', 'rosa'];
for (let i = 0; i < personajes.length; i++) {
    console.log(`${personajes[i]} es de color ${color[i]}`);
}
console.log("-----");
// arrays multidimiensionales
let personajes2 = [
    ['Bob Esponja', 'amarillo'],
    ['Calamardo', 'beige'],
    ['Patricio', 'rosa']
];
for (let i in personajes2) {
    console.log(`${personajes2[i][0]} es de color ${personajes2[i][1]}`);
}
