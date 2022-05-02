<?php
    $servername = "localhost";          // 서버명
    $username = "user";                 // 사용자명
    $password = "12345";                // 비밀번호
    $dbname = "sample";                 // DB명

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // friend 테이블에 데이터 삽입
    $sql = "insert into friend (name, tel, address) values 
            ('홍길동', '01012345678', '경기도 수원시 권선구 온정로 123');";
    
    $result = mysqli_query($conn, $sql);

    if ($result) 
      echo "데이터 삽입 완료!";
    else 
      echo "데이터 삽입 오류 : " . mysqli_error($conn);

    mysqli_close($conn);
?>
