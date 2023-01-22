function f1() {
    return 1
}

const f2 = () => {
    return 2
}

const saludar = (nombre) => {
    console.log(`Hola ${nombre}`);
}
// saludar('Bob Esponja');

const calcularMayor = (num1, num2) => {
    return (num1 > num2) ? num1 : num2;
}

// console.log(calcularMayor(7, 5));

module.exports = {
    sum(a, b) {
        return a + b
    },
    subs(a, b) {
        return a - b
    },
    calcularMayor(num1, num2) {
        if (typeof num1 === 'string' || typeof num2 === 'string')
            throw TypeError('Error de tipo');
        return (num1 > num2) ? num1 : num2;
    },
    contarVocales(str) {
        return [...str].reduce(
            (memo, char) => (
                memo.hasOwnProperty(char)
                    ? { ...memo, [char]: memo[char] + 1 }
                    : memo
            ),
            { a: 0, e: 0, i: 0, o: 0, u: 0 }
        )
    }
}
