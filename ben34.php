<?php
    // 以下date相關變數都使用 (亞洲台北)時區
    date_default_timezone_set('Asia/Taipei');
    // !is_dir 用來判斷'dir2'資料夾是否已存在,!若是有就不執行
    if (!is_dir('dir2')){
        // 創建名稱dir2的目錄資料夾
        mkdir('dir2');
    }

    // 如果檔案不存在,就新增該檔案
    if(!is_file('dir2/file1')){
        touch('dir2/file1');
    }

    // 可透過修改該值查看其他目錄,若修改成"."就是該目錄底下所有檔案
    $dir = "dir2";

    

?>
<table border="1" width="100%">
    <tr>
        <th>filename文件名稱</th>
        <th>Dir/File目錄或檔案</th>
        <th>Size檔案大小</th>
        <th>filemtime修改日期</th>
    </tr>
    <?php
        $dir2 = opendir($dir);
        // readdir($指標變數)  讀取指定資料夾下文件
        while ($filename = readdir($dir2)){
            echo "<tr>";
            echo "<td>{$filename}</td>";
            // 用來判斷取資料夾的是否是dir(目錄)
            if (is_dir("{$dir}/{$filename}")){
                echo "<td>Directory</td>";
            }
            // 用來判斷取資料夾的是否是file(檔案)
            if (is_file("{$dir}/{$filename}")){
                echo "<td>Dir</td>";
            }
            // 相對路徑
            $size = filesize("{$dir}/{$filename}");
                echo "<td>{$size} bytes</td>";
            
            // 找出檔案修改時間
            $mtime = date('Y-m-d H:i:s',filemtime("{$dir}/{$filename}"));
            echo "<td>{$mtime}</td>";

            echo "</tr>";
        }
    ?>
</table>