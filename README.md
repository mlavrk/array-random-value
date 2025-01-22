# Array Random Value

![tests workflow](https://github.com/mlavrk/array-random-value/actions/workflows/test.yml/badge.svg)

A simple PHP library that provides a utility function to get a random value from an array. It uses the `random_int()` function for secure randomness. If the array is empty, the function returns `null`.

## Disclaimer

This project is created for learning purposes. However, the functionality is fully implemented and works correctly. Feel free to use it in your projects, but keep in mind that it’s not intended for production-critical use cases.

## Installation

TODO

## Usage

```php
<?php

$array = [1, 2, 3, 4, 5];
$randomValue = array_random_value($array);

echo $randomValue; // Outputs a random value from the array, e.g., 3
```