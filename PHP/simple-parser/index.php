<?php
//Write a simple parser that will parse and run Deadfish.
//
//Deadfish has 4 commands, each 1 character long:
//
//i increments the value (initially 0)
//d decrements the value
//s squares the value
//o outputs the value into the return array
//    Invalid characters should be ignored.

//example parse("iiisdoso") => [ 8, 64 ]

function parse($data) {
    $result = array();
    $value = 0;
    $len = strlen($data);

    for ($i = 0; $i < $len; $i++) {
        switch ($data[$i]) {
            case 'i':
                $value++;
                break;
            case 'd':
                $value--;
                break;
            case 's':
                $value *= $value;
                break;
            case 'o':
                array_push($result, $value);
                break;
            default:
                break;
        }
    }

    return $result;
}