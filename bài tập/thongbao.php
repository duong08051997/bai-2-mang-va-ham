<?php
function messArr($n){
    $arr = [];
    for ($i = 0; $i < count($arr); $i++) {
            if($n = $arr[$i]){
                return $arr[$i];
            }
    }
}
try {

} catch (Exception $e) {
    echo "lỗi: ", $e->getMessage(), "\n";
}
?>
