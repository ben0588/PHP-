<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>


    function addProduct(){
        var pid = $('#pid').val();
        var qty = $('#qty').val();
        // console.log(pid +" "+ qty);

        // get設定傳遞 跟回來的函示
        $.get("addCartAJAX.php?pid="+pid+"&qty="+qty,
            // 用來顯示傳遞回來的data資料跟status狀態
            function(data,status){
                if(status == 'success'){
                    alert(data);
                }
            }); 
    }

</script>

<?php

    spl_autoload_register( function($className){
        require_once $className . '.php';
    });
    session_start();


    $cart = $_SESSION['cart'];
    $list = $cart->getList();



?>

<!-- // 因為要寫JS所以改成ID -->
Pid: <input type="text" id="pid" /><br />
Qty: <input type="number" id="qty" /><br />
<button onclick="addProduct()">Add</button>
<hr />
Page2
<hr />
MemberID:<?php echo $cart->getMemberId(); ?><br/>
<?php
    foreach($list as $pid => $qty){
        echo "{$pid}:{$qty} <br/>";
    }
?>
<hr />
<a href="ben62.php">上一頁</a>
<a href="cartEnd.php">結帳</a>