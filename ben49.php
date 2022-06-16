<meta charset="UTF-8" />
<?php
    // ('連接方式','資料庫帳號','資料庫密碼','資料庫名稱',pout號)
    // ('localhost(本地)')
    $mysqli = new mysqli('localhost','root','','ispan',3306);
    
    // 引用後使用以下方式先判斷是否有連接資料庫成功
    // if ($mysqli){
    //     echo "ok";
    // }else{
    //     echo "NO";
    // }
    
    // 設定編碼方式:
    $mysqli->set_charset('utf8');

    // 方法二:避免被明碼攻擊的可能

    // 修改資料
    $cname = 'HELLO';$tel = '77555';$birthday ="1999-3-6";
    $id = 2;
    $sql = "UPDATE cust SET cname=? , tel=?, birthday=? WHERE id=?";
    // prepare回傳該物件的實體
    $stmt = $mysqli->prepare($sql);
    // bind_param綁定參數 ('sssi')代表三個參數都是字串string,i代表是整數id,(參數變數)
    $stmt->bind_param('sssi',$cname,$tel,$birthday,$id);
    // 執行
    $stmt->execute();
    // 執行成功後查看資料庫內是否有新增
?>