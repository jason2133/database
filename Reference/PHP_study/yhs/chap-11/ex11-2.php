<?php

	ob_start( );                    // 출력 버퍼링 기능을 사용
 	echo "<br><b> ■ 출력 버퍼링 함수를 적용한 쿠키 생성 </b><hr>";
	echo " >> 출력 버퍼링 함수 : obstart( ) 함수 <hr>";
	
	setcookie("cook_test", "apm");  // err_test 쿠기 이름에 apm값을 넣어 줌
		
	echo " > 쿠키 이름 ............. <b> [ cook_test ]</b><br>";
	echo " > 쿠키 값 ................. <b> [ apm ] </b><hr>";
  
?>