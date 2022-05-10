<?php

	echo "<h3>■ mysqli_connect 함수 사용</h3>";
	echo "<hr>";

	$db_host = "localhost";
	$db_user = "root";
	$db_passwd = "123456";
	
	$conn = mysqli_connect($db_host, $db_user, $db_passwd);   // mysql 관리자 계정으로 접속

	if($conn)
	{
		echo "> mysql 서버에 성공적으로 연결되었습니다. <br><br>";
		echo " o 호스트 : ".$db_host."<br>";
		echo " o 사용자 : ".$db_user."<br>";
		echo " o 패스워드 : ".$db_passwd."<br><br>";		
		echo "> 성공적인 APM의 고수가 되십시오. <br>";
		echo "<hr>";
	} else {
		echo "<hr>";
		echo "..... 접속이 안 됩니다..... <br>";
		echo "계정 또는 비밀번호를 확인 하십시요 !!! <br>";
	}
	
	if(is_resource($conn))
	{
		mysqli_close($conn);    // mysql의 접속을 종료
	}

?>