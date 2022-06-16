Page 2
<br/><hr/>
<?php
    include('bendapis.php');
    // 有些php.ini會打開,但是不管都直接寫就好
    // session打開,用來紀錄
    session_start();
    $var = $_SESSION['var'];
    echo "{$var->sum()} : {$var->avg()}";
    // echo $var;

    // 以下是由上一頁變數更改成陣列時查看內容:
    // foreach ($var as $v){
    //     echo "{$v} <br/>";
    // }

    // 以下是上層存放物件時:

?>
<hr/>
<a href="ben59.php">Logout(釋放session)</a>