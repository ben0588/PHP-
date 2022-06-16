<?php
    // 取得輸入的file檔案名稱
    $filesname = $_REQUEST['filename'];
    // 取得輸入的textarea內容
    $content = $_REQUEST['content'];

    // 打開檔案(myfiles資料夾底下的(上方輸入的file檔案名稱),'w'不存在就會新增)
    $fp = fopen("myfiles/{$filesname}",'w');
    // 將取得輸入的textarea內容的變數$content寫入該檔按內
    fwrite($fp,$content);
    fclose($fp);    

    // 待錄影檔出現後檢查
    header("Location:myfiles/{$filesname}");

?>