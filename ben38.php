<form action="ben39.php" method="get">
    Account:<input type="text" name="account"/><br/>
    Password:<input type="password" name="password"/><br/>
    Gender:
        <input type="radio" name="gender" value="m" checked/>Male
        <input type="radio" name="gender" value="f"/>Female<br/>
    Habbit:
        <!-- name="habbit"不加[]則會以最後勾選的value值傳出 -->
        <input type="checkbox" name="habbit[]" value="1">打電腦
        <input type="checkbox" name="habbit[]" value="2">打麻將
        <input type="checkbox" name="habbit[]" value="3">打籃球<br/>
        <input type="checkbox" name="habbit[]" value="4">游泳
        <input type="checkbox" name="habbit[]" value="5">聽音樂
        <input type="checkbox" name="habbit[]" value="6">出遊<br/>
    Icon: 
        <input type="file" name="icon" /><br/>
    
    <input type="submit" value="ok" />
    </form>