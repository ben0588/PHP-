<?php
    // 驗證會員登錄密碼是否相同

    include('sql.php');

    // spl_autoload_register自動註冊
    spl_autoload_register( function($className){
        // require_once 載入完只會跑一次
        require_once $className . '.php';
    });
    // 啟動ession
    session_start();

    // 沒有獲取到'account'name值就會轉回本地login.php檔案
    if(isset($_REQUEST['account'])) header("Location:login.php");

    $account = $_REQUEST['account']; 
    $passwd = $_REQUEST['passwd'];
    $sql = "SELECT * FROM member WHERE account = ? ";

    // prepare傳回資料庫中的account物件實體
    $stmt = $mysqli->prepare($sql);
    // stmt->綁定
    $stmt->bind_param('s',$account);
    // 執行
    $stmt->execute();

    

    // 取得result結果 (瑞繞)
    $result = $stmt->get_result();
    // 先排除帳號是否已存在,有才繼續跑執行
    if ($result->num_rows > 0){
        // 取得物件$member
        $member = $result->fetch_object();
        //先進行除錯檢查是否有正常抓取到資料,做驗證
        // echo "{$member->account}:{$member->passwd} <br/>";
        // 檢查密碼是否有正確
        if (password_verify($passwd,$member->passwd)){
            $_SESSION['member'] = $member;
            $_SESSION['cart'] = new Cart();
            header("Location:main.php");
        }else{
            // 沒有的話就傳回login頁面,也可以增加文字說明告知原因
            header("Location:login.php");
        }
    }else{
        // 沒有的話就傳回login頁面,也可以增加文字說明告知原因
        header("Location:login.php");
    }

?>