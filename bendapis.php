<?php
    // define('LETTERS','ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    define('LETTERS','ABCDEFGHJKLMNPQRSTUVXYWZIO');
    
    // 字串function
    // 練習:驗證身分證是否正確
    function checkTwId($id){
        // 1.length:10 身分證10碼
        // 2.首碼是英文大寫
        // 3.第1碼要1或者2
        // 4.第2~9碼為 數字
        // 5.第10碼為 檢查碼

       
        // $result = false;
        // // preg_match 比對('/指定內容/',檢查目標(以範例來說輸入值))
        // // '/^[A-Z][12][0-9]{8}$/' 代表^開始$結束
        // if (preg_match('/^[A-Z][12][0-9]{8}$/',$id)){
        //     $result = true;
        // };

        // 驗證碼
        // 把第一碼英文字母抽出
        $result = false;
        // preg_match 比對('/指定內容/',檢查目標(以範例來說輸入值))
        // '/^[A-Z][12][0-9]{8}$/' 代表^開始$結束
        if (preg_match('/^[A-Z][12][0-9]{8}$/',$id)){
            // 取第一個字
            // substr(0,1) 取字串範圍0~1
            // strpos($總內容,$目標值) 取字串包含$目標值
            $c1 = substr($id,0,1);
            $n12 = strpos(LETTERS,$c1) +10;
            // echo $n12;
            // 驗證是否正確
            // 依照身分證驗證碼維基百科條件
            $n1 = (int)($n12 /10);
            $n2 = $n12 % 10;
            $n3 = substr($id,1,1);
            $n4 = substr($id,2,1);
            $n5 = substr($id,3,1);
            $n6 = substr($id,4,1);
            $n7 = substr($id,5,1);
            $n8 = substr($id,6,1);
            $n9 = substr($id,7,1);
            $n10 = substr($id,8,1);
            $n11 = substr($id,9,1);
            $sum = $n1*1+$n2*9+$n3*8+$n4*7+$n5*6+$n6*5+
            $n7*4+$n8*3+$n9*2+$n10*1+$n11*1;
            $result = $sum % 10 == 0;
        };

        // 方法1:
        // 1.文字長度==10才執行
        // if (strlen($id) == 10){
        //     //2.取第一碼位置;
        //     $c1 = substr($id,0,1);
        //     if (strpos(LETTERS,$c1) !== false){

        //     }

        // }
        return $result;
    };


    // 練習建立隨機產生並且合理的身分證字號
    
    // 定義function

    // 產生1或2並且傳送到下層Gender
    function createTWIdByRandom(){
        $gender = rand(1,2) == 1;
        return createTWIdByGender($gender);
    };

    // Gender判斷是否男女並且賦予地區碼A~Z
    function createTWIdByGender($gender=false){
        // substr隨機取變數LETTERS(0~25)只取一個
        $area = substr(LETTERS,rand(0,25),1);
        return createTWIdByBoth($area,$gender);
    };

    // 取地址不變,只產生1或者2用來判斷男生女生 後傳送到最後Both用於判斷
    function createTWIdByArea($area='B'){
        $gender = rand(1,2) == 1;
        return createTWIdByBoth($area,$gender);
    };

    // 依照姓名跟地區產生
    // 寫在參數條件多的那邊,維護性高(出bug只要檢查這個)
    function createTWIdByBoth($area,$gender){
        // 先將$地區碼放進去$新變數
        $tempId = $area;
        // 再使用 .=字串相加$性別碼
        $tempId .= ($gender? '1':'2');
        // 扣掉前面地區碼跟性別碼後,後面還有8碼,但最後是驗證碼,所以跑1~7碼
        for ($i=0;$i<7;$i++){
            // 亂數產生0~9取7碼,做字串相加.=
            $tempId .= rand(0,9);
        }
        // 測試產生跑一組身分證(1~9碼)後,最後1碼(第10碼)是否驗證正確
        for ($i=0;$i<=9;$i++){
            // 模擬相加時跑上面$id先用.組合,當成功true才會跑下方字串相加.=
            if (checkTwId($tempId . $i)){
                // 如果驗證成功(true)才相加上去
                $tempId .= $i;
                break;
            }

         //最後才將結果return出去
        }return $tempId;       
    }


    class Student {
        private $name,$Mandarin,$English,$Mathematics;
  
        function __construct($name,$Mandarin,$English,$Mathematics){
            $this->name = $name;
            $this->Mandarin = $Mandarin;
            $this->English = $English;
            $this->Mathematics = $Mathematics;
        }

        function getName (){
            return $this->name;
        }

        function sum (){
            return $this->Mandarin + $this->English + $this->Mathematics;
        }

        // 多加個int可以變成整數
        function avg (){
            return (int)($this->sum() /3);
        }

        // 增加碼表功能
        function setMath($math){
            $this->math =$math;
        }



    }


    
?>