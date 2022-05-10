<?php

	echo "<h3>■ mysqli_query( ) 함수를 이용한 테이블 생성</h3>";
	echo "<hr><br>";

	$connect = mysqli_connect ('localhost', 'root', '123456');   
	$db = mysqli_select_db ($connect, 'study_db');

	/* -----  study_db 데이터베이스의 선택 성공 여부 -----  */

	if($db)
	{
		echo "  1. mysql 접속 : <B> root 계정 접속 </B> ..... [성공] <br><br>";
		echo "  2. 데이터베이스 선택 : <B> study_db </B> ..... [성공] <br><br> ";
	}
	else
	{
		echo " ※ study_db 데이터베이스 선택 실패 ";
		echo " ........프로그램을 종료합니다.";
		exit;
	}

         /*  --------    guest 테이블의 생성  --------    */

	$sql = "CREATE TABLE guest ( ";
	$sql = $sql. "id varchar (12) NOT NULL, ";
	$sql = $sql. "name varchar(10) NOT NULL, ";
	$sql = $sql. "sex char (4) , ";
	$sql = $sql. "age int , ";
	$sql = $sql. "point int , ";
	$sql = $sql. "email varchar (30) , ";
	$sql = $sql. "Primary Key (id)) ";
	$sql = $sql. "default charset=utf8 ";
	
	$result = mysqli_query ($connect, $sql);	
	
	if($result)
	{
		echo "  3.  테이블 생성 : <B> guest 테이블 </B>..... [성공]<br><br>";
	} 
	else 
	{
		echo "<hr>";
		echo " ※ 'guest' 테이블 생성에 실패했습니다 .....  <br><br>";
		exit;
	}

         /*  --------    guest 테이블에 레코드 삽입  --------   */

	$sql = "INSERT INTO guest VALUES";
	$sql = $sql."('sagang', '강산애', '남', 23, 250, 'sagnag@hanmail.net')";
	mysqli_query($connect, $sql);

	$sql = "INSERT INTO guest VALUES";
	$sql = $sql."('sbhwang', '황산벌', '남', 37, 308, 'sbhwang@nate.com')";
	mysqli_query($connect, $sql);

	$sql = "INSERT INTO guest VALUES";
	$sql = $sql."('grlee', '이겨레', '여', 19, 123, 'grlee@hanmail.net')";
	mysqli_query($connect, $sql);

	$sql = "INSERT INTO guest VALUES";
	$sql = $sql."('cskim', '김찬성', '남', 45, 569, 'cskim@naver.com')";
	mysqli_query($connect, $sql);

	$sql = "INSERT INTO guest VALUES";
	$sql = $sql."('nrshin', '신나라', '여', 33, 625, 'nrshin@hanmail.net')";

	$result = mysqli_query($connect, $sql);

	if($result)
	{
		echo "  4. 레코드 삽입 :  <B> 5명의 데이터 </B>  ..... [성공]<br><br>";
	} 
	else 
	{
		echo "<hr>";
		echo " ※ 'guest' 테이블레 레코드 삽입 실패 .....  <br><br>";
		exit;
	}

		mysqli_close($connect);   
		echo "  5. mysql 접속이 <B> 종료 </B>되었습니다  !!! <br><br>";
		echo "<hr>";
		echo "  ~~~ 정말 수고 많이 하셨습니다. ~~~  ";

?>