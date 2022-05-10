<?php

	echo "<h3>■ mysqli_query( ) 함수를 이용한 space_tbl 테이블 생성</h3>";
	echo "<hr><br>";

	$connect = mysqli_connect('localhost', 'root', '123456');   
	$db = mysqli_select_db($connect, 'study_db');

	/* -----  study_db 데이터베이스의 선택 성공 여부 -----  */

	if($db)
	{
	echo " ★ MySQL 접속 : <B> root 계정 접속 </B> ..... [성공] <br><br>";
	echo " ★ <B>study_db </B> 데이터베이스 선택 ......... [성공] <br><br> ";
	echo "<hr>";
	}
	else
	{
		echo " <B> study_db 데이터베이스 선택 실패 </B> ";
		echo " 프로그램을 종료합니다...";
		exit;
	}

    /*  --------    space_tbl 테이블의 생성  --------    */

	$sql = "CREATE TABLE space_tbl ( 
			ID varchar(12) primary key NOT NULL, 
			NAME varchar(10) NOT NULL,
			GENDER varchar(4),
			AGE int )
			default charset=utf8 ";

	$result = mysqli_query($connect, $sql);
	
	if($result)
	{
		echo " <B> ● space_tbl 테이블 생성 성공 ..... </B><br><br>";
		echo " ....... 이제 레코드를 삽입할 준비가 되었습니다.. <br>" ;
		echo "<hr>";
	} 
	else 
	{
		echo "<hr>";
		echo " <B> ● space_tbl 테이블 생성에 실패했습니다 .....  </B><br><br>";
		echo "...... 함수 또는 SQL문법, 세미콜론(;), 데이터베이스 선택, <br> ";
		echo "이미 존재하는 테이블인지 등의 오류를 검토하십시요.....  !!! <br>";
		exit;
	}

		mysqli_close($connect);   
		echo " ▣ mysql 접속이 종료되었습니다  !!!";

?>