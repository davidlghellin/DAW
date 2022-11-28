<?php

namespace App\Tests;

use App\ConstantDavid;
use PHPUnit\Framework\TestCase;

class ConstantDavidTest extends TestCase
{
    public function testCheckVariable()
    {

        $defini = new ConstantDavid;
        $this->assertEquals('DAVID', $defini->david);
    }
}
