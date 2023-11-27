<?php

require_once 'partThree.php';

use PHPUnit\Framework\TestCase;

class PartThreeTest extends TestCase 
{
    public function test_partThree_zero(): void
    {
        $result = partThree(0);
        $expected = [];

        $this->assertEquals($expected, $result);
    }

    public function test_partThree_one(): void
    {
        $result = partThree(1);
        $expected = ['*'];

        $this->assertEquals($expected, $result);
    }

    public function test_partThree_three(): void
    {
        $result = partThree(3);
        $expected = [
            '  |  ',
            ' *|* ',
            '**|**'
          ];

        $this->assertEquals($expected, $result);
    }

    public function test_partThree_six(): void
    {
        $result = partThree(6);
        $expected = [
            '     |     ', 
            '    *|*    ', 
            '   **|**   ', 
            '  ***|***  ', 
            ' ****|**** ', 
            '*****|*****'
          ];

        $this->assertEquals($expected, $result);
    }
}