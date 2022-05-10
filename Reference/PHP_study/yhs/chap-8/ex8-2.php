<?php

	echo "<h3>■ mysqli_select_db( ) 함수로 study_db 데이터베이스 선택</h3>";
	echo "<hr>";

	$connect = mysqli_connect('localhost', 'root', '123456');   // mysql 관리자 계정으로 접속
	$db = mysqli_select_db($connect, 'study_db');
	
	if($db)
	{
		echo " ★ 데이터베이스 선택 성공 ..... <br><br>";
		echo " ..... 선택한 데이터베이스는 <B> 'study_db' </B>입니다.<br><br>";
		echo "<hr>";
	} 
	else 
	{
		echo "<hr>";
		echo "▲ 데이터베이스 선택에 실패했습니다 .....  <br><br>";
		echo "...... 함수 또는 문장, 데이터베이스 명의 오류를 검토하십시요  !!! <br>";
	}

		mysqli_close($connect);   
		echo " ▣ mysql 접속이 종료되었습니다  !!!";

?>