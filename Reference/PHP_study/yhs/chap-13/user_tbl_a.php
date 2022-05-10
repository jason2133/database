<?php
include "../lib/connect_db.php";

/* apm_db 데이터베이스에 존재하는 테이블 검색 */
if($result == 1)
{
	$tb_name = mysqli_list_tables("apm_db");
	$tb_count = mysqli_num_rows($tb_name);
	for($a=0; $a<$tb_count; $a++)
		if(mysqli_tablename($tb_name, $a) == "user_tbl")
		{
			$flag = "OK";
			break;
		}
}

/* 테이블이 존재하지 않으면 테이블 생성  */  
if($flag != "OK")
{
	$sql = "create table user_tbl ( 
			    no int primary key not null auto_increment,  
				userid varchar(12)  not null,
				name varchar(12) not null,
				passwd varchar(12),
				sex char(1),
				email varchar(30), 
				date datetime,
				ip_addr varchar(30))
				default charset=utf8 ";

	/* 테이블을 생성하고 쿼리문을 실행  */
	$result = mysqli_query($sql, $connect) 
			or die 	("<font size=4><br><center>
		  #  user_tbl 테이블은 이미 존재합니다. #</font><hr>
			 	<script>
					alert('[존재하는 테이블]\\r\\n user_tbl 테이블은 이미 존재합니다. ^^; ');
					location.replace('success.php');
				</script>");
}
	echo "<font size=4><br><center>● user_tbl 테이블을
		       성공적으로 만들었습니다. ●</font><hr>";
			 	echo "<script>
					alert('[테이블 생성 성공]\\r\\n user_tbl 테이블을 생성하였습니다. good~ ^^');
					location.replace('success.php');
					</script> ";
mysqli_close($connect);                 //db 연결 종료
?>