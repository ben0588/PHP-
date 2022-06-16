<?php


    $poker = range(0,51);
    shuffle($poker);
    foreach($poker as $card){
        // echo "{$card} <br/>";
    }
    echo "<hr/>";

    // 52張牌發給4個玩家各13張牌
    // 二維陣列應用:
    // 方法1: 不好用
    // $players = array(array(),array(),array(),array());
    // 方法2: 
    $players = [[],[],[],[]];
    var_dump($players);
    echo "<hr/>";
    // 把所有撲克牌發給四個玩家
    foreach($poker as $i => $card){
        // $players[第幾家][第幾張]=$card;
        $players[$i % 4][(int)($i / 4)]=$card;
    }
    // 檢查第一個玩家所獲得牌是否正確//驗算正常
    // foreach($players[0] as $card){
    //     echo "{$card} <br/>";
    // }
?>

<!-- &spades; &hearts; &diams; &clubs; -->
<table border="1" width="100%">
    <?php
        // 把撲克牌分為四個花色,並且用撲克牌顯示方法 A,2,3,4,....J,Q,K方式顯示
        // 
        $suits=['&spades;', '<font color="red">&hearts;</font>', 
        '<font color="red">&diams;</font>',' &clubs;'];
        $values = ["A",2,3,4,5,6,7,8,9,10,"J","Q","K"];

        // 因為$players四個玩家陣列只有四個0.1.2.3 = $player
        foreach ($players as $player){
            // 還沒攤牌之前依照花色先排序
            sort($player);
            echo "<tr>";
            // 更換成變數 $player 因為每個[0~4]下面都有[0~13]
            foreach($player as $card){
                // 因為每人只會收到13張牌所以/13取商
                $suit = $suits[(int)$card/13];
                $value = $values[$card %13];
                echo "<td>{$suit}{$value}({$card})</td>";
            }  
            echo "</tr>"; 

        }

        

    
    ?>
</table>