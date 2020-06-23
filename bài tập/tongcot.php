<?php
function sumCot($arr,$cot){
    $sum = 0;
    for ($i = 0; $i < $cot; $i++) {
        $sum = 0;
        for ($j = 0; $j < count($arr); $j++) {
                $sum += $arr[$j][$i];
        }
    }
    return $sum;
}
echo sumCot([
    [51,1,2,3,3,4,5],
    [3,-4,43,3],
    [1,2,3,4,1,51,51,51,1],
],4);
?>
