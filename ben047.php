<?php

// 未來可以用在會員系統
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



}

?>