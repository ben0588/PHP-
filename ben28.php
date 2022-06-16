<?php
    // 方法1: 
    function changA(){
        // 在function內使用global宣告$a為全域變數$a
        global $a;
        $a = 100;
        echo "debug:{$a} <br/>";
        // 此時呼叫執行完畢後,外面的$a就會由10變成100;
    }

    $a = 10;
    echo "起始的a值: {$a} <br/>";
    echo "<hr />";
    changA();
    echo "呼叫changA後的a值: {$a} <br/>";
    echo "<hr />";


    // 方法2: 傳值與傳址的差異
    $b = 11;
    echo " 起始的b值:{$b} <br/>";
    // 傳值 = $c  是用來當做送值進入的參數,($c)代表是傳入$b的 11這個值
    // 傳址 = &$c 則是代表傳送進去的是$b這個變數址進去
    function changB($c){
        $c = 111;
    }
    changB($b);
    echo "呼叫changB後的b值: {$b}";

    echo phpinfo();

?>