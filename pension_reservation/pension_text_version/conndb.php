<?
//SQL환경 설정
global $DB_HOST,$DB_USER,$DB_PASSWD,$DB_SNAME,$db_link;

$DB_HOST="Mysql 또는 Mariadb IP를 입력하세요";
$DB_USER="아이디입력하세요";
$DB_PASSWD="패스워드입력하세요";
$DB_SNAME="데이터베이스명 입력";
$db_link = false;

//DB 서버 연결
function db_conn(){
	global $DB_HOST,$DB_USER,$DB_PASSWD,$db_link;
	$db_link=mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWD");

	if (mysqli_connect_errno($db_link)){
		printf("%d : %S", mysqli_errno(), mysqli_error());
		exit;
	}
	return $db_link;
}

//DB선택, 결과 record set을 리턴
function result_query($query){
	global $DB_SNAME,$db_link;

	if(!$db_link)
	{
		$db_link=db_conn(); //연결식별자
	}

	if(!($stat=mysqli_select_db($db_link,"$DB_SNAME"))){
		printf("DB 실패1");
		exit;
	}

	if(!($result=mysqli_query($db_link,$query))){
		printf("%d : %s",mysqli_errno(),mysqli_error());
		exit;
	}
	return $result;
}

//DB선택, 결과 record set을 리턴
function result_queryTran($query){
	global $DB_SNAME,$db_link;

	if(!$db_link)
	{
		$db_link=db_conn(); //연결식별자
	}

	if(!($stat=mysqli_select_db($db_link,"$DB_SNAME"))){
		rollbackTran();
		printf("DB 실패");
		exit;
	}

	if(!($result=mysqli_query($db_link,$query))){
		rollbackTran();
		printf("%d : %s",mysqli_errno(),mysqli_error());
		exit;
	}
	return $result;
}

//DB선택, 결과 record set을 리턴
function result_oneVal($query){
	global $DB_SNAME,$db_link;

	if(!$db_link)
	{
		$db_link=db_conn(); //연결식별자
	}

	if(!($stat=mysqli_select_db($db_link,"$DB_SNAME"))){
		printf("DB 실패");
		exit;
	}

	if(!($result=mysqli_query($db_link,$query))){
		printf("%d : %s",mysqli_errno(),mysqli_error());
		exit;
	}

	$row = mysqli_fetch_array($result);
	return $row[0];
}

//DB선택, 결과 record set을 리턴
function result_oneValTran($query){
	global $DB_SNAME,$db_link;

	if(!$db_link)
	{
		$db_link=db_conn(); //연결식별자
	}

	if(!($stat=mysqli_select_db($db_link,"$DB_SNAME"))){
		rollbackTran();
		printf("DB 실패");
		exit;
	}

	if(!($result=mysqli_query($db_link,$query))){
		rollbackTran();
		printf("%d : %s",mysqli_errno(),mysqli_error());
		exit;
	}

	$row = mysqli_fetch_array($result);
	return $row[0];
}

function mysql_num_rows($tmp)
{
	return mysqli_num_rows($tmp);
}

function mysql_fetch_array($tmp)
{
	return mysqli_fetch_array($tmp);
}

function mysql_data_seek($tmp,$iTMP)
{
	return mysqli_data_seek($tmp,$iTMP);
}

function mysql_free_result($tmp)
{
	return mysqli_free_result($tmp);
}

function mysql_close($tmp)
{
	return mysqli_close($tmp);
}
?>