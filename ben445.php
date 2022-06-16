<?php
    // 獲取input type=file的name值
    $fs = $_FILES['upload'];
    // var_dump 看內容,$_FILES是個二維陣列,看完關掉
    var_dump($fs);    

    // 尋訪主要是檢查error等於0才是正常檔案
    foreach($fs['error'] as $k => $v){
        // echo "{$k}:{$v} <br/>";
        if($v ==0){
            // if成立時才執行move_uploaded_file($fs['tmp_name'])
            // ['tmp_name']=上傳成功後存在(Apache)web server中的檔案路徑
            // ['tmp_name'][$k] 因為'tmp_name'之下的陣列有包含檔案目錄,所以要加上[$k]
            if(move_uploaded_file($fs['tmp_name'][$k],
            // ['name'][$k] 因為要保留原檔名,因為'name'之下的陣列有包含檔案名稱,所以要加上[$k]
            "dir1/{$fs['name'][$k]}")){
            };
        }
    }
?>