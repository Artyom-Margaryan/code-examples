<?php
$start = 20;
$end = 400;
$sum = 0;

// number between 20 and 400
for ($i = $start; $i <= $end; $i++) {
    if (fmod($i, 5) == 0) {
        $sum += $i;
    }
}

echo "sum: {$sum}\n";