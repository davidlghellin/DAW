const calcularMayorT = require("./mis_funciones.js");

test('es mayor', () => {
    expect(calcularMayorT.calcularMayor(7, 5)).toBe(7);
});

describe("Mayor", () => {
    it("Batería de pruebas", () => {
        expect(calcularMayorT.calcularMayor(7, 5)).toBe(7);
    });
    it("Batería de pruebas2", () => {
        expect(calcularMayorT.calcularMayor(7, 5)).toBe(7);
    });
    it("Error de tipos", () => {
        expect(() => calcularMayorT.calcularMayor('7', 5)).toThrow(TypeError);
    });
    it("Error de tipos mensaje error", () => {
        expect(() => calcularMayorT.calcularMayor('7', 5)).toThrow('Error de tipo');
    });
});

test('suma', () => {
    const result = calcularMayorT.sum(1, 2);
    expect(result).toBe(3);
});
test.todo('resta falta');

describe('cuenta las vocales', () => {
    it('deberia tener 2 a', () => {
        console.log(calcularMayorT.contarVocales('abca'))
        expect(calcularMayorT.contarVocales('abca')).toEqual({ a: 2, e: 0, i: 0, o: 0, u: 0 })
    })
});

// Revisar siempre la docu https://jestjs.io/es-ES/docs/expect
// test.only
// test.skyp
