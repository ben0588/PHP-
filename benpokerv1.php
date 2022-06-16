<?php
    // 練習:
    // 52張牌發給4個玩家各13張牌
    // 用table顯示 黑桃? 順序要理牌
    $poker = array();
    for ($i=0;$i<52;$i++){
        // 由於跑0~51會有機會重複的,所以要建立檢查機制
        // 將變數$poker[$i] = rand(0,51);更改成以下
        $temp = rand(0,51);
        // 檢查機制 (跟前面的比較) 檢查重複的,所以找出沒有重複的出來
        // 先將重複地抓出來 做判斷當poker[$i(0~51共52)]等於亂數產生的0~51相同時break中斷跳出
        // 新增變數$用來存放true或者false isRepeat 是否有重複
        $isRepeat = false;
        for ($j=0;$j<$i;$j++){
            if ($poker[$j] == $temp){
                // 與前面重複了
                $isRepeat = true;
                break;
            }
        }
        // 當檢查完畢後才放入陣列[1~52]放不重複的52張牌
        // 當$rep如果是false就-1代表重複了
        if ($rep){
            $i--;
        }else{
            $poker[$i] = $temp; 
            echo "{$poker[$i]}<br/>";
        }


    }
?>