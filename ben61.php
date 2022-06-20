<?php


    include('sql.php');
    spl_autoload_register( function($className){
        require_once $className . '.php';
    });

    
    $myquery = new MyQuery($mysqli);
    // 輸入搜尋 目標的對象, 對應 資料庫標籤名稱
    // $name =  $myquery->getProductData(500,'name');
    // $city =  $myquery->getProductData(500,'city');

        // 增加維護性改成以下,來自MyQuery.php新增常數後
        $name =  $myquery->getProductData(456,MyQuery::QUERY_NAME);
        $tel =  $myquery->getProductData(456,MyQuery::QUERY_TEL);
    
    echo "{$name}:{$city} <br/>";

    echo "<hr/>";
    $allAddr = $myquery->getAllAddress('addr like "%中市%"');
    foreach($allAddr as $address){
        // 因為資料是陣列但是元素是adder所以要用->adder
        echo "{$address->addr} <br/>";
    }
    // echo count($allAdder);
    echo "<hr/>";
    $allData = $myquery->getDataBbyKeyword('中正;中山');
    // var_dump($adata);
    foreach($allData as $data){
        echo "{$data->name}:{$data->tel}:{$data->addr} <br/>";
    }





?>