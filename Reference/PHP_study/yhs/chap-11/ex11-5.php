<?php

	echo " <br><b>■ 생성된 2개의 쿠키를 30초간 사용하기 </b><hr>";

	echo " 1. 생성된 id 쿠키 .............. ";	
	echo "[ ";
	
	echo $_COOKIE ['id'];
	echo " ] <hr> ";
	
	echo " 2. 생성된 name 쿠키 ........ ";
	echo "[ ";
	
	echo $_COOKIE ['dept'];	
	echo " ] <hr> ";

	echo " > 2개의 쿠키는 30초 후에 자동으로 삭제됩니다.. <br>";

?>