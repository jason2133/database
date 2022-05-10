<?php
	echo "<br><B> ※ 파일의 존재 유무를 확인하는 file_exists( )함수 </B> <hr>";
	echo "■ 찾고자 하는 파일명 : <b> [ space.dat ] </b><br>";
	
	$a = "space.dat";
	if(file_exists($a))       // space.dat 파일의 존재여부 체크
	{         
		echo "<hr> >> {$a} 파일 존재 확인완료 !! ";
	}  
	else  
	{
		echo "<hr> >> <font color=red> {$a} </font> 파일은 존재하지 않는 파일 !! ";
	}
?>