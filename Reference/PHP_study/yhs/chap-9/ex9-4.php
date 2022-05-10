<?php

	$connect = mysqli_connect('localhost', 'root', '123456');
	$result = mysqli_select_db($connect, 'addr_db');
	
	if($result == 1) 
	{
		$sql = "create table member ( 
			SNO int primary key NOT NULL,  
			NAME varchar(10),  
			ADDR varchar(80) )
			default charset=utf8 ";
		$result = mysqli_query($connect, $sql); 
	}
	else
	{
		echo " <center> 데이터베이스가 존재하지 않습니다. </center>)";
	}
	echo "<h3><br><center><br><br><br><br>
	      ▣ member 테이블을 성공적으로 만들었습니다.... <br><hr><br> ";
	echo "▶ <a href=ex9-5.php>주소 입력 화면</a> ◀ </center></h3>";
	mysqli_close($connect);                 //db 연결 종료

?>