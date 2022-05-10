<?php

	echo "<br> ▣ 세션 함수보다 출력문을 먼저 선언한 프로그램 <hr>";
	
	session_start ( );           //세션의 시작(반드시 가장 먼저 선언)
	$id = session_id( );         //세션의 아이디 확인
	
	echo " ■ 세션 ID ..... [ <b> {$id} </b> ] <hr>";
	echo " <<<<<----- 세션 사용중  ----->>>>> <p><hr>";
	
	echo " ▶  세션에 등록된 내용 <br><br>";
	
	echo " ..... 1. 차  종 :  [ <b>";
	echo $_SESSION['car'];  
	echo " </b> ] <p>  ";
	
	echo " ..... 2. 색  상 :  [ <b>";
	echo $_SESSION['color'];
	echo " </b> ] <br>  ";
	
?>