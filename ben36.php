<?php

    $fp = fopen('dir2/ben1.txt','r');
    
    // 方法1:串流fread ,使用迴圈方式讀取
    // $data1 = fread($fp,1);
    // echo $data1;
    // while ($data1 = fread($fp,1)){
    //     echo $data1;
    // }

    // 方法2:讀全部資料,利用size方法
    $size = filesize('dir2/ben1.txt');
    echo fread($fp,$size);
    

    // 清除
    fclose($fp);




?>