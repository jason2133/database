<?php
	$host = "localhost";      //호스트 이름
	$user = "root";            //사용자 계정
	$passwd = "123456";   //비밀번호
	$connect = mysqli_connect($host, $user, $passwd) or die("mysql서버 접속 에러");
	$db = mysqli_select_db($connect, 'apm_db');
	mysqli_select_db($connect, 'apm_db') or die("DB 접속 에러");      //my_db 선택
?>