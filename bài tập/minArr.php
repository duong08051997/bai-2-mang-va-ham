<?php
function minArr($arr){
    $min = $arr[0];
    for($i = 1;$i < count($arr);$i++){
        if($min > $arr[0]){
            $min = $arr[0];
        }
    }
    return $min;
}
echo minArr([1,2,3,4,5,56,7,8]);
?>
