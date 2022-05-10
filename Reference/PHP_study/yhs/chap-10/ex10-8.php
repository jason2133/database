<?php
	echo "<br><B> ※ filesize( )함수로 파일의 크기 값 출력 </B> <hr>";
	echo " ■ 대상 파일명 : <b> [ exam.txt ]</b><br> ";
	
	$file_name ="d:/sample_data/exam.txt";
	$size = filesize("$file_name");  

	echo "<hr> >> {$file_name} 파일의 크기는 [ {$size} ] byte 입니다.";
?>