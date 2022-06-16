<?php
    // rand(0,100)為php語法創建亂數,0最低,100最高
    $a = rand(0,100);
    echo $b = $a . '<br/>';  
    // 當a >= 90時顯示 A
    if ($a >= 90){
        echo 'A';
    // 當a >= 80時顯示 B
    }else if ($a >= 80){
        echo 'B';
    }else if ($a >= 70){
        echo 'C';
    }else if ($a >= 60){
        echo 'D';
    }else {
        echo 'E';
    }
?>