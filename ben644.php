<?php

    $books = file_get_contents("https://gis.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.xml"); 
    $xml = simplexml_load_string($books);


    echo "<hr/>";
    // 正常這樣寫 (範例:茶作者)
    // $b1 = $xml->Infos->Info->Name;
    // foreach ($b1 as $k => $v){
    //     echo " {$k}:{$v} <br />";
    // }

    // $b1 = $xml->Infos->Info[0]->Name;
    echo count($xml->Infos->Info) . "<br />";
    foreach ($xml->Infos->Info as $info){   
        echo " {$info->Name} <br />";
    }
?>