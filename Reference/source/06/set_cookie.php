<?php
    // 24*60*60 = 1일, 30일 후 쿠키 만료 
    setcookie("username", "홍길동", time() + 24*60*60 * 30 );
    
    echo "쿠키 설정 완료!";
?>