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

$string = "ABCDEF";
echo strlen($string);

$string = "I LOVE Ruby!";
$new_string = str_replace("Ruby","PHP",$string);
echo $new_string;

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);
