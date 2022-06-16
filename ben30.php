<?php
    // 1.產生畫布
    // 2.作畫
    // 3.輸出(browser / file)
    // 4.清除 

    // 產生畫布(長,寬)
    // 1.基本
    // $gd = imagecreate(400,20);
    // 2.進階
    
    // 寫成新方法,透過在網址?後面傳輸給值當作修改
    $rate = $_GET['rate'];
    // $rate = rand(1,99);
    // $rate = 30;  // 目標增加彈性:50%
    $width = 400;
    $gd = imagecreate($width,20);

    // 調色盤($畫布,顏色)
    $red = imagecolorallocate($gd,255,0,0);
    // 填滿 將畫布$gd , 0,0 基本都是從左上角開始算,長,寬,最後填滿的是顏色$red
    imagefilledrectangle($gd,0,0,400,20,$red);

    // 在疊一層
    $red1 = imagecolorallocate($gd,255,255,0);
    // 彈性調整寬改成以下($width*$rate/100)
    imagefilledrectangle($gd,0,0,$width*$rate/100,20,$red1);

    // 宣告輸出內容的格式為圖片

    header( 'Content-type:image/jpeg');
    // 輸出
    // 第一行只能是<?php 若是其他則是代表有輸出(HTML輸出),不可以
    // <?php 內也不能有echo 顯示,否者也會顯示不完全
    imagejpeg($gd);

    // 清除
    imagedestroy($gd);
  
?>