<?php 

    $month = rand(1,12);
    $days = 0;
    switch ($month){
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            $days = 31 ;break;
        case 4: case 6: case 9: case 11:
            $days = 30 ;break;
        case 2 : 
            $days = 28 ;break;
        default :
        $days = -1;
    }

    echo "{$month}月有{$days}天";



?>



<?php
    // 題目:顯示每個月共有幾天
    // $變數放入1~12隨機亂數當作月份
    $month = rand(1,12);
    // $變數新增初始值是0(數字型態)
    $days = 0;
    
    // 建立switch判斷月份變數,當數字case:1時,$日期變數等於對應數字
    switch ($month){
        case 1: case 3: case 5: case 7: case 8: case 10: case 12:
            $days = 31; break; 
        case 4: case 6: case 9: case 11:
            $days = 30; break; 
        case 2: 
            $days = 28; break; 
        
        // 默認值可以不寫,就像if的else不寫留白也沒關係
        // 此段-1 用來判斷當程式碼出錯時才會顯示
        default:
            $days = -1;
    }
    echo "{$month}月有{$days}天";
?>