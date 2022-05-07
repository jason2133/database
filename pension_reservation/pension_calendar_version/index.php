<?
	session_start();
	if($_SESSION['sess_userid'])  //이미 로그인한 사용자라면, 펜션 예약 페이지로 이동
	{
		?>
			<script>
				location.replace("reservation.php");
			</script>
		<?
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>펜션예약</title>
  <script src="jquery.min.js"></script>
  <script src="jquery-ui.min.js"></script>
</head>
<body>
	<div style="width:700px; margin:0px auto; background-color:white; margin-top:30px">
			<form name=frm method="post" action="login_ok.php">
			<div style="height:33px">
				<div style="width:20%; float:left; text-align:right">
					아이디 &nbsp;
				</div>
				<div style="width:80%; float:right">
					<input type=text name="userid" id="userid">
				</div>
			</div>

			<div style="height:33px">
				<div style="width:20%; float:left; text-align:right">
					패스워드 &nbsp;
				</div>
				<div style="width:80%; float:right">
					<input type=password name="userpassword" id="userpassword">
				</div>
			</div>
		   </form>

			<div style="height:33px; width:100%; padding-left:25%; margin-top:15px">
				<button onclick="javascript:goLogin();" style="font-size:17px">로그인</button>
			</div>
	</div>
</body>
<script src="jquery.bpopup2.min.js" type="text/javascript"></script>
<script>
	function goLogin()
	{
		var frm = document.frm;
		if(!$.trim(frm.userid.value))
		{
			alert("아이디를 입력해주십시오");
			frm.userid.focus();
			return false;
		}
		if(!$.trim(frm.userpassword.value))
		{
			alert("패스워드를 입력해주십시오");
			frm.userpassword.focus();
			return false;
		}
		frm.submit();
	}
</script>
</html>


