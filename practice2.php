<?php

$name = "Yuki Nishiyama";

if($name == "Yuki Nishiyama"){
    echo "私は あなたの名前 です";
}else{
    echo "あなたの名前ではありません";
}

$total = 0;
for($i=1;$i<=10000;$i++){
    $total += $i;
}

echo $total;

$fuits =array('りんご','ばなな','ぶどう','キウイ','パイナップル');

foreach($fuits as $fuit){
    echo $fuit;
}



/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}


?>