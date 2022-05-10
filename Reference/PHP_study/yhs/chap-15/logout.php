<?php

	echo "<center><font size=4><br>";
	echo "<b> >> &nbsp; 로그아웃 되었습니다 &nbsp;<< </b> </font></center><hr>";
	echo "<script>
	alert('[로그아웃] \\r\\n로그인 창으로 이동할까요?');
	location.replace('login_form.php');
	</script>";
?>