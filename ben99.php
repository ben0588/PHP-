<h1>九九乘法表</h1>
<hr/>
<table border="1" width="100%">

<?php 

    define('ROWS',2);  // 要幾個TR
    define('START',2); // 起始值
    define('COLS',4);  // 欄位

    // 給予兩個tr列
    for ($k =0;$k <ROWS;$k++){
        echo "<tr>";
        // $j = 2代表是從2x1開始 $<=5代表跑了四次(四欄位)(2/3/4/5)
        for ($j = START; $j < START+COLS;$j++){
            // $k第一圈0所以不加總,總共跑兩次(1/2)
            // $newJ =$j + ($k * 4) $k總共會跑2次
            // 因為第一層四個 2 3 4 5 下層應該是 6 7 8 9 各差4所有*4
            $newJ = $j + $k * COLS;
            // 紅藍 二分為一 用if,%2==0,先印出看效果
            // +$k 就會初始值+1跟+2 等於基偶顯示 2+1=3, 2+2=4
            if (($j+$k) % 2 == 0){
                echo '<td bgcolor="pink">';
            }else {
                echo '<td bgcolor="yellow">';
            }
            for ($i = 1;$i <= 9;$i++){
                $r = $newJ * $i;
                echo "{$newJ} x {$i} = {$r}<br />";
            };
            echo "</td>";
        }
        echo "<tr/>";   
    };
?>




</table>