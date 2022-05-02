<?php
    session_start();
    $_SESSION["userid"] = "hong123";
    $_SESSION["username"] = "홍길동";
    
    echo "<script>
            location.href = 'session_page.php';
        </script>";
?>