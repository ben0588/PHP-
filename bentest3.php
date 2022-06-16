<?php

// 練習模擬擲骰子100次,統計每點出現的次數(使用陣列)
    
// $count1 = $count2 = $count3 = $count4 = $count5 = $count6 = 0;
// 將六個骰子初始值等於6個0
// $p = array(0,0,0,0,0,0);

    // (1 => 0,0,...)陣列數從1開始算 
    $p = array(1 => 0,0,0,0,0,0);
    var_dump($p);

    for ($i=0;$i<100;$i++){
        // 陣列變數$p[]裡面放亂數1~6當骰到1就會++一次
        //// 練習:當骰子出現456時出現機率兩倍
        //// 塞入789當 亂數>=7時-3 (因為骰到7-3就算在4/骰到8-3就算在5/骰到9-3就算在6)否則出現出現原本;
        $temp = rand(1,9);
        $point = $temp >=7? $temp-3:$temp;
        $p[$point]++;
    }
    echo "<hr/>";
    // as $point 等同index位置 => $times 等同其內容value值
    foreach ($p as $point => $times){
        echo " {$point} 出現的字數:{$times} <br/>";
    }   

?>