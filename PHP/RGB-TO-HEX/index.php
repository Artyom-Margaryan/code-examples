<?php

//The rgb function is incomplete.
// Complete it so that passing in RGB decimal values will result in a hexadecimal representation being returned.
// Valid decimal values for RGB are 0 - 255.
// Any values that fall out of that range must be rounded to the closest valid value.
//Note: Your answer should always be 6 characters long, the shorthand with 3 will not work here.


//The following are examples of expected output values:

//rgb(255, 255, 255); // returns FFFFFF
//rgb(255, 255, 300); // returns FFFFFF
//rgb(0, 0, 0); // returns 000000
//rgb(148, 0, 211); // returns 9400D3

function rgb($r, $g, $b){
    $r = min(255, max(0, round($r)));
    $g = min(255, max(0, round($g)));
    $b = min(255, max(0, round($b)));
    return strtoupper(str_pad(dechex($r), 2, '0', STR_PAD_LEFT) .
        str_pad(dechex($g), 2, '0', STR_PAD_LEFT) .
        str_pad(dechex($b), 2, '0', STR_PAD_LEFT));
}