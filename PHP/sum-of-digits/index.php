<?php

$number = "1547";
//1547 = 1+5+4+7 = 17
$sum = 0;

for ($i = 0; $i < strlen($number); $i++) {
    $sum += $number[$i];
}

echo "Сумма: $sum";