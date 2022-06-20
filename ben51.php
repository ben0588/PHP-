<meta charset="UTF-8" />
<?php
    // ('連接方式','資料庫帳號','資料庫密碼','資料庫名稱',pout號)
    // ('localhost(本地)')
    $mysqli = new mysqli('localhost','root','','ispan',3306);

    // 設定編碼方式:
    $mysqli->set_charset('utf8');

    // 方法二:避免被明碼攻擊的可能
    // $sql = "SELECT * FROM cust";
    // $sql = "SELECT id,tel,cname,birthday FROM cust";
    // 新增別名方式: cname contname ,下面while$row->cname要更改contname
    $sql = "SELECT id,tel,cname as 'cont-name',birthday FROM cust";
    $result = $mysqli->query($sql);
    // var_dump($stmt);

    // 查看目前幾筆資料
    echo $result->num_rows . "<br />";

    // fetch_object()撈取資料,一次只能撈一筆
    // $row = $result->fetch_object();
    // echo "{$row->id}:{$row->cname}:{$row->tel}:{$row->birthday} <br/>";
    // $row = $result->fetch_object();
    // echo "{$row->id}:{$row->cname}:{$row->tel}:{$row->birthday} <br />";

    // 使用while迴圈尋訪全部的資料
    // ------物件招:
    // while($row = $result->fetch_object()){
    //     echo "{$row->id}:{$row->{'cont-name'}}:{$row->tel}:{$row->birthday} <br/>";
    // }

    // ------陣列招:
    // 存取方使用while迴圈顯示array內容
    // 共有兩種存取方式 [0][1][2]..、['id']['cname']..
    // var_dump($row);
    // 顯示內容 : // array(8) { [0]=> string(1) "1" ["id"]=> string(1) "1" [1]=> string(3) "Ben" ["cname"]=> string(3) "Ben" [2]=> string(3) "123" ["tel"]=> string(3) "123" [3]=> string(10) "1992-02-05" ["birthday"]=> string(10) "1992-02-05" }
    // while( $row = $result->fetch_array() ){
    //     echo "{$row['id']}:{$row['cname']}:{$row['tel']}:{$row['birthday']} <br/>";
    // }


    // ----------------------------------------
    // 明碼綁定方式:
    // $stmt = $mysqli->prepare($sql);
    // $stmt->execute();
    // // 存儲結果
    // $stmt->store_result();
    // // 查詢比數
    // echo $stmt->num_rows() . "<br/>";
    // // 綁定結果,    $sql = "SELECT * FROM cust";要把*星號拿掉,否者無法綁定
    // $stmt->bind_result($id,$tel,$cname,$birthday);
    // while ($stmt->fetch()){
    //     echo" {$id}:{$tel}:{$cname}:{$birthday}<br/>";
    // }
    // // 將結果釋放掉
    // $stmt->free_result();
    // // 清除結果
    // $stmt->close();
?>