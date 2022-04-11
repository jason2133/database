<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;" charset="utf-8">
<title>미용실 예약 조회</title>
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
	<!-- for getting membership -->

		<fieldset>
			<legend>조회</legend>
			<center>
			<table width="310" height="220">

			<!-- get membership number -->
			<button style="margin-top:10px;" onClick="location.href='search_d.php'">
			디자이너용 예약 검색
			</button>		
			<br>
			<button style="margin-top:10px;" onClick="window.alert('현재 준비 중입니다.')">
			고객용 예약 검색
			</button>
			<br>
			<button style="margin-top:10px;" onClick="window.alert('현재 준비 중입니다.')">
			날짜 별 예약 검색
			</button>
			</table>
			</center>
		</fieldset>

</body>
</html>