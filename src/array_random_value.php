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

    return $array[array_rand($array)];
}