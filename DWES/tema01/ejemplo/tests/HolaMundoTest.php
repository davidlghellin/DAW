<?php

namespace App\Tests;

use App\HolaMundo;
use PHPUnit\Framework\TestCase;

class HolaMundoTest extends TestCase
{

    public function testDiceHolaMundoCuandoSaludaMal()
    {
        $holamundo = new HolaMundo;
        $this->assertEquals('HolaMundo', $holamundo->saluda());
    }
    public function testDiceHolaMundoCuandoSaludaBien()
    {
        $holamundo = new HolaMundo;
        $this->assertEquals('Hola mundo!', $holamundo->saluda());
    }
}
