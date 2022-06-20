<?php
    spl_autoload_register( function($className){
        require_once $className . '.php';
    });
    session_start();

    $cart = $_SESSION['cart'];
    $list = $cart->getList();
    foreach($list as $pid => $qty){
        echo "{$pid} : {$qty}<br />";
    }
?>
結帳頁面
<hr />
MemberID:<?php echo $cart->getMemberId(); ?><br/>
<button onClick="">確認送出</button>
<hr />