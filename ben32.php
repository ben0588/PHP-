<?php
    // 匯入本地既有的圖片('路徑/檔名')
    $gd = imagecreatefromjpeg('images/001.jpg');

    // 目標給予圖片 浮水印
    $yellow = imagecolorallocate($gd,255,255,0);
    imagefttext($gd,36,10,170,250,$yellow,'fonts/ben.otf','Hello.World');
    
    // 輸出
    // 第一行只能是<?php 若是其他則是代表有輸出(HTML輸出),不可以
    // <?php 內也不能有echo 顯示,否者也會顯示不完全
    // 輸出圖像($目標畫布)
    header( 'Content-type:image/jpeg');
    imagejpeg($gd);
    // 另存新檔($目標畫布,'存檔路徑')
    imagejpeg($gd,'images/ben.jpg');


    // 清除
    imagedestroy($gd);
?>