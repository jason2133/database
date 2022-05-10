<?php
	echo "<br><B> ※ 파일의 정보를 검출하는 함수 </B> <hr>";
	$fn = "d:/sample_data/good.txt";
	if(file_exists($fn))                             //파일 존재 여부
	{
		$fp = fopen($fn, "r");                       //파일 열기
	} 
	else 
	{
		echo " > 파일이 없습니다. 확인하세요... </font>";
		exit;
	}
	$fw = fopen("d:/sample_data/exam.txt", "a");    //파일 열기
	while(!feof($fp))                               //파일의 끝이 아닐 동안 실행
	{
		$line = fgets($fp, 800);                    //한 라인씩 읽어 들임
		echo " > 읽어온 내용 : {$line} <br> ";
		fputs($fw, $line);                          //파일에 기록
	}
	fclose($fp);
?>