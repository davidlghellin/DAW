<?php

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testCuandoDoyElNum3MeDaFizz(): void
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals('Fizz', $fizzBuzz->diNum(3));
    }

    public function testCuandoDoyElNum5MeDaBuzz(): void
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals('Buzz', $fizzBuzz->diNum(5));
    }
    
    public function testCuandoDoyElNum15MeDaFizzBuzz(): void
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals('FizzBuzz', $fizzBuzz->diNum(15));
    }

    public function testCuandoDoyUnNum(): void
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals(2, $fizzBuzz->diNum(2));
    }
}
