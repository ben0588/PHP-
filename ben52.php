<?php
    // 密碼加密
    $passwd = '123456';
    $passwd1 = password_hash($passwd,PASSWORD_DEFAULT);
    echo $passwd1 ."<br/>";

    // 密碼長度
    echo strlen($passwd1) . "<br />";

    // 密碼驗證 password_verify ('明碼','加密後的$密碼')
    if(password_verify('123456',$passwd1)){
        echo "OK";
    }else{
        echo "NO";
    }

    
?>