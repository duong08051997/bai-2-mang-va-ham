<?php
function countArr($arr){
    $count = 0;

    $i = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $count++;
    }
    return $count;
}
echo countArr([1,12,1,134,1,12,12,3,32,1]);
?>