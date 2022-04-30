<?php
    setcookie("username", "", time()-3600);      // 쿠키 삭제

    echo "쿠키 삭제 완료!";
?>