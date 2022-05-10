<?php

	echo "<br><b> ■ 쿠키 생성 시 주의할 사항 → 생성 안 될 때의 이유 ???</b> ";
	echo "<hr>";
	echo " > 증상 판단 : 쿠키 생성 오류 !! <p>";
	echo " > 해결 방법 : setcookie( )함수보다 echo 출력문을 먼저 선언하면 안 됨 !!<p> ";
	
	setcookie("err_test", "apm");  // err_test 쿠기 이름에 apm값을 넣어 줌
	
	echo " > 주의 사항 : setcookie( ) 함수를 제일 먼저 선언해야 함!! <hr>";
	
?>