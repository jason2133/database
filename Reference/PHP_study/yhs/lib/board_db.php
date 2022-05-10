<?php
  $host = "localhost";      //호스트 이름
  $user = "root";          //계정
  $passwd = "123456";    //비밀번호

  $connect = mysqli_connect($host, $user, $passwd) or die("MySQL 서버 접속 에러");
  mysqli_select_db($connect, 'board_db') or die("DB 접속 에러");      //apm_db 선택
?>