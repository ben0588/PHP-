<!-- 這支可以寫在外面 -->
<meta charset="utf-8" />
<?php
    include("sql.php");

    // 有的話代表以送出內容
    if(isset($_REQUEST["account"])){
        $account = $_REQUEST['account'];
        $passwd = password_hash($_REQUEST['password'],PASSWORD_DEFAULT);
        $realname = $_REQUEST['realname'];


        // ---------上傳icon---------
        // 因為資料表預設是null值
        $icon = null;

        // 增加抓取icon的資料型態
        $icontype = null;
        // 判斷檔案是否正常
        if($_FILES['icon']['error'] == 0){
            // 使用file_get_content直接讀檔,要的是['tmp_name']以存在的檔案
            // addslashes() 在定義前會加上反斜槓符號
            // 其他GET、POST、COOKIE 這三個會自動轉換,所以不用addslashes()轉換
            $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));
            $icontype = $_FILES['icon']['type'];
            
            // 若要將圖片存成文字方式:(待實作)
            // $icon = base64_encode(addslashes(file_get_contents($_FILES['icon']['tmp_name'])));
         
        }

        $sql = "INSERT INTO member(account,passwd,realname,icon,icontype) VALUE " .
        "('{$account}','{$passwd}','{$realname}','{$icon}','{$icontype}')";

  
        if($mysqli->query($sql)){
            //成功返回login.php送回資料
            header("Location:login.php");
        }else{
            echo "ERROR: ". $sql;;
        }
    }

?>
<!-- 註冊表 -->
<h3>會員註冊表<h3>
<script>
    // 創建AJAX物件
    var xhttp = new XMLHttpRequest();

    // 檢查新帳號是否重複
    function checkNewAccount(){
        //// 取得使用者輸入的內容存放在變數內
        var account = document.getElementById('account').value;

        // 1.事先定義物件,如果該物件狀態改變時,呼叫function(call back)
        xhttp.onreadystatechange = function(){
        // 最後狀態進度==4時 and 狀態==200
        if(xhttp.readyState == 4 && xhttp.status == 200){
            // responseText從後端回來的資料,定義0跟1
            if(xhttp.responseText !=0){
                //帳號重複
                document.getElementById('mesg').innerHTML='帳號重複';
            }
            else{
                // 帳號不重覆顯示
                document.getElementById('mesg').innerHTML='帳號可以使用';
            }
        };
    };
        // 連接後端("方法","後端檔案.php?參數名="+取得資料變數 ,是否非同步)
        // 取得回來呼叫上方
        xhttp.open("GET","isNewAccount.php?account=" + account ,true)
        // 發送請求
        xhttp.send();
    }
</script>
<form method="POST" enctype="multipart/form-data">

    <!-- 目標當註冊時輸入帳號直接檢查是否已存在,顯示在mesg內 -->
    <!-- onchange處理ajax特性 -->
    Account:<input type="text" id="account" name="account" onchange="checkNewAccount()" />
    <span id="mesg"></span>
    <br />
    Password:<input type="password" name="password"/><br />
    Realname:<input type="text" name="realname"/><br />
    Icon:<input type="file" name="icon"/><br />
    <input type="submit" value="Register"/><br />

</form>