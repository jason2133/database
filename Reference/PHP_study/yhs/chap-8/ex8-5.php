<?php

	echo "<h3>■ space_tbl 테이블에 3명의 데이터 입력 </h3>";
	echo "<hr>";

	$connect = mysqli_connect ('localhost', 'root', '123456');   
	$db = mysqli_select_db ($connect, 'study_db');

	/* -----  study_db 데이터베이스의 선택 성공 여부 -----  */

	if($db)
	{
		echo "<B> ★ study_db 데이터베이스 선택 성공 </B><br><br> ";
		echo "<hr>";
	}
	else
	{
		echo "<B> ▲ study_db 데이터베이스 선택 실패 </B>";
		echo " 프로그램을 종료합니다...";
		exit;
	}

    /*  --------    PHP와 MySQL 한글 깨짐 방지  --------   */

	mysqli_query($connect, "set session character_set_connection=utf8;");		 
	mysqli_query($connect, "set session character_set_results=utf8;");		 
	mysqli_query($connect, "set session character_set_client=utf8;");	

    /*  --------    space_tbl 테이블에 레코드 삽입  --------   */	
	
	$sql = "INSERT INTO space_tbl VALUES
	       ('kumgang', '금강산', '남', 38)";
	mysqli_query($connect, $sql);

	$sql = "INSERT INTO space_tbl VALUES
	       ('hanla', '한라산', '여', 29)";
	mysqli_query($connect, $sql);

	$sql = "INSERT INTO space_tbl VALUES
			('taeback', '태백산', '남', 53)";
	$result = mysqli_query($connect, $sql);

	if($result)
	{
		echo "<B> ● space_tbl 테이블에 3명의 레코드 삽입 성공 ..... </B><br><br>";
		echo " ..... 축하 합니다.  " ;
		echo "<hr>";
	} 
	else 
	{
		echo "<hr>";
		echo "<B> ▲ space_tbl 테이블에 레코드 삽입 실패 .....  </B><br><br>";
		echo "...... 함수 또는 SQL문법, 데이터베이스 선택 <br> ";
		echo " 등의 오류를 검토하십시요.....  !!! <br>";
		exit;
	}

		mysqli_close($connect);   
		echo " ▣ mysql 접속이 종료되었습니다  !!!";

?>