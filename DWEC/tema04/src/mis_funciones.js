function f1() {
    return 1
}

const f2 = () => {
    return 2
}

const saludar = (nombre) => {
    console.log(`Hola ${nombre}`);
}
saludar('Bob Esponja');  

const calcularMayor = (num1, num2) => {
    return (num1 > num2) ? num1 : num2;
}

console.log(calcularMayor(7, 5));