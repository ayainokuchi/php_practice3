<?php

$name = "ayainokuchi";

if($name == "ayainokuchi"){
    echo "私は {$name} です";
}else{
    echo "あなたの名前ではありません";
}

$num = 0;
for($i = 1; $i <=10000; $i++){
     $num += $i;
}
echo $num;

$fruits = array("strawberry","orange","kiwi","cherry","apple");
foreach($fruits as $fruit){
    echo $fruit;
}

for($i = 1; $i <=100; $i++){
    if($i % 5 ==0){
        echo $i;
        echo "\n";
    }
}


