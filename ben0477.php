<?php
    // 未來可以用在會員系統
    class Student {
        // 建立四個變數:姓名,數學,國文,英文成績
        private $name,$ch,$eng,$math;

        // 建構程式初始化,從外輸入參數進來後 存放該物件的private屬性中
        function __construct($name,$ch,$eng,$math){
            $this->name = $name;
            $this->ch = $ch;
            $this->eng = $eng;
            $this->math = $math;
        }
        
        // 取得姓名方法:
        function getname (){
            return $this->name;
        }

        // 計算總成績方法:
        function sum (){
            return $this->ch + $this->eng + $this->math;
        }

        // 計算平均成績方法:
        function avg(){
            // 因為成績加總有三個所以/3
            return $this->sum() / 3 ;
        }
    }
?>