<?php   
?>

<form action="checkAccount.php" method="POST">
    <!-- 建構會員登錄樣式: -->
    <!-- 既有資料做登陸 -->
    <input type="text" name="account" id=""><br />
    <input type="password" name="passwd" id=""><br />
    <input type="submit" name="login" id="">

    <!-- 額外作業:另外製作註冊按鈕 -->
    <!-- 轉向的方法|轉址 -->
    <button  type="button" name="register" 
    onclick="location.href='register.php'">
    register</button>

</form>
