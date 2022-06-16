<?php

    // https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx

    //// 要開始抓資料
    include('sql.php');

    // 透過抓取頁面內的資料=爬蟲
    $json = file_get_contents("https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx");
    // 檢查抓取回來資料,頁面原始碼查看
    // echo $json;

    // 解析JSON格式的資料_取得該資料是array或者object物件資料
    // 方法1:($json,true) 以範例來說撈取的是array陣列
    // $data = json_decode($json,true);
    // 方法2:($json,false) 以範例來說撈取的是object物件
    $data = json_decode($json,false);
    // var_dump($data);

    // 插入資料內容
    $sql = "INSERT INTO food(`name`,addr,tel,city,town,pic,lat,lng)".
    " VALUE(?,?,?,?,?,?,?,?)";
    // prepare回傳該物件的實體
    $stmt = $mysqli->prepare($sql);
  
    // 跑尋訪將資料取出編輯
    foreach ($data as $row ){
        echo "{$row->Name} {$row->Address} {$row->Tel} <br /> \n" ;
          // bind_param綁定參數 ('s')代表8個參數都是字串string,(參數變數)
          // $row->對應原資料JSON物件中的欄位名稱,並不是資料庫內的
        $stmt->bind_param('ssssssss',
        $row->Name,$row->Address,$row->Tel,
        $row->City,$row->Town,$row->PicURL,$row->Latitude,$row->Longitude);
        // 執行後資料庫會新增其內容
        $stmt->execute();
    }
    


?>