<?php
    $upload = $_FILES['upload'];
    // echo gettype($upload); //檢查資料型態

    // 目標是error要等於0正常的
    foreach($upload['error'] as $k => $v){
          // 尋訪目標是error等於0(檔案正常)的情況下才要使用當中的value值
        if ($v == 0 ){
            // 因為要保留原檔案,最後存進去才使用['name']
            move_uploaded_file($upload['tmp_name'][$k],"upload/{$upload['name'][$k]}");
            echo "OK";
        }else{
            echo"NO";
        }
    }
    // var_dump($upload); // 查看後是二維陣列
?>