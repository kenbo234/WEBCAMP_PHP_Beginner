<?php

$f0 = 0;
$f1 = 1;
for ($i=0; $i <= 19; $i++) {
    if ($i === 0) {
        echo "0 \n";
    }
    if ($i === 1) {
        echo  "1 \n";
    }
$sum = $f0 + $f1;
echo "{$sum} \n";
$f0 = $f1;
$f1 = $sum;
}