<meta charset="UTF-8" />
<?php
    // ('連接方式','資料庫帳號','資料庫密碼','資料庫名稱',pout號)

    $mysqli = new mysqli('localhost','root','','ispan',3306);

    // 設定編碼方式:
    $mysqli->set_charset('utf8');

    // 方法二:避免被明碼攻擊的可能

    // 刪除資料

    // 給予刪除的目標id值
    $id = 11;
    // MySQL刪除語法:
    $sql = "DELETE FROM cust WHERE id=?";
    // prepare回傳該物件的實體
    $stmt = $mysqli->prepare($sql);
    // bind_param綁定參數 ('i')i代表是數值型態,(參數變數)
    $stmt->bind_param('i',$id);
    // 執行
    $stmt->execute();
    // 執行成功後查看資料庫內是否有新增
?>