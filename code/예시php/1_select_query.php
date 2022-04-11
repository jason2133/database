<?
include "dbconn_ex.php";
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<TITLE> Select Test </TITLE>
</HEAD>

<BODY>

<H1>Select Test</H1>

<? 

$dbname = "practice";
$sql = "SELECT S.sid,sname,bid,day,age,sex FROM reserves R, sailors S WHERE R.sid = S.sid ";

echo $sql;
?>

<br><br>

<?
	//Print Query Result
	//$query = "SELECT bid, bname FROM boats";
	$result = mysqli_query($connect, $sql, MYSQLI_USE_RESULT) or die(mysql_error());

	// 테이블 시작
	echo "<table border>";

	// 머릿글 출력
	echo "<tr>";
	while($field=mysqli_fetch_field ($result)){
		echo "<th>";
		//print_r($field);
		echo $field->name;
		echo "</th>";
	}
	echo "</tr>";

	// 데이터 출력
	while($data=mysqli_fetch_row($result)){
		echo "<tr>";
		for($i=0;$i<(count($data));$i++){
			echo "<td>";
			echo $data[$i];
			echo "</td>";
		}
		echo "</tr>";
	}

	// 테이블 끝
	echo "</table>";
?>


</BODY>
</HTML>