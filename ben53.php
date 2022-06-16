<meta charset="UTF-8" />
<?php
    // 基本方法:
    // $mysqli = new mysqli('localhost','root','','ispan',3306);
    // $mysqli->set_charset('utf8');

    // 改使用匯入方式取代上方
    // sql.php檔案也只有上方兩段程式碼
    include('sql.php');

    // if+isset判斷若是先收到刪除的['deleid']指令,指向唯一值$id進行刪除
    // 最好前端加上再次確認的機制
    if (isset($_GET['deleid'])){
        $dilid = $_GET['deleid'];
        $sql = "DELETE FROM member WHERE id={$dilid}";
        $mysqli->query($sql);
    }

    $sql = "SELECT * FROM member";
    $result = $mysqli->query($sql);
?>
<script>
    // 使用confirm 跳出再次確認對話視窗
    function deleteConfirm(name){
        return confirm('Delete' + name + "?"   );
    }

</script>
<h1> TEST </h1>
<hr />
<a href="ben54.php">Add New Member</a>
<table border="1" width="100%">
    <tr>
        <th>Account</th>
        <th>Realname</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
    <?php
        while($member = $result->fetch_object()){
            echo "<tr>";
            echo "<td>{$member->account}</td>";
            echo "<td>{$member->realname}</td>";
            // 先製作一個刪除按鈕,指定唯一值$id
            // 增加再次確認機制onClick='return false;'
            // deleteConfirm(\"{$member->realname}\"); 方法給的是字串方式,所以要用跳脫字元包住
            echo "<td><a href='?deleid={$member->id}'".
            // onClick記得要整段換行
            "onClick='return deleteConfirm(\"{$member->realname}\");'>Del</a></td>";

            // 編輯修改資料
            // href到另一個檔案做編輯按鈕?editid={$member->id}對應資料庫唯一id值
            echo "<td><a href='ben55.php?editid={$member->id}'>Edit</a></td>";
            echo "</tr>";
            // 頁面原始碼增加間隔
            echo "\n";
        }   
    ?>
</table>
