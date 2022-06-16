<?php
    session_start();

    // 方法1:將變數取消使用(不推薦)
    unset($_SESSION['var']);

    // 方法2:摧毀session
    session_destroy();
?>