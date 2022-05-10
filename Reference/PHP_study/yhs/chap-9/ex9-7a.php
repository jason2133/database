<?php
	$connect = mysqli_connect ('localhost', 'root', '123456');   
	mysqli_select_db ($connect, 'addr_db');       // 질의 수행
	
	/* ---------- 한글 깨짐 방지 코드 -----------------*/ 
	
	mysqli_query($connect, "set session character_set_connection=utf8;");		 
	mysqli_query($connect, "set session character_set_results=utf8;");		 
	mysqli_query($connect, "set session character_set_client=utf8;");		

	$sql = "select *from member";                       // 테이블 검색 질의
	$result = mysqli_query ($connect, $sql);          // 질의 수행

	//$row_count = mysqli_fetch_row($result);         // 레코드 개수 구하기
	$row_count = mysqli_num_rows ($result);         // 레코드 개수 구하기
	$fields_count = mysqli_num_fields ($result);   // 필드의 개수 구하기
	
?>

<html>
<head><title>주소록 현황 </title></head>
<body><center><h2><br> 주소록 현황 </h2></center> 
	<table  width=680 border=1 cellpadding=1>
	<tr>
		<td width=20% bgcolor=#FFFFCC align=center><B> 학번 </B></td> 
		<td width=20% bgcolor=#FFFFCC align=center><B> 이름 </B></td> 
		<td bgcolor=#FFFFCC align=center><B> 주소 </B></td> 
	</tr>

<?php
	for ($a = 0; $a < $row_count; $a++)                  // 레코드의 개수만큼 반복
	{
		echo "<tr>";
		for ($b = 0; $b < $fields_count; $b++)          // 필드의 수만큼 반복
		{
			$data = mysqli_result($result, $a, $b);     // 행과 열에 해당하는 레코드 
			echo "<td>&nbsp;&nbsp;&nbsp; $data </td>";  
		}
		echo "</tr>";
	}
	echo "■ 전체 레코드의 수 : <B>{$row_count} 개 </B><br><hr>";
	mysqli_close($connect);   
?>

</table><hr><center><br>
		<a href="ex9-5.php"> 주소 입력 화면 </a>으로 이동
	</center>
</body>
</html>