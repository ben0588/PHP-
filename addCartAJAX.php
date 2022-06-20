<?php
    spl_autoload_register( function($className){
        require_once $className . '.php';
    });
    session_start();

    $cart = $_SESSION['cart'];
    $pid = $_GET['pid'];
    $qty = $_GET['qty'];

    $cart->addProduct($pid,$qty);

    // 用來除錯用
    $list = $cart->getList();
    foreach($list as $pid => $qty){
        echo "{$pid}:{$qty} \n";
    }

?>