<meta charset="UTF-8" />
<?php
    // 建立資料庫連接使用
    $mysqli = new mysqli('localHost','root','','ispan',3306);
     // ('localhost(本地主機)','資料庫帳號','資料庫密碼','資料庫名稱',pout號)

    //// 用來檢查是否有連接mysql成功:
    // if ( $mysqli = new mysqli('localHost','root','','ispan',3306)){
    //     echo "OK";
    // }else{
    //     echo "NO";
    // }

?>