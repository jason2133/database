<?php
	echo "<br><B> ※ 파일의 내용을 읽어와 다른 파일로 기록하는 함수 </B> <hr>";
	$fn = "d:/sample_data/exam.txt";     
	echo " ■ 읽어올 파일 :  <b> {$fn} </b><br>";
	
	if(file_exists($fn))              // 파일 존재 유무 확인
	{
		$fp = fopen($fn, "r");     // 파일이 존재하면 파일 열기
		echo " >> 파일 열기 성공 !! (파일에 들어있는 내용입니다..)<br><hr>";
	} 
	else 
	{
		echo " >> 파일이 없습니다... <br>";
		exit;
	}
	
	$content = fread($fp, filesize($fn));
	$content = str_replace("\n", "<br>", $content);
	$size=filesize($fn);
	
	echo " a. 읽어온 파일의 크기 : <b>{$size} byte </b><br>";
	echo "------------------------------------------------------------------------<br>";
	echo "<b> {$content} </b>";
	$fw = fopen("d:/sample_data/happy.txt", "a");  //새로운 happy.txt 파일을 생성(모드 a적용)
	fwrite($fw, $content);                         //새로 생성된 happy.txt 파일에 기록
	echo "<br>------------------------------------------------------------------------<br>";
	echo " b. 읽어온 파일의 크기 : [ <b> {$size} ] byte </b>만큼 기록합니다...<br>";
	fclose($fp);
	echo "<hr>";
	echo " ▶ 노트패드 창에서 새롭게 만들어진 ";
	echo " <b>\"happy.txt\" </b>파일을 열어서 확인해 보세요 !! <br>";
?>