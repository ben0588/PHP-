<?php

    $books = file_get_contents("books.xml");
    $xml = simplexml_load_string($books);
    var_dump($xml);

    echo "<hr/>";
    // getName 取得標籤名稱
    echo $xml->getName() . ":" . $xml->count();
    echo "<hr/>";
    foreach ($xml as $book){
        echo $book->getName() . ":". gettype($book) ."<br />";
    }

    echo "<hr/>";
    // 查看結構
    $attrs = $xml->book[0]->attributes();
    foreach ($attrs as $k =>$v){
        echo " {$k} : {$v} <br />";
    }

    echo "<hr/>";
    echo $xml->book[1]['isbn'] . "<br/>";
    echo $xml->book[1]['price'] . "<br/>";
    
     // 查看結構
    echo "<hr/>";
    $b0 = $xml->book[0]->children();
    foreach ($b0 as $k =>$v){
        echo " {$k} : {$v} <br />";
    }

    echo "<hr/>";
    // 正常這樣寫 (範例:茶作者)
    $b1 = $xml->book[0]->authors->author;
    foreach ($b1 as $k1 =>$v1){
        echo " {$k1} : {$v1} <br />";
    }




?>