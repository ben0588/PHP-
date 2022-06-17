<!-- 主畫面 登陸後保持會員狀態頁面 -->
<?php
    include('sql.php');

    // spl_autoload_register自動註冊
    spl_autoload_register( function($className){
        // require_once 載入完只會跑一次
        require_once $className . '.php';
    });
    //啟動session
    session_start();
    
    if(!$_SESSION['member']) header("Location:login.php");
    $member = $_SESSION['member'];
    $cart = $_SESSION['cart'];
    
    // 取得頭像
    // $icon = $member->icon;
    // 由於資料庫icon是base64編碼,要增加base64_encode()語法編譯
    $icon = base64_encode($member->icon);
    
    // 下SQL查詢指令撈資料
    $sql = "SELECT * FROM food ORDER BY id";
    // query下完sql指令後會返回物件,所以要新增變數存放
    $result = $mysqli->query($sql);
?>
<h3>主畫面 登陸成功後保持會員狀態頁面</h3>
<h1>Welcom,<?php echo $member->realname ?></h1>
<!-- 登陸成功後顯示會員帳號 -->

<!-- 圖片取得base64格式固定方法 -->
<!-- src="資料格式;編碼方式,顯示內容" -->

<!-- image/jpeg 這邊會寫成變數方式,因為圖片還有很多格式,比如x-icon、image/png、 image/gif -->
<!-- <img src="data:image/jpeg;base64,<?php echo $icon ?>" alt=""> -->
<!-- 若是資料中新增新欄位icontype(varchar型態),變成抓取資料時直接將上傳的type -->
<img src="data:<?php $member->icontype ?>;base64,<?php echo $icon ?>" alt="">

<!-- 點擊後會登出跳轉到登陸頁面 -->
<a href="logout.php">登出Logout</a>

<!-- 因上課關係所以使用border,正常要給予css -->
<Table border="1" width="100%">
    <tr>
        <th>Name</th>
        <th>tel</th>
        <th>City</th>
        <th>Town</th>
        <th>Image</th>
    </tr>
        <?php
            while($food = $result->fetch_object()){
                echo "<tr>";
                echo "<td> {$food->name}</td>";
                echo "<td> {$food->tel}</td>";
                echo "<td> {$food->city}</td>";
                echo "<td> {$food->town}</td>";
                // 因為資料庫抓取的圖片網址是外部的url,所以才可以這樣使用
                echo "<td> <img src='{$food->pic}' height='100px'/></td>";
                echo "</tr>";
            }
        ?>
</Table>