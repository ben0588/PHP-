<?php
    $fp = fopen('dir2/test1.txt','a');
    fwrite($fp,'Test2');
    fclose($fp);
?>