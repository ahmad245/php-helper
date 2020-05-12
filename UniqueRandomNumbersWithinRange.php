<?php

function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
    $numbers=range($min, $max);
    shuffle($numbers); 
    return array_slice($numbers, 0, $quantity);
    }

$result=UniqueRandomNumbersWithinRange(1,5,2);
var_dump($result);