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

	$SQL = " SELECT rs_id AS caID, '예약됨' AS title, rs_date AS start, rs_date AS end FROM tb_house_reservation WHERE house_id='".$_GET["houseid"]."' ";
	$result = mysqli_query($db_link, $SQL);

	$ret_arr = array();
	foreach($result as $row)
	{
		$row_array['id'] = urlencode($row["caID"]);
		$row_array['title'] = urlencode($row["title"]);
		$row_array['start'] = urlencode($row["start"]);
		$row_array['end'] = urlencode($row["end"]);
		array_push($ret_arr, $row_array);
	}

	echo urldecode(json_encode($ret_arr));	

?>