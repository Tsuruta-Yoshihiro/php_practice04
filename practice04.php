<?php
//課題提出
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function sum($max) {
  $result = 0;
  return $max * 2;
}
echo sum(10);
?>

<?php
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a,$b){
  $result = $a + $b;
  return $result;
}
echo f(2,7);
?>

<?php
/*
3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) 
を渡すとその要素をすべてかけた結果を返す関数を作成してください。
*/
$array = [1, 3, 5, 7, 9];
function fa($array){
  $result = 1;
  foreach($array as $a){
    $result *= $a;
  }
  return $result;
}
echo fa($array);
?>


<?php
/*4.【応用】　次のプログラムは、配列の中で一番大きい値を返す 
max_array という関数を実装しようとしています。途中の部分を完成させてください。
*/
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number;
}
$num = [4, 9, 6, 2];
echo max_array($num);
?>

<?php
//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
/*strip_tags
→HTMLタグを取り除く
*/
$string = '<a href="http://google.com">Google</a>';
$result = strip_tags($string);
echo $result;
?>

<?php
/*array_push
→末尾にデータを追加する
print_rで吐き出す？
*/
$date = array("A", "B", "C");
array_push($date, "D", "E");
print_r($date);
?>

<?php
/*array_merge
→配列をマージする
print_rで吐き出す？
同じインデックスがある場合は、後かか指定した配列に上書き！！
*/
$fruits = array("apple" => "2", "orange" => "6", "banana" => "10");
$add_fruits = array("apple" => "10", "melon" => "1");
$result = array_merge($fruits, $add_fruits);
print_r($result);
?>

<?php 
/*time, mktime
<time>
現在時刻のUNIXタイムスタンプを取得
協定世界時（UTC）での1970年1月1日（午前0時0分0秒）からの経過時間
「６月11日12時2分」のUNIXタイムスタンプは「1528686124」
*/
$time = time();
echo $time;
?>

<?php
/*
<mktime>
指定した日時のUNIXタイムスタンプを取得
int mktime( [ 時 [, 分 [, 秒 [, 月 [, 日 [, 年 [, int is_dst ]]]]]]] )
*/
$timestamp = mktime(0, 0, 0, 7, 20, 1987);
echo $timestamp;
?>

<?php
/*date
*/
echo date("Y/m/d");
?>
