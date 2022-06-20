<?php

    class Bike {
        // 新增var 變數$
        // var $speed;

        // 封裝private私有變數$,這樣外部就無法透過給值修改 
        // private $speed;

            // 改寫成protected保護性,引用類別可以使用該屬性
            protected $speed;

        // PHP的建構程式,通常給予變數與function中間新增
        function __construct(){
            // 給予變數初始化值
            $this->speed = 0;
            // 用來檢查是否有呼叫正常
            // echo "Bike()";
        }

        // 定義方法:給予加速
        function upSpeed(){
            $this->speed = $this->speed<1? 1:$this->speed*1.2;
        }

        // 定義方法:給予減速
        function downSpeed(){
            $this->speed = $this->speed<1? 0:$this->speed*0.7;

        }

        // 自定義給外層讀取speed的屬性方法
        function getSpeed(){
            return $this->speed;
        }
    }

    $myBike = new Bike();
    // 用來查看其內容值,看不到裡面的方法:
    // var_dump($myBike);
    // object(Bike)#1 (1) { ["speed"]=> int(0) }

    // 目標:讓他跑到10就停
    // $i = $myBike->upSpeed();
    // for ($i ;$i  <10;$i++) {
    //     echo " myBike_speed: {$myBike->getSpeed()} <br />";
    // }
    $myBike->upSpeed();
    $myBike->upSpeed(); 
    $myBike->upSpeed();
    $myBike->upSpeed();
    $myBike->upSpeed();

    // 透過給予值直接修改內容稱做屬性失控,因為應只能透過方法(upSpeed、downSpeed)去改變速度
    // 為避免上述情況,在物件中的屬性要給於封裝private $speed;
    // 再次察看就會出現 Fatal error: Bike::$speed(無法存取)
    // $myBike->speed =10;
    // echo " myBike_speed: {$myBike->speed} <br />";
    echo " myBike_speed: {$myBike->getSpeed()} <br />";
    echo "<hr />";
    $urBike = new Bike();
    $urBike->upSpeed();
    $urBike->upSpeed();
    $urBike->upSpeed();
    $urBike->upSpeed();
    echo " urBike_speed: {$urBike->getSpeed()} <br />";



    echo "<hr />";
    // 繼承引用類別的屬性&方法,但不破壞原類別屬性,可以重用改寫
    class Scooter extends Bike {
        
        // 改寫加速方法
        function upSpeed(){
            $this->speed = $this->speed<1? 1:$this->speed*3.2;
        }

        // 改寫減速方法
        // 不與原類別方法名稱相同時,增加V2這樣就雍有兩種方法(原類別、新類別) 但是不推薦使用
        function downSpeed(){
            $this->speed = $this->speed<1? 0:$this->speed*0.2;
        }

        function getSpeed(){
            return $this->speed ."km";
        }

         // 用來改寫延伸加強新功能,例如指定只有特殊會員雍有的功能
        function gas(){
            echo "gas()";
        }
    }

    $b1 = new Bike();
    $s1 = new Scooter();
    $b1->upSpeed();$b1->upSpeed();$b1->upSpeed();$b1->upSpeed();
    $b1->downSpeed();$b1->downSpeed();

    $s1->upSpeed();$s1->upSpeed();$s1->upSpeed();$s1->upSpeed();
    $s1->downSpeed();$s1->downSpeed();
    echo $b1->getSpeed() . "<br />";
    echo $s1->getSpeed() . "<br />";
    // instanceof 用來除錯, 用來$b1是不是一台Bike
    // 用來判斷 $變數 是不是 對應Class
    if ($s1 instanceof Scooter){
        echo "OK";
    }else{
        echo "NO";
    }

    echo "測試中 <hr />";
    ///////////測試中

    class Ben{
    }

    $ben = new Ben();
    // 宣告進入的類別,只有Bike類別的 is a 的關係,才能進來
    // php7以後才支援基本型別的限制,但是此方法類別都可以用
    function test1(Bike $obj){
        // 此用此方法就可以使用所有屬於Bike類別的方法
        echo $obj->getSpeed() . "<br/>";

        // 用來改寫延伸加強新功能
        if ($obj instanceof Scooter){
            $obj->gas();
        }
    }
    
    
    test1($b1);
    test1($s1);
?>