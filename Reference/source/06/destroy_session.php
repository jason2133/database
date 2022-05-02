<?php
    session_start();
 
    // 세션 접속 끊기
    if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
    }

    echo "세션 접속 해제!";
?>