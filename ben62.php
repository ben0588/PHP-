<?php
    spl_autoload_register( function($className){
        require_once $className . '.php';
    });
    session_start();

    $cart = new Cart('007');
    $_SESSION['cart']=$cart;

    $cart->addProduct(12,100);
    $cart->addProduct(23,47);
    $list = $cart->getList();


?>
Page1<br/>
<hr />
MemberID:<?php echo $cart->getMemberId(); ?><br/>
<?php
    foreach($list as $pid => $qty){
        echo "{$pid}:{$qty} <br/>";
    }
?>
<hr />

<a href="ben63.php">下一頁</a>