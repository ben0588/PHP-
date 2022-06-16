<?php
    // 匯入class物件檔案
    include('ben0477.php');

    // 因為Student物件共有四個參數值
    $s1 = new Student('Test1',50,50,50);
    $s2 = new Student('Test2',50,60,50);
    $s3 = new Student('Test3',50,50,70);

    // 使用->使用物件中的方法
    echo "{$s1->getname()} : {$s1->sum()} : {$s1->avg()} <br/>";
    echo "{$s2->getname()} : {$s2->sum()} : {$s2->avg()} <br/>";
    echo "{$s3->getname()} : {$s3->sum()} : {$s3->avg()} <br/>";

?>