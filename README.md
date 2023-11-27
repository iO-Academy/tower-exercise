# Tower building exercise

A common coding challenge is to build a tower of blocks based on a number of floors.

The towers are represented by arrays of strings, where each string represents a floor in the tower. For example
a tower with 6 floors would be represented as:

```
$example = [
    '     *     ', 
    '    ***    ', 
    '   *****   ', 
    '  *******  ', 
    ' ********* ', 
    '***********'
];
```

Each `*` represents a block in the tower.

This repo comes with a set of unit tests you can use to check the correctness of your solutions. You can also look at the tests to get a better idea as to how your solutions should behave.

## Part one - getting started

Complete the function in partOne.php

Your function will be given a single integer parameter `$n` which represents the number of floors
the tower must have. 

A tower with 10 floors would look like:

```
$10floors = [
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
```

If `$n` is set to zero, your function should return an empty array

To run the tests to verify your solution: `phpunit tests/PartOneTest.php`

## Part two - Pyramid towers

Complete the function in partTwo.php

The function has the same parameter `$n`, the number of floors, but this time the blocks should be centered
in the output. 

A tower with 6 floors would look like:

```
$6floors = [
    '     *     ', 
    '    ***    ', 
    '   *****   ', 
    '  *******  ', 
    ' ********* ', 
    '***********'
];
```

To run the tests to verify your solution: `phpunit tests/PartTwoTest.php`

## Part three - Harder pyramid towers

Complete the function in partThree.php

Similar to the last part, your function should return a tower with centered blocks, but this time
the center block should be a `|` instead of a `*`

A tower with 6 floors would look like:

```
$expected = [
    '     |     ', 
    '    *|*    ', 
    '   **|**   ', 
    '  ***|***  ', 
    ' ****|**** ', 
    '*****|*****'
];
```

To run the tests to verify your solution: `phpunit tests/PartThreeTest.php`
