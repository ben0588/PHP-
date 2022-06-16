<!-- 建立編碼方式 -->
<meta charset="UTF-8" />
<?php
    // 建立資料庫連接使用,建立完畢記得用if判斷是否有連接成功
    $mysqli = new mysqli('localHost','root','','ispan',3306);
    // ('localhost(本地主機)','資料庫帳號','資料庫密碼','資料庫名稱',pout號)

    // 建立mysql資料庫編碼方式:set_charset('utf8')
    $mysqli->set_charset('utf8');

    // 避免隱碼攻擊的方法:
    $cname ='CCC2'; $tel ='wwww';$birthday='19992-04-5';
    $id = 3;
    $sql = "UPDATE cust SET cname=?, tel=?, birthday=? WHERE id =?";
    // prepare預先準備一個待執行的SQL指令:
    $stmt = $mysqli->prepare($sql);
    // 查看有成功拿回一個物件實體,繼續執行:
    // var_dump($stmt);
    // 綁定參數,按照SQL語法從左到右屬性類別,避免被隱碼攻擊
    $stmt->bind_param('sssi',$cname,$tel,$birthday,$id);
    // 執行
    $stmt->execute();
?>