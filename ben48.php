<meta charset="UTF-8" />
<?php
    // ('localhost(本地主機)','資料庫帳號','資料庫密碼','資料庫名稱',pout號)
    // ()
    $mysqli = new mysqli('localhost','root','','ispan',3306);
    
    // 引用後使用以下方式先判斷是否有連接資料庫成功
    // if ($mysqli){
    //     echo "ok";
    // }else{
    //     echo "NO";
    // }
    
    // 設定編碼方式:
    $mysqli->set_charset('utf8');

    // 方法一:存在被攻擊的可能
    // INSERT INTO 資料表(欄位名稱) VALUE (內容值);
    // $sql = "INSERT INTO cust (cname,tel,birthday) VALUES('Ben','123','1992-2-5')";
    // if ($mysqli->query($sql)){
    //     echo "新增資料成功";
    // }else{
    //     echo "新增資料失敗";
    // }
    // var_dump($result);


    // 方法二:避免被明碼攻擊的可能
    $cname = 'Bne1';$tel = '6744';$birthday ="1999-2-5";
    $sql = "INSERT INTO cust(cname,tel,birthday) VALUE(?,?,?)";
    // prepare回傳該物件的實體
    $stmt = $mysqli->prepare($sql);
    // bind_param綁定參數 ('sss')代表三個參數都是字串string,(參數變數)
    $stmt->bind_param('sss',$cname,$tel,$birthday);
    // 執行
    $stmt->execute();
    // 執行成功後查看資料庫內是否有新增
?>