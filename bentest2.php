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
        $p[rand(1,6)]++;
    }
    echo "<hr/>";
    // as $point 等同index位置 => $times 等同其內容value值
    foreach ($p as $point => $times){
        echo " {$point} 出現的字數:{$times} <br/>";
    }   

?>