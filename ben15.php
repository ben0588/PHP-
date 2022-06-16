<?php

    $ary1 = array(1,2,3,4,'w',true);
    var_dump($ary1);
    echo "<hr/>";
    // 巡訪陣列方式:
    // 可以針對指定範圍做尋訪
    for ($i=2;$i<count($ary1);$i++){
        echo "{$i} : {$ary1[$i]} <br/>";
    }
    echo "<hr/>";
    // foreach尋訪陣列方式:
    // 只能巡防全部範圍
    foreach ($ary1 as $key => $value){  
        echo "{$key} : {$value} <br />";
    }
    // foreach 只要內容不需要index值實將$key拿掉
    echo "<hr/>";
    foreach ($ary1 as $value){  
        echo "{$value} <br />";

    }
?>