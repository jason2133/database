<?php
    $servername = "localhost";          // 서버명
    $username = "user";                 // 사용자명
    $password = "12345";                // 비밀번호
    $dbname = "sample";                 // DB명

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // 연결 체크하기
    if (!$conn) {
        die("연결 오류 : ".mysqli_connect_error());
    }
    
    echo "MySQL에 성공적으로 연결되었습니다!";
?>
