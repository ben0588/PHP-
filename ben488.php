<!-- 建立編碼方式 -->
<meta charset="UTF-8" />
<?php
    // 建立資料庫連接使用,建立完畢記得用if判斷是否有連接成功
    $mysqli = new mysqli('localHost','root','','ispan',3306);
    // ('localhost(本地主機)','資料庫帳號','資料庫密碼','資料庫名稱',pout號)

    // 建立mysql資料庫編碼方式:set_charset('utf8')
    $mysqli->set_charset('utf8');

    // 方法1:不推薦 (若是不用給使用者輸入可使用此方式)
    // 向mysql資料庫下指令後放入$sql變數
    // $sql = "INSERT INTO cust(cname,tel,birthday) VALUES ('test1','0964','1992-3-5')";
    // 資料表參數因為id有設定ai產生所以不加入,此三種都是字串類型所以VALUES是''字串
    // 以上方法可能會被隱碼攻擊的風險,所以盡量不要使用

    // 向資料庫MYSQL發送一次存好的$sql指令,如果成立就執行
    // if ($mysqli->query($sql)){}
    // 若頁面無錯誤提示,請到資料內查看資料

    // 避免隱碼攻擊的方法:
    // 向MYSQL下指令的VALUES(?,?,?)給於問號方式
    $cname ='Test2'; $tel ='777';$birthday='19992-03-4';
    $sql = "INSERT INTO cust(cname,tel,birthday) VALUES (?,?,?)";
    // prepare預先準備一個待執行的SQL指令:
    $stmt = $mysqli->prepare($sql);
    // 查看有成功拿回一個物件實體,繼續執行:
    // var_dump($stmt);
    // 綁定參數,按照SQL語法從左到右屬性類別,sss就是三個變數都是字串,避免被隱碼攻擊
    $stmt->bind_param('sss',$cname,$tel,$birthday);
    // 執行
    $stmt->execute();
?>