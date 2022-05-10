<?php
	echo "<br><B> ※ 존재하지 않는 파일을 열고자 할 경우 에러 메시지 출력 </B> <hr>";
	$fp = fopen("test.dat", "r");   // php 소스파일과 같은 폴더에 있으면 경로명 생략
	if($fp == null) 
	{
		echo "<hr> ■ 존재하지 않는 파일 !! ";
	}  
	else  
	{
		echo " ■ 파일 열기 성공 !! ";
		fclose($fp);                 // 파일 닫기
	}
?>