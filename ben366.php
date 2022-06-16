<?php

    $fq = fopen('dir2/ben1.txt','r');
    // $fd = fread($fq,1);
    
    while ($fd =fread($fq,1)){
        echo $fd;
    }
    
?>