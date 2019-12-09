<?php

$height = 160;
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else {
  echo "ご乗車になれます。";
}

$height = 230;
// もし $height が 150 未満の数値なら、 ifのあとの { } の中のコードが実行される
// もし $height が 200 以上の数値なら、 else ifのあとの{ }の中のコードが実行される
// それ以外なら、 else のあとの　｛ ｝ の中のコードが実行される
if ($height < 150) {
  echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200) {
  echo "200cm 以上の方はご乗車できません。";
} else {
  echo "ご乗車になれます。";
}


//switch による複数条件分岐
$weekday = "月曜";
switch ($weekday) {
  case "月曜":
    echo "可燃ゴミの日です。";
    break;
  case "水曜":
    echo "資源ゴミのひです。";
    break;
  default:
    echo "回収はりません。";
    break;
}

$weekday = "木曜";
switch ($weekday) {
  case "月曜":
  case "木曜":
    echo "可燃ゴミの日です。";
    break;
  case "水曜":
    echo "資源ゴミの日です。";
    break;
  default:
    echo "回収はありません。";
    break;
}
//=>$weekday = "月曜";　の場合も「可燃ゴミの日です。」と表示ができた。


//さまざまな条件の比較
$a = 3;
$b = 3;
$c = "3";
var_dump($a == $b);
var_dump($a != $b);
var_dump($a > $b);
var_dump($a >= $b);
var_dump($a < $b);
var_dump($a <= $b);
var_dump($a === $c);
var_dump($a !== $c);

//for による繰り返し処理
for ($i = 0; $i < 10; $i++){
  echo $i;
}

$total = 0;
echo $total;

for ($i = 0; $i <= 100; $i++) {
  $total += $i;
}
echo $total;

# 配列の全ての要素を出力
$fruits = array("apple", "orange", "lemon");
echo count($fruits);

for ($i = 0; $i < count($fruits); $i++) {
  echo "要素は" . $fruits[$i];
  echo "\n";
}


//foreach による順次処理
$animals = array("dog", "cat", "panda");
foreach($animals as $animal){
  echo "要素は" . $animal;
  echo "\n";
}


//03課題提出

/*
1.$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください。
*/
$name = "Tsuruta";
if ($name == "Tsuruta") {
  echo "私はTsurutaです。";
} else {
  echo "あなたの名前ではありません。";
}
//$name = "鶴田"; ==>"あなたの名前ではありません。"と表示


/*
2.for文を使って、1から10000までの合計の値を表示してください。
*/
$total = 0;
echo $total;
for($i = 0; $i <=10000; $i++) {
  $total += $i;
}
echo $total;


/*
3.$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
*/
$fruits = array("melon", "apple", "banana", "orange", "peach");
foreach($fruits as $fruits){
  echo "好きなフルーツは" . $fruits;
  echo "\n";
}


/*
4.【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。
*/
$start = 1;
$end = 100;
for ($i = $start; $i < $end; $i++){
  if($i % 5 == 0)
  echo $i . "\n";
}

//課題完了