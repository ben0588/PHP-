<!-- 會員登出 -->
<?php
    // 啟動session
    session_start();
    // 摧毀session
    session_destroy();
    // 返回登入頁面
    header("Location:login.php");
?>