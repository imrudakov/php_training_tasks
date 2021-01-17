<?php

function divide_by_5($array): array
{
    $divideby5 = [];
    foreach ($array as $unit) {
        if ($unit % 5 == 0) {
            $divideby5[] = $unit;
        }
    }
    return $divideby5;
}

function array_print(array $array)
{
    foreach ($array as $unit) {
        print $unit . ' ';
    }
    print PHP_EOL;
}

function array_random(): array
{
    $size = rand(0, 100);
    $array = [];
    for ($i = 1; $i < $size; $i++) {
        $array[] = rand(0, 1000);
    }
    return $array;
}

array_print(divide_by_5(array_random()));
array_print(divide_by_5(array_random()));