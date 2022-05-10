<?
    
	 /*  --------  mysql 접속과 데이터베이스 선택  --------    */

	$connect = mysql_connect ('localhost', 'root', '123456');   
	$db = mysql_select_db ('study_db', $connect);

    /*  --------    점수 입력 받기  --------    */
	
	if($make == "insert")                    // 데이터 입력 받기
	{
		$sum = $os + $wdb + $net;     // 총점
		$avg = $sum/3;                       // 평균

		$sql = "insert into grade (name, os, wdb, net, sum, avg, grd) values";
		$sql = $sql. "($name, $os, $wdb, $net, $sum, $avg, $grd)";
	//	echo $sql;
	//	exit;

		$result = mysql_query ($sql, $connect);    // 질의 처리
	}

?>

    <!--    성적 입력에 따른 FORM 태그  -->

<html>
	<head><title> 성적 평가표 </title></head>
	<body>
	<center><h2> 성적 평가표 </h2></center>
	<table width=880 border=1 cellspacing=1 cellpadding=5 bgcolor=#FFFFCC>

		<tr align=center>
			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method='post'>
			<td>
				성명 : <input type="text" size=10 name="name">&nbsp; 
				운영체제 : <input type="text" size=5 name="os">&nbsp; 
				웹 DB : <input type="text" size=5 name="wdb">&nbsp; 
				네트워크 : <input type="text" size=5 name="net">  &nbsp;&nbsp;&nbsp;
				<input type="submit" value=" 입  력 ">
				<input type="hidden" name="make" value="insert">   
			</td>

             <!--   높은 성적순 정렬  --> 

			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
			<td>
				<input type="submit" value="높은 성적순">
			 	<input type="hidden" name="make" value="height_sort">  
			</td>
			</form>

             <!--   낮은 성적순 정렬  --> 

			<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
			<td>
				<input type="submit" value="낮은 성적순">
			 	<input type="hidden" name="make" value="low_sort">   
			</td>
			</form>
		</tr>
	</table><br>

             <!--   필드명 표시  --> 

	<table width=880 border=1 cellspacing=1 cellpadding=5 bgcolor=#FFFFCC>
		<tr>
			<td align=center> <b>번호 </b></td>
			<td align=center> <b>성명 </b></td>
			<td align=center> <b>운영체제 </b></td>
			<td align=center> <b>웹 DB </b></td>
			<td align=center> <b>네트워크 </b></td>
			<td align=center> <b>총점 </b></td>
			<td align=center> <b>평균 </b></td>
			<td align=center> <b>등급 </b></td>
			<td align=center> <b>삭제 여부 </b></td>
		</tr> 

<?php           // select 문 수행

	if($make == "height_sort")            // 높은 성적순 정렬 (내림차순)
		$sql = "select * from grade order by sum desc";

	elseif($make == "low_sort")          // 낮은 성적순 정렬(오름차순)
		$sql = "select * from grade order by sum";    // asc는 생략 가능

	else
		$sql = "select * from grade";

	$result = mysql_query($sql);         // 질의 처리
	$count = 1;                                // 번호 출력시 일련번호
		
	 /*  -------- 데이터 출력  --------    */

	while ($row = mysql_fetch_array($result))
	{
		$avg = round($row [avg], 1);

		echo "<tr>";
		echo "<td align=center> $count </td>";
		echo "<td align=center> $row[name] </td>";
		echo "<td align=center> $row[os] </td>";
		echo "<td align=center> $row[wdb]</td>";
		echo "<td align=center> $row[net]</td>";
		echo "<td align=center> $row[sum]</td>";
		echo "<td align=center> $avg</td>";
		echo "<td align=center> $row[grd]</td>";
		echo "<td align=center>
			<a herf = ex9-5.php? sno=". $row[ sno]. ">".
			 "삭제</a></td>";      
		echo "<tr>";

		$count++;
	}

	mysql_close($connect);   

	?>
	</table>

