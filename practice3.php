<?php

//課題１
 function twice($number){
    $number*= 2;
    return $number;
}

echo twice(5);


//課題２
function f($a,$b){
    return $a + $b;
}

echo f(500,5000);


//課題３
function a($arr){
    $a_number = $arr[0];
    foreach($arr as $a){
        $a_number *= $a; 
    }
    return $a_number;
}

$arr = array(1, 3, 5 ,7, 9);
echo a($arr);



//課題４
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 $max_number += $a;
 }

 return $max_number;
 }
 
$arr =  array(1, 3, 5 ,7, 9);
echo max_array($arr);


//課題５
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 
//配列を結合する
$array = array_merge($array1, $array2, $array3);
 
echo print_r($array);

//----------------------------
echo '現在のUnixタイムスタンプ：'.time();
?>