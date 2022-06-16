<?php
    // 範例建立一個腳踏車
    class Bike {
        // 建立$變數
        var $spend;
        
        // 建立建構式__construct
        function __construct(){
            // 給於物件屬性初始化
            $this->speed = 0;

            //檢查是否呼叫建構式正常
            // echo "OK";
        }

        // 定義加速方法
        function upSpeed(){
            // 當speed <1 給於 1 或者 speed*1.2
            $this->speed = $this->speed<1? 1:$this->speed*1.2;
        }

        // 定義減速方法
        function downSpeed(){
            // 當speed <1 給於 1 或者 speed*0.7
            $this->speed = $this->speed<1 ? 0:$this->speed*0.7;
        }

        // 定義讓外層讀取屬性值
        function getSpeed(){
            return $this->speed;
        }


    }

    // new新物件放入$新變數
    $myBike = new Bike(); $urBike = new Bike();
    $myBike->upSpeed();
    $myBike->upSpeed();
    $myBike->upSpeed();
    $myBike->upSpeed();
    $urBike->upSpeed();
    $urBike->upSpeed();
    $urBike->downSpeed();
    echo $myBike->getSpeed();
    echo $urBike->getSpeed();
    echo "<hr/>";
    echo " myBike_speed: {$myBike->getSpeed()} <br />";
    echo " urBike_speed: {$urBike->getSpeed()} <br />";


?>