<?php

function findMinMax($array) {
    $min = PHP_INT_MAX;
    $max = PHP_INT_MIN;

    foreach ($array as $value) {
        if ($value > $max) {
            $max = $value;
        }
        if ($value < $min) {
            $min = $value;
        }
    }

    return array($min, $max);
}
