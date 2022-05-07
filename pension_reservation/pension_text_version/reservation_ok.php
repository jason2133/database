<?
	session_start();
	if(!$_SESSION['sess_userid'])  //로그인하지 않았다면 로그인 페이지로 이동
	{
		?>
			<script>
				location.replace("index.php");
			</script>
		<?
		exit;
	}
	include "conndb.php";

	$db_link=db_conn();  //데이터베이스와 연결하는 사용자 정의 함수
	mysqli_select_db($db_link,$DB_SNAME); //내부 database 선택

	$SQL = " insert into tb_house_reservation(user_id, house_id, rs_date, tot_man, insert_date) values('".$_SESSION['sess_userid']."','".$_POST["insert_houseid"]."','".$_POST["reservation_date"]."','".$_POST["total_man"]."',now()) ";
	$result = mysqli_query($db_link, $SQL);
?>
<script>
	alert("정상 예약되었습니다");
	location.replace("reservation.php");
</script>