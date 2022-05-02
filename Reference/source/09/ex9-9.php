<?php
    $servername = "localhost";          // 서버명
    $username = "user";                 // 사용자명
    $password = "12345";                // 비밀번호
    $dbname = "sample";                 // DB명

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // $sql에 '박성찬' 레코드를 삭제하는 명령 저장
    $sql = "delete from friend where name='박성찬';";    
    $result = mysqli_query($conn, $sql);

    if ($result) 
        echo "삭제 완료!";
    else 
        echo "삭제 오류 : " . mysqli_error($conn);

    mysqli_close($conn);
?>
