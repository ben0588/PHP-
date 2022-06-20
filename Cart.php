<?php
    class Cart {
        // 創建私人變數
        private $list; 
        // [] => [$pid] = qty
        //  商品id 商品價格
        private $memberId; // 會員id

        // 新增建構式
        function __construct($memberId){
        // 將購物車初始化成array陣列格式
        $this->list = array();
        $this->memberId = $memberId;
        }

        // array_key_exists 陣列key存在時
        // 新增商品
        function addProduct($pid,$qty){
            // 不存在的話就新增
            if(!array_key_exists($pid,$this->list)){
                $this->list[$pid] = $qty;
                return true;
            }else{
                // 存在就不新增
                return false;
            }
        }
        // 刪除商品
        function removeProduct($pid){
            // 商品id存在才刪除
            if(array_key_exists($pid,$this->list)){
                unset($this->list[$pid]);
            };
        }
        // 修改商品數量
        function ediProduct($pid,$qty){
            // 商品id存在才修改
            if(array_key_exists($pid,$this->list)){
                $this->list[$pid] = $qty;
                return true;
            }else{
                // 商品id不存在就不修改
                return false;
            }
        }

        // 取得商品列表
        function getList(){
            return $this->list;
        }

         // 取得會員ID
        function getMemberId(){
            return $this->memberId;
        }

        
    }

?>