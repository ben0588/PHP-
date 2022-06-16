<meta charset="UTF-8" />
<?php
    include('sql.php');
     
    // 撈資料
    // 判斷來自54.php的a href="54.php?editid={...}"有沒有抓取成功
    if(isset($_GET['editid'])){
        // 將該值放入變數
        $editid = $_GET['editid'];
        // 搜尋id值
        $sql = "SELECT * FROM member WHERE id ={$editid}";
        // 在sql伺服器中使用query方式使用上述$sql的mySQL語法去請求下指令
        $result = $mysqli->query($sql);
        // 下玩SQL指令後 fetch拿取 object物件 放入$會員新變數
        // 再透過下方value值給於顯示出來$member->(對應資料表欄位名稱)
        $member = $result->fetch_object();
    }

      

    // 檢查是否有獲取updateid值
    if(isset($_GET['updateid'])){
        $updateid = $_GET['updateid'];
        $account = $_GET['account'];
        $password = $_GET['password'];
        $realname = $_GET['realname'];
        // 判斷密碼長度沒有更動時執行 更改account、realname兩個值
        if (strlen(trim($password)) == 0){
            $sql = "UPDATE member SET account = '{$account}'," .
            "realname = '{$realname}' WHERE id = {$updateid}";
        }else{
            // 若有更改密碼時 更改account、realname、passwd三個值
            $passwd = password_hash($passwd, PASSWORD_DEFAULT);
            $sql = "UPDATE member SET account = '{$account}'," .
                "passwd = '{$passwd}', " .
                "realname = '{$realname}' WHERE id = {$updateid}";
        }
        if ($mysqli->query(($sql))){
            header("Location:ben53.php");
        }

    }

?>
Edit Profile<hr/>
<form method="GET">
    <!-- 因為要看到該效果要將POST改成GET,正常在操作時要用POST,然後將上方代碼$_GET改成$_REQUEST -->
    <!-- 因為最後修改完畢傳送出去是沒有id值(操作不完整),所以可以透過該方法增加id值,但用戶透過頁面原始碼看得到 -->
    <input type="hidden" name="updateid" value="<?php echo $member->id; ?>">
    <!-- 帳號跟暱稱給予value值 -->
    Account:<input type="text" name="account" value="<?php echo $member->account; ?>"/><br/>
    Password:<input type="password" name="password" /><br/>
    Realname:<input type="text" name="realname" value="<?php echo $member->realname; ?>"/><br/>
    Edit <input type="submit" name="Update" /><br/>

</form>