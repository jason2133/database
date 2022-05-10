<?

	echo "<h3>■ 'grade' 테이블 생성</h3>";
	echo "<hr>";

	$connect = mysql_connect ('localhost', 'root', '123456');   
	$db = mysql_select_db ('study_db', $connect);

         /*  --------    grade 테이블의 생성  --------    */

	$sql = "CREATE TABLE grade ( ";
	$sql = $sql. "sno int not null auto_increment, ";
	$sql = $sql. "name varchar (10) not null, ";
	$sql = $sql. "os int , ";
	$sql = $sql. "wdb int , ";
	$sql = $sql. "net int , ";
	$sql = $sql. "sum int , ";
	$sql = $sql. "avg float , ";
	$sql = $sql. "grd char(4) , ";
	$sql = $sql. "Primary Key (sno) ) ";

	$result = mysql_query ($sql, $connect);
	
	if($result)
	{
		echo " <B> ● 'grade' 테이블 생성 성공 ..... </B><br><br>";
		echo " ....... 이제 레코드를 삽입할 준비가 되었습니다.. <br>" ;
		echo "<hr>";
	} 
	else 
	{
		echo "<hr>";
		echo " <B> ● 'grade' 테이블 생성에 실패했습니다 .....  </B><br><br>";
		echo "...... 함수 또는 SQL문법, 세미콜론(;), 데이터베이스 선택 ";
		echo "등의 오류를 검토하십시요  !!! <br>";
		exit;
	}

		mysql_close($connect);   
		echo " ▣ mysql 접속이 종료되었습니다  !!!";

	?>