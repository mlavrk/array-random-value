<?php

/**
 * @param array $array
 * @return mixed
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