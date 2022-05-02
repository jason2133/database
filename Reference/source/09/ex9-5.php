<?php
    $servername = "localhost";          // 서버명
    $username = "user";                 // 사용자명
    $password = "12345";                // 비밀번호
    $dbname = "sample";                 // DB명

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // $sql에 전체 레코드 검색 명령 저장
    $sql = "select * from friend;";    

    $result = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "이름 : ".$row["name"]."<br>";
        echo "전화번호 : ". $row["tel"]."<br>";
        echo "주소 : ". $row["address"]."<br>";
        echo "----------------------------------------<br>";
    }

    mysqli_close($conn);
?>
