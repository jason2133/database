<?php
	echo "<br><B> ※ d:/sample_data 폴더에 존재하는 test.txt 파일 열기 </B> <hr>";
	$fp=fopen("d:/sample_data/test.txt", "r");
	if($fp == null) 
	{
	echo " <hr> ■ test.txt는 존재하지 않는 파일 !! ";
	}  
	else  
	{
	echo " ■ test.txt 파일 열기 성공 !! <p> ";
	echo " ..... 윈도우 탐색기 창을 열고 test.txt 파일을 열어보세요..";
    fclose($fp);
	}
?>