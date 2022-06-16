<?php
    // 若是只寫一個,其他都會一併傳送,或者可以全部寫出來
    if (isset($_POST['account'])){
        $account = $_POST['account'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $realname = $_POST['realname'];

        // 連線資料庫
        $mysqli = new mysqli('localhost','root','','ispan',3306);
        // 設定編碼方式:
        $mysqli->set_charset('utf8');
        // 塞入資料
        $sql = "INSERT INTO member (account,passwd,realname)" ." 
        VALUE('{$account}','{$password}','{$realname}')";
        // 
        if ($mysqli->query($sql)){
            header("Location: ben53.php");
        }else{
           
        }
    

    }

?>
<!-- 目標:拿到資料直接處理,所以不寫action -->
<form method="POST">

    Account:<input type="text" name="account" /><br/>
    Password:<input type="password" name="password" /><br/>
    Realname:<input type="text" name="realname" /><br/>
    Add<input type="submit" name="Add" /><br/>

</form>