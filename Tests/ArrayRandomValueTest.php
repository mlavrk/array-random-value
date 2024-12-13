<?php

use PHPUnit\Framework\TestCase;

class ArrayRandomValueTest extends TestCase
{
    public function testReturnNullOnEmptyArray()
    {
        $this->assertNull(array_random_value([]));
    }

    public function testReturnSomeValueFromArray()
    {
        $testArray = [1, 2, 3];
        $this->assertContains(array_random_value($testArray), $testArray);
    }

    public function testReturnDifferentValueFromArray()
    {
        $testArray = [1, 2, 3, 4, 5];
        $results = [];

        for($i = 0; $i < 20; $i++) {
            $results[] = array_random_value($testArray);
        }

        $uniqueResults = array_unique($results);
        $this->assertGreaterThan(1, count($uniqueResults), "Function did not return different values");
    }

    public function testAssociativeArray()
    {
        $testArray = ['a' => 1, 'b' => 2, 'c' => 3];
        $this->assertContains(array_random_value($testArray), $testArray);
    }
}