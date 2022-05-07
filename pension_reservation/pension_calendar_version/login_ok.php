<?
	session_start();
	include "conndb.php";

	if(!$_POST["userid"] || !$_POST["userpassword"])
	{
		exit;
	}

	$db_link=db_conn();  //데이터베이스와 연결하는 사용자 정의 함수
	mysqli_select_db($db_link,$DB_SNAME); //내부 database 선택

	$SQL = " select uid from tb_member_master where user_id='".$_POST["userid"]."' and passwd='".$_POST["userpassword"]."' ";
	$result = mysqli_query($db_link, $SQL);
	$row = mysqli_fetch_array($result);

	$loginID = "";
	if($row && $row["uid"])  //쿼리가 정상 실행되어서 uid가 반환되었다는 의미...즉, 로그인정보가 맞다는 의미!
	{
		$loginID = $_POST["userid"];
	}

	if(!$loginID)  //로그인 실패
	{
		?>
			<script>
				alert("잘못된 로그인 정보입니다");
				history.back();
			</script>
		<?
		exit;
	}
	else  //로그인 성공
	{
		$_SESSION['sess_userid'] = $loginID;
	}
?>
<script>
	location.replace("index.php");
</script>