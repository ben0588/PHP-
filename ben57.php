<?php
    // 待物件方法:
    include('bendapis.php');
    // 有些php.ini會打開,但是不管都直接寫就好
    // session(雖宣)打開,用來紀錄
    session_start();
    
    // $var = rand(1,49);
    // $var = array(1,2,3,4,5);
    // $var = [1,2,3,4,5];

    // 放入物件方式:
    $var = new Student('test1',50,50,50);
    echo "{$var->sum()}:{$var->avg()} <br/>";

    // echo $var;
    // 將想要的內容值存放在_SESSION['內容']內容
    $_SESSION['var'] = $var;


    $var->setMath(200);

    // 存放SESSION後,後面的變數再放值就無法再更改;
    // 若是存放單值时,須注意SESSION時機
    // 陣列也無法透過該方式修改其內容值
    // $var =1000;
    // $var[2] =100;
?>
<hr/>
<a href="ben58.php">Next Page</a>