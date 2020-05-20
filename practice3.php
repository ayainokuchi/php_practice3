<?php
// 課題１
function number($result){
    return $result * 2;
}

// 課題２
function sum($a, $b){
    return $a + $b;
}

// 課題３
function f($arr){
    $result = $arr[0];
    for($i=1; $i <count($arr); $i++){
        $result *= $arr[$i]; 
    }
    return $result;
}
echo f( array(1,3,5,7,9) );
echo "\n";

// 課題４
function max_array($arr){

 $max_number = $arr[0];
 foreach($arr as $a){
    if($max_number < $a){
        $max_number = $a;
    }
 }
 return $max_number;
 }
 //  試しに値を入れました
 echo max_array( array(1,6,4,5) ) . "\n";

// 課題５
// strip_tags →　htmlタグを取り除く
$c ="<h1>あいうえお</h1>" . "<p>かきくけこ</p>";
echo strip_tags($c) . "\n";

// array_push　→　配列に追加する
$cities = ['tokyo','osaka','nagoya'];
array_push($cities, 'fukuoka','kyoto');
echo print_r($cities);

// array_merge →　配列を結合する
$number1 = [1,2,3];
$number2 = [10,20,30];
$number3 = [100,200,300];

$number = array_merge($number1,$number2,$number3);

echo print_r($number);

// time() →　タイムスタンプの表示（1970/1/1から何秒経っているか）
echo time() . "\n";;

// mktime()　→　指定した日時からのタイムスタンプの表示
echo mktime(0,0,0,7,29,1986) . "\n";

//  date() →　指定された日時を指定した形式で表示する
echo date('Y/m/d') . "\n";
echo date('Y-m-d H:i:s');









