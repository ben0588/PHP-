<?php
    // 當知道前端name的參數時:$_REQUEST
    // $account = $_REQUEST['account'];
    // $password = $_REQUEST['password'];
    // echo $account;
    foreach ($_REQUEST as $k => $v){ 
        // 如果$v資料姓名型態是array才另外處理
        if (gettype($v) == 'array'){
            // 印出$key
            echo $k . '<br/>';
            // 因為是array所以可以使用foreach將[]數字取出
            foreach($v as $h){
                echo "{$h} <br/>";
                // $v=key取出來等於是勾選哪個興趣方塊順序;
            }
        }else{
            echo "{$k} : {$v} <br />" ;
        }
    }   
?>