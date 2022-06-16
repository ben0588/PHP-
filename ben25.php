<?php

// 基本
function sayYa(){
echo "Ya</br>";
};

// 帶參數
function sayHi($name){
echo "hello,{$name} <br/>";
};

// $n可以不給,預設$n是顯示1次
// 給予兩個參數呼叫幾次
function sayHiV2($n,$name){
for ($i=0;$i<$n;$i++){
echo "hello,{$name} <br/>";
}   
};

// 帶的參數是由前,V3版比較好
function sayHiV3($name,$n){
    for ($i=0;$i<$n;$i++){
    echo "hello,{$name} <br/>";
    }   
};


// V4版_給於預設值
function sayHiV4($n =1,$name='Hello'){
    for ($i=0;$i<$n;$i++){
        echo "hello,{$name} <br/>";
    }
}

function test1(){
    // 查看帶入此函示中有幾個參數
    // echo func_num_args();
    // 取帶入參數的值已陣列方式顯示:
    $args = func_get_args();
    foreach ($args as $v){
        echo "{$v}<br/>";
    }
    
}

function sum(){
    // 查看帶入此函示中有幾個參數
    // echo func_num_args();

    // 取帶入參數的值已陣列方式顯示:
    $v = 0;
    $args =  func_get_args();
    // 將取近來的值當作index $v += $srg最後在return回上層
    foreach($args as $arg){
        $v += $arg;
    }
    return $v;
}

sayYa();
sayYa();
sayHi('ccc');
sayHi('vvvv');
sayHiV2(2,'test');
sayHiV4();
test1(2,53,5);

$sum = sum(1,2,3,4,5,6,7,8,9,10);
echo $sum;

?>