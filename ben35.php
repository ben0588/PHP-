<?php
    // mode = w 若不存在就新增
    $fp = fopen('dir2/ben1.txt','w');

    // fwrite 移到文件中一開始處,會覆蓋前一個內容(fopen('w'))
    // fopen('w') 改成 ('a')時就不會覆蓋前一個內容
    fwrite($fp,'Hello2');
    fclose($fp);
    ?>