<?php

/**
 * Returns a random value from the given array.
 *
 * @param array $array Input array.
 * @return mixed|null A random value from the array or null if the array is empty.
 */
function array_random_value(array $array)
{
    if(empty($array)) {
        return null;
    }

    $keys = array_keys($array);
    $randomKey = random_int(0, count($keys) - 1);

    return $array[$keys[$randomKey]];
}