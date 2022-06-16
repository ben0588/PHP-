<?php

// 練習模擬擲骰子100次,統計每點出現的次數(不使用陣列)
    
$count1 = $count2 = $count3 = $count4 = $count5 = $count6 = 0;
    for ($i=0;$i<100;$i++){
        $x = rand(1,6);
        switch($x){
            case 1:
                $count1++; break;
            case 2:
                $count2++; break;
            case 3:
                $count3++; break;
            case 4:
                $count4++; break;
            case 5:
                $count5++; break;
            case 6:
                $count6++; break;
        };
    }

    echo "<hr/>";
    echo " 1 出現的字數:{$count1} <br/>";
    echo " 2 出現的字數:{$count2} <br/>";
    echo " 3 出現的字數:{$count3} <br/>";
    echo " 4 出現的字數:{$count4} <br/>";
    echo " 5 出現的字數:{$count5} <br/>";
    echo " 6 出現的字數:{$count6} <br/>";


?>