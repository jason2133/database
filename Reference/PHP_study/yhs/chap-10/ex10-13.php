<?php
	echo "<br><B> ※  파일 목록을 디렉터리와 파일로 구분하여 출력하는 프로그램  </B> <hr>";
	echo " ■ 디렉터리 경로명 ... <B>[ d:/sample_data/dir_ex/ ] </B><hr>";
	echo " [ 범례 ] <br> ";
	echo " > dir type ...... 디렉터리 <br> ";
	echo " > file type ..... 파일 <hr>";	
	
	$dir = "d:/sample_data/dir_ex/";         // 경로명을 변수에 저장

	if(is_dir($dir))            // 디렉터리 존재 유무 판별
	{
		if($dirop = opendir($dir))     // 디렉터리가 존재하면 열기
		{
			while(($filerd = readdir($dirop)) != false)    // 열려진 디렉터리 파일 읽기
			{
				echo " > 파일명 : [ {$filerd} ]  ..... ";    // 읽어 들인 파일 출력
				echo filetype($dir . $filerd) . " type <br>";   // 파일과 디렉터리 타입
			}
		}
	}
	else  
	{
		echo " >존재하지 않는 디렉터리입니다. <br>";
	}

	echo " <hr>";
	closedir($dirop);     // 열려진 디렉터리 닫기
?>