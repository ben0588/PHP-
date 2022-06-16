<?php
    // include 匯入php使用裡面的function(應酷的)
    include('bendapis.php');

    if(checkTwId('M122534560')){
        echo "OK";
    }else {
        echo "NO";
    }

    echo '<hr />';
    echo 'Random:' . createTWIdByRandom() . '<br />';
    echo '女生:' . createTWIdByGender() . '<br />';
    echo '男生:' . createTWIdByGender(true) . '<br />';
    echo '嘉義:' . createTWIdByArea('I') . '<br />';
    echo '高雄女生:' . createTWIdByArea('S', false) . '<br />';
?>