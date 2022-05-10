<?php
	echo "<br><B> ※ 파일의 존재 유무를 확인하는 file_exists( )함수 </B> <hr>";
	echo "■ 찾고자 하는 파일명 : <b> [ test.txt ] </b><br>";
	
	$a = "d:/sample_data/test.txt";
	if(file_exists($a))       // test.txt 파일의 존재여부 체크
	{         
		echo "<hr> >> <font color=blue> {$a} </font> 파일 존재 확인완료 !! ";
	}  
	else  
	{
		echo "<hr> >> <font color=red> {$a} </font> 파일은 존재하지 않는 파일 !! ";
	}
?>