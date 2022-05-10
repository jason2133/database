<?php

	echo "<h3>■ space_tbl 테이블에 존재하는 필드의 개수 구하기</h3>";
	echo "<hr>";

	$connect = mysqli_connect ('localhost', 'root', '123456');   
	mysqli_select_db ($connect, 'study_db');      // 질의 수행

	$sql = "select *from space_tbl";                       // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);      // 질의 수행
	$count = mysqli_num_fields ($result);          // 필드의 개수 구하기

	echo " >> space_tbl 테이블의 전체 필드의 수 : <B>[ {$count} 개 ] </B> <br>";
	echo "<hr>";

	mysqli_close($connect);   
	echo " ▣ mysql 접속이 종료되었습니다  !!!";

?>