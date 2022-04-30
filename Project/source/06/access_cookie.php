<?php
    if(isset($_COOKIE["username"])){
        echo $_COOKIE["username"]."님 환영합니다.";
    } 
    else {
        echo "username 쿠키가 존재하지 않습니다.";
    }
?>