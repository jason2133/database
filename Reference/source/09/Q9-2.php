<?php
    $servername = "localhost";          // 서버명
    $username = "user";                 // 사용자명
    $password = "12345";                // 비밀번호
    $dbname = "sample";                 // DB명

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // $sql에 전체 레코드를 이름 순 정렬 명령 저장
    $sql = "select * from friend order by name;";    
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo $row["name"]." ". $row["tel"]."<br>";
    }
    
    mysqli_close($conn);
?>
