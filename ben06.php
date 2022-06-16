送出表單=>傳送07.php中
<!-- 向ben07.php傳送表單資料 -->
<form action="ben07.php">
    <input type="text" name="x" />
    +
    <input type="text" name="y"/>
    <input type="submit" value="=">
    <!-- 將表單內資料傳送至對應php檔案 -->
</form>

送出表單=>傳送本表單中
<?php
    // 將變數資料型態初始預設成字串
    $x = $y = $r =  $op ='';
    // 條件當獲取到x跟y的name值才會進行以下運算
    if (isset($_GET['x']) && isset($_GET['y'])){

        $x = $_GET['x']; $y = $_GET['y'];

        // 分別將name='x' and 'y'的值取出後加總成 $r
        // 新增$op變數存放選擇name值="op",利用switch定位其內value值做運算
        $op = $_GET['op'];
        switch ($op){
            case '1': $r = $x + $y; break;
            case '2': $r = $x - $y; break;
            case '3': $r = $x * $y; break;
            case '4': $r = $x / $y; break;
        };
        
    };

?>
<!-- 輸入內容送出表單後在同一頁印出結果-->
<form action="ben06.php">
    <!-- 將文字輸入後的內容持續顯示出來,所以新增value值=""-->
    <input type="text" name="x" value="<?php echo $x; ?>">
    <select name="op" id="">
        <!-- 選項新增value值配合switch做value定位,然後做判斷有的話選擇selected-->
        <option value="1" <?php echo ($op=='1')? 'selected':''; ?>>+</option>
        <option value="2" <?php echo ($op=='2')? 'selected':''; ?>>-</option>
        <option value="3" <?php echo ($op=='3')? 'selected':'';?>>*</option>
        <option value="4" <?php echo ($op=='4')? 'selected':''; ?>>/</option>
    </select>
    <input type="text" name="y" value="<?php echo $y; ?>">
    <input type="submit" value="=">
    <!-- 將運算式結果echo顯示出來-->
    <span><?php echo $r ; ?></span>
</form> 