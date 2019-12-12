<?php
//厳密な関数の定義
//仮引数と引数


function sum($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }
    return $result;
}
echo sum(100);
