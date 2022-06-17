<?php
    // 檢查帳號是否已存在,去資料庫找account帳號,1代表找到,0代表沒有找到
    // ! 若是不存在 就給她顯示-1
    if(!isset($_GET['account'])) echo -1;
    include("sql.php");
    $account = $_GET['account'];
    $sql = "SELECT account FROM member WHERE account = '{$account}'";
    $result = $mysqli->query($sql);

    // 顯示行數,先測試是否有成功
    echo $result->num_rows;

?>