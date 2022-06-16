<?php
    // filename 來自form表單中的text輸入框用來另外命名檔案名稱
    // 因為使用者的可能使用不同的系統,其編碼方式不同(windows/map),所以建議要另存檔案而不是使用原檔案
    $filename = $_REQUEST['filename'];
    // 檔案接收是使用$_FILES(類型array)而不是GET、POST、REQUEST(此三種都是傳送字串類型)
    // 依照傳送的資料(類型array)
    $upload = $_FILES['upload'];
    // echo gettype($upload);


    // error:0正常,其他代碼有個不同的解釋,查看以下官方文件解釋
    // https://www.php.net/manual/en/features.file-upload.errors.php
    foreach ($upload as $k => $v){
        echo "{$k} : {$v} <br />";
    }
    // if 先做一段檢查error是否正常,0才執行
    if ($upload['error'] == 0){
        // move_uploaded_file()語言特性已包含檢查效果,所以前段if判斷可以不寫
        if (move_uploaded_file($upload['tmp_name'],"upload/{$filename}")){
            echo "Upload Success";
            // 另存成功將會印出成功
        }else{
            echo "Upload Failure";
            // 另存失敗則會跳失敗
        }
    }else{
        echo "Upload Failure";
    }
?>