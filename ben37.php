<table border="1" width="100%">
    <?php
        
        $content = file("dir2/Fstdata.csv");
        // $i = index標頭等同[0],[1],[2],[3],[4]..
        // $line 等於對應的value值(以範例來說是一列)
        foreach ($content as $i => $line){

            // explode字串切割 以,為分割點
            $data = explode(',',$line);
            echo "<tr>";

            // 當[]=[0]時,撈取出第一排th粗標題
            if ($i ==0 ){
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
        }
    ?>
</table>