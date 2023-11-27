<?php

require_once 'partOne.php';

use PHPUnit\Framework\TestCase;

class PartOneTest extends TestCase 
{
    public function test_partOne_zero(): void
    {
        $result = partOne(0);
        $expected = [];

        $this->assertEquals($expected, $result);
    }

    public function test_partone_one(): void
    {
        $result = partOne(1);
        $expected = ['*'];

        $this->assertEquals($expected, $result);
    }

    public function test_partOne_ten(): void
    {
        $result = partOne(10);
        $expected = [
            '*',
            '**',
            '***',
            '****',
            '*****',
            '******',
            '*******',
            '********',
            '*********',
            '**********'
        ];

        $this->assertEquals($expected, $result);
    }
}