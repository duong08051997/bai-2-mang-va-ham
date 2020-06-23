<?php
function maxArr($arr){
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 1; $j <count($arr) ; $j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}
echo maxArr([
    [51,1,2,3,3,4,5],
    [3,-4,43,3],
    [1,2,3,4,1,51,51,51,1],
]);
?>