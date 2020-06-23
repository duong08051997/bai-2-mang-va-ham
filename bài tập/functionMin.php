<?php
function minArr($arr){
    $min =min($arr) ;
    $index =[];
    for ($i = 1; $i < count($arr); $i++) {
        if ($min === $arr[$i]) {
            array_push($index,$arr[$i]);
        }
    }
    return $index;
}
var_dump(minArr([1,2,23,4,5,1,2,4,-1]));
?>

