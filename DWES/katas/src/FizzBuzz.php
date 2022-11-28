<?php

namespace App;


class FizzBuzz
{
    public function diNum(int $numero): string
    {
        if ($numero % 3 ===  0 && $numero % 5 ===  0) {
            return 'FizzBuzz';
        } else if ($numero % 3 ===  0) {
            return 'Fizz';
        } else if ($numero % 5 ===  0) {
            return 'Buzz';
        } else
            return $numero;
    }
}
