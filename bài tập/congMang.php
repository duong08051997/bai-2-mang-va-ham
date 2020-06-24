<?php
function addArr($arr1,$arr2){
    $arrSum =[];
    for ($i = 0; $i < count($arr1); $i++) {
        array_push($arrSum,$arr1[$i]);
    }
    for ($i = 0; $i < count($arr2); $i++) {
        array_push($arrSum,$arr2[$i]);
    }
    return $arrSum;
}
print_r(addArr([1,34,4,34,2],[12,321,123,12]));