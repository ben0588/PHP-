<?php

    class Bike {
        // 新增var 變數$
        // var $speed;

        // 封裝private私有變數$,這樣外部就無法透過給值修改 
        private $speed;

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

?>