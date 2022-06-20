<?php


    include('sql.php');
    spl_autoload_register( function($className){
        require_once $className . '.php';
    });
    
    $myquery = new MyQuery($mysqli);
    $name =  $myquery->getProductData(500,'name');
    $city =  $myquery->getProductData(500,'city');
    
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