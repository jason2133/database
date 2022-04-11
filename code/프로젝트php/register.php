<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<title>회원 등록</title>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<?
	include "dbconn.php";
?>

<style>
@import url(http://fonts.googleapis.com/earlyaccess/nanumgothic.css);

body{
	font-size: 15px;
	font-family: 'Nanum Gothic';
}

a:link {
    color: #000000;
    text-decoration: none;
}
a:visited {
    color: #000000;
    text-decoration: none;
}
a:hover {
    color: #000000;
    text-decoration: none;
}

</style>
<script type="text/javascript">
</script>
</head>
<body>
	<!-- for client to register-->
	<form  action="register2.php" name="form" method="post" style="margin-top:10px;">
		<fieldset>
			<legend>미용실 회원 등록</legend>
			<table width="280" height="220">

				<!-- name number -->
				<tr>
					<td><b>이름</b></td>
					<td><input type="text" name="name"></td>
				</tr>

				<!-- date of birth -->
				<tr>
					<td><b>생년월일</b></td>
					<td><input type="date" name="date"></td>
				</tr>

				<!-- telephone number -->
				<tr>
					<td><b>전화번호</b></td>
					<td><input type="text" name="telephone_number"></td>
				</tr>

				<!-- submit button -->
				<tr><td colspan="3"><center><img src="img/reg_bt2.png" width="200" height="50" onclick="document.form.submit();"></center></td></tr>
			</table>
		</fieldset>
	</form>
</body>
</html>