<?php
	echo "<br><B> ※ 존재하는 파일을 열기 위한 fopen( )함수 사용</B> <hr>";
	$fp = fopen("d:/sample_data/big_data.jpg", "r"); 
	if($fp == null) 
	{
	echo " <hr> ■ big_data.jpg는 존재하지 않는 파일 !! ";
	}
	else  
	{
	echo " ■ big_data.jpg 파일 열기 성공 !! ";
	fclose($fp);
	}
?>