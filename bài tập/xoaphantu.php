<?php

function delArr($arr,$n)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($n === $arr[$i]) {
            unset($arr[$i]);
        }
    }
    return $arr;

}
var_dump(delArr( [1,2,3,23,14,14,12,124,12,12],23));
?>