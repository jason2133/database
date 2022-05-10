<?php

	$cook1 = setcookie("id", "space", time( ) + 30);
	$cook2 = setcookie("dept", "bigdata", time( ) + 30);
	
	echo " <br><b> ■ 2개의 쿠키를 생성하여 30초 동안 유지 후 자동 폐기되는 프로그램 </b><hr>";
	
	if($cook1 && $cook2) {
		echo " >> 2개의 쿠키가 성공적으로 생성되어 30초 후 삭제됩니다... <hr>";
		
		echo " 1. 첫 번째 쿠키 내용 <br>";
		echo "  o 쿠키 이름 ... <b> [ id ] </b> <br>";
		echo "  o 쿠키 값 ....... <b> [ space ] </b><hr>";

		echo " 2. 두 번째 쿠키 내용 <br>";
		echo "  o 쿠키 이름 ... <b> [ dept ] </b> <br>";
		echo "  o 쿠키 값 ....... <b> [ bigdata ] </b><hr>";		

		echo " >> 이 쿠키는 30초 동안만 지속됩니다...";
	} 
	else 
	{
	echo " >> 쿠키 생성을 실패했습니다...";
	}
	
?>