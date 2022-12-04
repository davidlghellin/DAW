<?php

namespace App\Tests;

use App\Saluda;
use PHPUnit\Framework\TestCase;

class SaludaTest extends TestCase
{
    /**
     * @covers App\Saluda::diHola
     */
    public function testCheckSaludo(): void
    {
        $saludo = new Saluda();
        $this->assertEquals("Hola mundo", $saludo->diHola());
    }
}
