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
    

    // 透過SQL指令查詢底下共有幾筆資料
    // 不建議設定成撈取資料時透過裡面變數改筆數,
    // 會造成web sever撈取龐大的資料但無效率,比如撈0~10000但是只要其中5筆
    $sql = "SELECT count(*) as `sum` FROM food";
    $result = $mysqli->query($sql);
    $data = $result->fetch_object();
    $total = $data->sum;
    // 定義一頁要顯示幾筆資料,範例一頁10筆
    define('RPP',10);
    $rpp = RPP;

    // 設定成若有獲取到就依照a標籤的?page=給參數,否則就是預設值1
    // 設定頁數
    $page = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }

    //設定上一頁跟下一頁功能變數
    // $prev = $page -1;
    // $next = $page +1;
    // 設定上一頁,如果頁數=1 保持1 否則-1(為避免0)
    $prev = $page ==1? 1:$page-1;
    // 設定下一頁(為避免超過共有頁數)
    $totalPages = ceil($total/$rpp);
    $next = $page ==$totalPages? $page:$page+1;

    $start = ($page -1) * $rpp;
    // LIMIT 12 = 1~12 , LIMIT 1,12的1代表起始值,12代表要顯示的列數
    $sql = "SELECT * FROM food ORDER BY id LIMIT {$start},{$rpp}" ;
    // query下完sql指令後會返回物件,所以要新增變數存放
    $result = $mysqli->query($sql);


    // // 下SQL查詢指令撈資料
    // $sql = "SELECT * FROM food ORDER BY id";
    // // query下完sql指令後會返回物件,所以要新增變數存放
    // $result = $mysqli->query($sql);
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

<hr/>
<!-- 點擊後會登出跳轉到登陸頁面 -->
<a href="logout.php">登出Logout</a>

<hr/>
<!-- 製作分頁按鈕 -->
<!-- <a href="?page=">上一頁Prev</a> | <a href="?page=">下一頁Next</a> -->

<!-- 製作分頁按鈕(塞入php變數) -->
<a href="?page=<?php echo $prev; ?>">上一頁Prev</a> |
 <a href="?page=<?php echo $next; ?>">下一頁Next</a>

<!-- 因上課關係所以使用border,正常要給予css -->
<Table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>tel</th>
        <th>City</th>
        <th>Town</th>
        <th>Image</th>
    </tr>
        <?php
            while($food = $result->fetch_object()){
                echo "<tr>";
                echo "<td> {$food->id}</td>";
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