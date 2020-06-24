<?php
function sumCheo($arr){
$sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($i === $j) {
                $sum += $arr[$i][$j];
            }
        }
    }
    return $sum;
}
echo sumCheo([
    [1,12,2,1,2],
    [12,234,35,53],
    [23,4,54,2],
]);
