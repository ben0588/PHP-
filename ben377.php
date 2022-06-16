<table border="1" width="100%">
<?php
    // 取得檔案來自目錄dir2的Fstdata.csv檔案
    $count = file('dir2/Fstdata.csv');

    // 讀取後是array陣列方式:
    // var_dump($count);

    // 使用foreach方法巡防陣列內容
    foreach ($count as $k => $v){
        $data = explode(',',$v);
        echo "<tr>";
        if ($k == 0){
            echo "<th>{$data[1]}</th>";
            echo "<th>{$data[2]}</th>";
            echo "<th>{$data[5]}</th>";
            echo "<th>{$data[7]}</th>";
        }else{
            echo "<td>{$data[1]}</td>";
            echo "<td>{$data[2]}</td>";
            echo "<td>{$data[5]}</td>";
            echo "<td>{$data[7]}</td>";
        }
        echo "</tr>";
        // echo "{$k}:{$v} <br/>";
    }

?>
</table>