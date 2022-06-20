<?php
    class Cart {
        // 創建私人變數
        private $list; 
        // [] => [$pid] = qty
        //  商品id 商品價格
        private $memberId; // 會員id

        // 新增建構式
        function __construct(){
        // 將購物車初始化成array陣列格式
        $this->list = array();
        $this->memberId = array();
        }
        // 新增商品
        function addProduct($pid,$qty){

        }
        // 刪除商品
        function removeProduct(){

        }
        // 修改商品數量
        function ediProduct(){

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