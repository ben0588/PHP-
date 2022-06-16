<?php
    // 指向|指標 opendir 取目標資料夾,預設傳回是false
    // or 若找不到該資料夾 die跑出錯誤代碼 
    // 改成.代表是當前資料夾
    $fp = opendir('c:/') or die('Server Busy');
    // echo "ok";

    // 屬於 resource 資源 蕊壽S
    // echo gettype($fp);

    // // . 代表是當前資料夾,修改成以下迴圈
    echo readdir($fp) . "<br/>";
    echo readdir($fp) . "<br/>";
    echo readdir($fp) . "<br/>";

    // 使用while迴圈讀取
    // 跑迴圈前先讀取 readdir($指標變數) 放入變數$file,每次跑都會再放進去
    while ($file = readdir($fp)){
        echo $file . "<br />";

    }
    closedir($fp);
?>