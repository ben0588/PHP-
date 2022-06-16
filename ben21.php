<?php


    $a[] = 2;
    $a[] = 6;
    $a['test'] = 'www';
    var_dump($a);
    echo "<hr/>";
    foreach ($a as $k => $v){
        echo "{$k} : {$v} <br/>";
    }


?>