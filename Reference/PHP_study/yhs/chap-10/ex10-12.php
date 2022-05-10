<?php
	echo "<br><B> ※ dir_ex 디렉터리를 열고 파일 목록을 출력하는 프로그램 </B> <hr>";
	echo " ■  디렉터리 경로명 ... <B> [ d:/sample_data/dir_ex/ ] </B><br><hr>";
	$dir = "d:/sample_data/dir_ex/";         // 경로명을 변수에 저장
	if(is_dir($dir))            // 디렉터리 존재 유무 판별
	{
		echo " >> 디렉터리에 존재하는 파일 목록 <br>";
		echo " ------------------------------------------------ <br>";
		if($dirop = opendir($dir))     // 디렉터리가 존재하면 열기
		{
			while(($filerd = readdir($dirop)) != false)    // 열려진 디렉터리 파일 읽기
			{
				echo " > 파일명 : [  {$filerd}  ]<br> ";    // 읽어 들인 파일 출력
			}
			echo " <hr>";
		}
		echo " >> d:/sampl_data/dir_ex 디렉터리에 존재하는 모든 파일을 출력했습니다.";
	}  
	else  
	{
		echo " 존재하지 않는 디렉터리입니다.";
	}
	closedir($dirop);     // 열려진 디렉터리 닫기
?>