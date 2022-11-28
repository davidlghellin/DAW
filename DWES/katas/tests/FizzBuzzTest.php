<?php

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @covers App\FizzBuzz::diNumero
     */
    public function testCuandoDoyElNum3MeDaFizz(): void
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals('Fizz', $fizzBuzz->diNum(3));
    }

    /**
     * @covers App\FizzBuzz::diNumero
     */
    public function testCuandoDoyElNum5MeDaBuzz(): void
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals('Buzz', $fizzBuzz->diNum(5));
    }

    /**
     * @covers App\FizzBuzz::diNumero
     */
    public function testCuandoDoyElNum15MeDaFizzBuzz(): void
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals('FizzBuzz', $fizzBuzz->diNum(15));
    }

    /**
     * @covers App\FizzBuzz::diNumero
     */
    public function testCuandoDoyUnNum(): void
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals(2, $fizzBuzz->diNum(2));
    }

    /**
     * @dataProvider casosDeUso
     * @covers App\FizzBuzz::diNumero
     */
    public function testFizzBuzz($numeroAtestear, $resultadoEsperado)
    {
        $fizzBuzz = new FizzBuzz();

        $resultado = $fizzBuzz->diNum($numeroAtestear);

        $this->assertEquals($resultadoEsperado, $resultado);
    }

    public function casosDeUso(): array
    {
        return [
            [3, 'Fizz'], // cada elemento del array, va a testear como si fuera un nuevo test
            [5, 'Buzz'],
            [15, 'FizzBuzz'],
            [1, 1]
        ];
    }
}
