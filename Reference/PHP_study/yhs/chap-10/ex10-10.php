<?php
	echo "<br><B> ※ 디스크의 전체 용량과 남은 용량을 반환하는 함수 </B> <hr>";
	echo " ■ C 드라이브의 전체 용량   <br> ";
	
	$dsize = disk_total_space("c:/");            // 전체 용량
	$gsize = ($dsize / 1024 / 1024 / 1024);      // GB로 환산
	$by = number_format($dsize);                 // 세자리마다 콤마(소수점 없어짐)
	$gb1 = number_format($gsize);                // 세자리마다 콤마(소수점 없어짐)

	echo " -------------------------------------------------------------------<br>";            
	echo " > byte 단위로 출력 ... [ {$by} ] bytes<br>";             // byte 단위로 출력
	echo " > GB 단위로 출력 ..... [ {$gb1} ] GB <br><hr>";   // GB 단위로 출력
	echo " ■ C 드라이브의 남은 용량  <br>";
	echo " -------------------------------------------------------------------<br>";            
	
	$dsize = disk_free_space("c:/");             // 남은 용량
	$gsize = ($dsize / 1024 / 1024 / 1024);      // GB로 환산
	$by = number_format($dsize);                 // 세자리마다 콤마(소수점 없어짐)
	$gb2 = number_format($gsize);                // 세자리마다 콤마(소수점 없어짐)
	
	echo " > byte 단위로 출력 ... [ {$by} ] bytes <br>";
	echo " > GB 단위로 출력 ..... [ {$gb2} ] GB <hr>";
	
	$tot = ($gb2 / $gb1) * 100 ;                // 남은 비율 계산(%)
	$total = number_format($tot);
	
	echo " ▣  전체<b><font color=blue> {$gb1} GB</font></b> 중 ";
	echo " <b><font color=red> {$gb2} GB</b> ( {$total} % ) </font>남음 <b><br>";
?>