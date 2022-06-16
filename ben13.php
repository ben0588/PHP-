<?php 
    //for("初始化執行|不寫就不執行|變數寫外面也不用寫";(不寫永遠是true) ;"不寫就不執行")

    // 基本板
    for ($i = 0;$i < 10;$i++){
        echo " {$i} <br/>";
    };

    // 進階版
    // 將變數宣告放外面,('不用寫';;)
    $x = 0;
    for (;$x <10;$x++){
        echo "{$x} <br / >";
    };
    
    // 更進階版
    // 將變數宣告放外面,++放裡面('不用寫';;'不用寫')
    $y = 0;
    for (;$y<10;){
        echo "{$y} <br/>";
        $y++;
    }

    // 執行function進階版
    // for(1;2;3)第1、3不寫就不執行,也可以寫入function函示
    $r = 0;
    for (test1();$r<10;test2()){
        echo "{$r} <br/>";
        $r ++;
    };

    function test1(){
        echo "Test";
    };

    function test2(){
        echo "<hr/>";
    }

?>