<?php
	$fuserid=$_GET['fuserid'];             //GET방식으로 전송 받음 
	include "../lib/connect_db.php";

	$sql="select count(*) from user_tbl where userid='$fuserid' ";
	$res=mysqli_query($connect, $sql);
	$rs=mysqli_fetch_array($res);
	$num=$rs[0];
?>

<html>
	<head><title> 아이디 중복검사 </title>
	</head>
	<body>
	<form name="chkid_form">
	<table width="350" border="1" bordercolor="blue"align="center" cellpadding="5" >
	<tr bgcolor="#3300CC"><td><font color="#FFFFFF"> ■ 아이디 중복검사 
	</font></td>
	</tr>
	<tr height="120"><td align="center"> 

<?php 
	if($num>0) { 
		echo "[ ";
		echo $fuserid; 
		echo " ] 는 이미 사용 중인 아이디입니다. <br> ";
		echo " 다른 아이디를 선택하세요.<br><br>";
	} else {
		echo "[ ";
		echo $fuserid;
		echo " ] 는 사용할 수 있는 아이디입니다.<br><br> ";
	} 
?>

  <input type="button" name="Button" value=" 닫기 " onClick="self.close();"></td>
	</tr>
	</table>
	</form>
	</body>
</html>