<!DOCTYPE html>
<html>
<head> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>고려대학교 KU메이커스페이스</title>
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/default.css">
<link rel="shortcut icon" href="../images/ku_logo.png">
<link rel="apple-touch-icon-precomposed" href="../images/ku_logo.png">
<script src="js/jquery.min.js"></script>
<script src="js/indigo.min.js"></script>
<link rel="stylesheet" href="../style.css">
</head>
<?php
    $con = mysqli_connect("localhost", "user", "12345", "sample");
    $sql = "select * from equipedu1";
    $result = mysqli_query($con, $sql); 
    $count = mysqli_num_fields($result);	
?>
<body> 
<table width='1000' border='1' bordercolor='blue' cellpadding='1'>
	<tr>
        <td bgcolor='#FFFF00'><B> Num </B></td>
		<td bgcolor='#FFFF00'><B> 이름 </B></td> 
		<td bgcolor='#FFFF00'><B> 학과 </B></td> 
		<td bgcolor='#FFFF00'><B> 학번 </B></td>
        <td bgcolor='#FFFF00'><B> 이메일 </B></td>
        <td bgcolor='#FFFF00'><B> 휴대전화 </B></td>
        <td bgcolor='#FFFF00'><B> 등록일자 </B></td> 
	</tr>	

<?php

	while ($rows=mysqli_fetch_row($result))   
	{
		echo "<tr>";
		for ($a = 0; $a < $count; $a++)        
		{
			echo "<td> $rows[$a] </td>";
		}
		echo "</tr>";
	}

	?>

</table></br>

<?php
    $row_count = mysqli_num_rows($result);
    echo "3D 프린터 교육 참여 신청 학생의 수 : {$row_count} 명";
?>
</br>
<a href='edushow.php'></br></br>뒤로가기</a>
</body>
</html>