<?php

	$sno = $_POST['sno'];
	$name = $_POST['name'];
	$addr = $_POST['addr'];

	$connect = mysqli_connect('localhost',  'root', '123456');
	mysqli_select_db($connect, 'addr_db');
	
    /*  --------    PHP와 MySQL 한글 깨짐 방지  --------   */

	mysqli_query($connect, "set session character_set_connection=utf8;");		 
	mysqli_query($connect, "set session character_set_results=utf8;");		 
	mysqli_query($connect, "set session character_set_client=utf8;");		

	$sql="insert into member (sno, name, addr) ";
	$sql.= "values('$sno', '$name', '$addr')";

	mysqli_query($connect, $sql) ;        //sql 질의 수행.
	mysqli_close($connect);                 //db 연결 종료
	
	echo "<center><h3><br><br>등록 완료. 축하드립니다. <br><br><hr><br>";
	echo "이동할 화면을 선택하세요. <br><br>";
	echo "◀◀ [ <a href='ex9-5.php'>주소 입력</a> ]&nbsp; | &nbsp; ";
	echo "[ <a href='ex9-7.php'>결과 화면</a> ] ▶▶</h3></center>" ;

?>