# Array Random Value

![tests workflow](https://github.com/mlavrk/array-random-value/actions/workflows/test.yml/badge.svg)

A simple PHP library that provides a utility function to get a random value from an array. If the array is empty, the function returns `null`.

## Installation

TODO

## Usage

```php
<?php

$array = [1, 2, 3, 4, 5];
$randomValue = array_random_value($array);

echo $randomValue; // Outputs a random value from the array, e.g., 3
```