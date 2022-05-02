<?php
    $num   = $_GET["num"];

    $con = mysqli_connect("localhost", "user", "12345", "sample");  
    $sql = "delete from memberboard where num=$num"; // 레코드 삭제 명령
    mysqli_query($con, $sql);     // SQL 명령 실행

    mysqli_close($con);           // DB 접속 해제
?>