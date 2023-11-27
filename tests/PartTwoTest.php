<?php

require_once 'partTwo.php';

use PHPUnit\Framework\TestCase;

class PartTwoTest extends TestCase 
{
    public function test_partTwo_zero(): void
    {
        $result = partTwo(0);
        $expected = [];

        $this->assertEquals($expected, $result);
    }

    public function test_partTwo_one(): void
    {
        $result = partTwo(1);
        $expected = ['*'];

        $this->assertEquals($expected, $result);
    }

    public function test_partTwo_three(): void
    {
        $result = partTwo(3);
        $expected = [
            '  *  ',
            ' *** ',
            '*****'
          ];

        $this->assertEquals($expected, $result);
    }

    public function test_partTwo_six(): void
    {
        $result = partTwo(6);
        $expected = [
            '     *     ', 
            '    ***    ', 
            '   *****   ', 
            '  *******  ', 
            ' ********* ', 
            '***********'
          ];

        $this->assertEquals($expected, $result);
    }
}