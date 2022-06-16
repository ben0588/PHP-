<?php
date_default_timezone_set('Asia/Taipei'); // 日期預設時區(亞洲台北)
    $dir = 'dir2';
?>
<table border="1" width="100%">
    <tr>
        <th>test1</th>
        <th>test2</th>
        <th>test3</th>
    </tr>
    <?php
       $dir2 = opendir($dir);
       while ($filename = readdir($dir2)){ 
            echo "<tr>";
            echo "<td> {$filename} </td>";
            
            if (is_dir("{$dir}/{$filename}")){
                    echo "<td>isDir</td>";
            }
            if (is_file("{$dir}/{$filename}")){
                    echo "<td>isFile</td>";
            }

            $size = filesize("{$dir}/{$filename}");
                echo "<td>{$size} bytes</td>";

            $mtime = date('Y-m-d H:i:s',filemtime("{$dir}/{$filename}"));
            echo "<td>{$mtime}</td>";

            echo "</tr>";
        }
    ?>
</table>