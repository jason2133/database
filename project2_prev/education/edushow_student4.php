<!DOCTYPE html>
<html>
<?php            
    $name = $_POST["name"];
    $department = $_POST["department"];
    $studentnum = $_POST["studentnum"];          
              
    $con = mysqli_connect("localhost", "user", "12345", "sample");  

	$sql = "select * from equipedu1 where name='$name' and department='$department' and studentnum='$studentnum'";    

	$result1 = mysqli_query($con, $sql); 
    $num1 = mysqli_num_rows($result1);
    if($num1==0){
        echo "<script>window.alert('존재하지 않습니다.'); history.go(-1);</script>";
        exit;
    }
    mysqli_data_seek($result1, 0);
    $row1 = mysqli_fetch_array($result1);
    $num1 = mysqli_num_rows($result1); 
    $count1 = mysqli_num_fields($result1);
    $go1 = mysqli_num_fields($result1);
    
    $total_count = 0;

    echo "<div style='margin-bottom: 5px;'>$name 님의 3D 프린터 교육에 대한 신청 결과입니다.</div>";
    echo "<div style='margin-bottom: 5px;'>$num1 개의 교육 신청 정보가 있습니다.</div>";
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

	while ($rows=mysqli_fetch_row($result1)) 
	{
		echo "<tr>";
		for ($a = 0; $a < $count1; $a++)          
		{
			echo "<td> $rows[$a] </td>";
		}
		echo "</tr>";
	}

	?>

</table></br>

<!-- 레이저 커터 -->
<?php            
    $name = $_POST["name"];
    $department = $_POST["department"];
    $studentnum = $_POST["studentnum"];                        
    $con = mysqli_connect("localhost", "user", "12345", "sample"); 
	$sql = "select * from equipedu2 where name='$name' and department='$department' and studentnum='$studentnum'";     

	$result1 = mysqli_query($con, $sql);   
    $num1 = mysqli_num_rows($result1);
    if($num1==0){
        echo "<script>window.alert('존재하지 않습니다.'); history.go(-1);</script>";
        exit;
    }
    mysqli_data_seek($result1, 0);
    $row1 = mysqli_fetch_array($result1);
    $num1 = mysqli_num_rows($result1); 
    $count1 = mysqli_num_fields($result1);
    $total_count = 0;

    echo "<div style='margin-bottom: 5px;'>$name 님의 레이저 커터 교육에 대한 신청 결과입니다.</div>";
    echo "<div style='margin-bottom: 5px;'>$num1 개의 교육 신청 정보가 있습니다.</div>";
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

	while ($rows=mysqli_fetch_row($result1))    
	{
		echo "<tr>";
		for ($a = 0; $a < $count1; $a++)        
		{
			echo "<td> $rows[$a] </td>";
		}
		echo "</tr>";
	}

	?>

</table></br>

<!-- 열전사 프레스 -->
<?php            
    $name = $_POST["name"];
    $department = $_POST["department"];
    $studentnum = $_POST["studentnum"];                        
    $con = mysqli_connect("localhost", "user", "12345", "sample");  

	$sql = "select * from equipedu3 where name='$name' and department='$department' and studentnum='$studentnum'";

	$result1 = mysqli_query($con, $sql);     
    $num1 = mysqli_num_rows($result1);
    if($num1==0){
        echo "<script>window.alert('존재하지 않습니다.'); history.go(-1);</script>";
        exit;
    }
    mysqli_data_seek($result1, 0);
    $row1 = mysqli_fetch_array($result1);
    $num1 = mysqli_num_rows($result1); 
    $count1 = mysqli_num_fields($result1);

    $total_count = 0;

    echo "<div style='margin-bottom: 5px;'>$name 님의 열전사 프레스에 교육에 대한 신청 결과입니다.</div>";
    echo "<div style='margin-bottom: 5px;'>$num1 개의 교육 신청 정보가 있습니다.</div>";
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

	while ($rows=mysqli_fetch_row($result1))    
	{
		echo "<tr>";
		for ($a = 0; $a < $count1; $a++)        
		{
			echo "<td> $rows[$a] </td>";
		}
		echo "</tr>";
	}

	?>

</table></br>

<a href='../educheck.php'></br></br>뒤로가기</a>
</body>
</html>

