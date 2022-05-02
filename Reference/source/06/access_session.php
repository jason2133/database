<?php
    session_start();
    
    if(isset($_SESSION["username"])){
        echo $_SESSION["username"]."님 환영합니다.";
    } 
    else {
        echo "username 세션이 존재하지 않습니다!";
    }
?>