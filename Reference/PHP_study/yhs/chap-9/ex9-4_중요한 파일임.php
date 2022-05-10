<?php

	$connect = mysqli_connect('localhost', 'root', '123456');
	$result = mysqli_select_db($connect, 'addr_db');
	if($result == 1) 
	{
		$db_name = 'addr_db';
		$sql = "SHOW TABLES FROM $db_name";
		$tb_name = mysqli_query($connect, $sql);
		$tb_count = mysqli_num_rows($tb_name);
		
		for($a=0; $a<$tb_count; $a++)
		{
			if(mysqli_tablename($tb_name, $a) == "member") 
			{
				echo " member 테이블은 이미 존재합니다. <br>";
				$flag = "OK";
				break;
			}
		}
		if($flag != "OK") 
		{
			$sql = "create table member ( 
					SNO int primary key NOT NULL,  
					NAME varchar(10),  
					ADDR varchar(80) )
					default charset=utf8 ";
			$result = mysqli_query($connect, $sql); 
		/*
			or die 	("<h3><br><br><br><br><br><center>
		    ▣ member 테이블은 이미 존재합니다. <br><hr><br>
			 ▶ <a href=ex9-5.php>주소 입력 화면</a> ◀ </center></h3>");
		*/
		}
	}
	echo "<h3><br><center><br><br><br><br>
	      ▣ member 테이블을 성공적으로 만들었습니다.... <br><hr><br> ";
	echo "▶ <a href=ex9-5.php>주소 입력 화면</a> ◀ </center></h3>";
mysqli_close($connect);                 //db 연결 종료

?>